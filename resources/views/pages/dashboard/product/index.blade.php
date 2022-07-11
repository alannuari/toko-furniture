<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Product
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">
                <a href="{{ route('dashboard.product.create') }}" class="bg-green-500 hover:bg-green-600 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Create Product
                </a>
            </div>
            <div class="shadow overflow-hidden rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                    <table id="crudTable" style="width: 100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        let datatable = $('#crudTable').DataTable({
            ajax: {
                url: '{!! url()->current() !!}'
            },
            columns: [
                {data: 'id', name: 'id', width: '5%'},
                {data: 'name', name: 'name'},
                {data: 'price', name: 'price'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false,
                    width: '25%'
                }
            ]
        })
    </script>
</x-app-layout>
