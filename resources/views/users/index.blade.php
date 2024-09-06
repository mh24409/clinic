<x-layouts.app>
    @php
        $breadcrumbItems = [
            __('Dashboard') => ['link' => route('home'), 'icon' => 'fa-solid fa-house'],
            __('Users') => null,
        ];
        $actionButton = [
            [
                'text' => __('Add New User'),
                'link' => Route('users.create'),
            ],
        ];
    @endphp
    <x-inc.breadcrumb :breadcrumbItems="$breadcrumbItems" :actionButton='$actionButton' />

    <div class="mt-4">

        <div id="filter" data-accordion="open">
            <h2 id="filter-heading-1">
                <button type="button"
                    class="flex items-center justify-between w-full px-5 py-3 font-medium rtl:text-right border border-gray-200 rounded-main transition duration-500 ease-in-out  dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-800 gap-3 text-gray-500 dark:text-gray-400"
                    data-accordion-target="#filter-body-1" aria-expanded="true" aria-controls="filter-body-1">
                    <span>Filter</span>
                </button>
            </h2>
            <div id="filter-body-1" aria-labelledby="filter-heading-1" class="transition duration-500 ease-in-out">
                <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <form id="user-filter-form">
                        <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-8">

                            @php
                                $items = [
                                    [
                                        'text' => 'All',
                                        'value' => null,
                                    ],
                                    [
                                        'text' => 'Active',
                                        'value' => 1,
                                    ],
                                    [
                                        'text' => 'Inactive',
                                        'value' => 0,
                                    ],
                                ];
                            @endphp

                            <x-inc.input :withLabel="true" :label="__('Status')" :items="$items" type="select"
                                class="form-control" id="status" name="status" />
                            <x-inc.input :withLabel="true" :label="__('Name')" :items="$items" type="text"
                                class="form-control" id="name" name="name" />
                            <x-inc.input :withLabel="true" :label="__('Email')" :items="$items" type="email"
                                class="form-control" id="email" name="email" />

                        </div>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
            </div>
        </div>


        <table id="users-table" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>

    </div>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.5/css/dataTables.dataTables.min.css">


    @push('scripts')
        <script>
            $(document).ready(function() {
                var table = $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '{{ route('users.index') }}',
                        data: function(d) {
                            d.name = $('#name').val();
                            d.email = $('#email').val();
                        }
                    },
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'created_at',
                            name: 'created_at'
                        },
                        {
                            data: 'updated_at',
                            name: 'updated_at'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });

                $('#user-filter-form').on('submit', function(e) {
                    e.preventDefault();
                    table.ajax.reload();
                });
            });
        </script>
    @endpush
</x-layouts.app>
