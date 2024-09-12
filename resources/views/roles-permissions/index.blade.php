<x-layouts.app :title="__('Roles & Permissions')" :meta_description="__('Roles & Permissions')" :meta_keywords="__('Roles & Permissions')" :meta_image="asset('images/logo.png')">
    @php
        $breadcrumbItems = [
            __('Dashboard') => ['link' => route('home'), 'icon' => 'fa-solid fa-house-laptop'],
            __('Roles & Permissions') => null,
        ];
    @endphp
    <x-inc.breadcrumb :breadcrumbItems="$breadcrumbItems" />

    <div class="mt-4 ">
        <div class="grid lg:grid-cols-3 gap-4 md:grid-cols-1">
            <div class="col-span-2">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg h-full" id="roles_permissions_table">
                    <x-inc.loading />
                </div>
            </div>
            <div class="lg:col-span-1 col-span-2 shadow-md sm:rounded-lg ">
                <x-inc.form id="role_form" action="{{ route('roles-permissions.store') }}" method="POST">
                    <div class="p-4">
                        <div
                            class="mb-4 text-md font-bold text-left rtl:text-right text-gray-900 bg-white dark:text-white">
                            {{ __('Add New Role') }}
                        </div>
                        <x-inc.input :withLabel="true" :label="__('Name')" :name="'name'" :id="'name'"
                            :type="'text'" :required="false" :value="old('name')" />
                        <div class="flex justify-end">
                            <x-inc.button-primary class="bg-primary" type="submit" :label="__('Save')" />
                        </div>
                    </div>
                </x-inc.form>
                <hr>
                <x-inc.form id="permission_form" action="{{ route('roles-permissions.store-permission') }}" method="POST">
                    <div class="p-4">
                        <div
                            class="mb-4 text-md font-bold text-left rtl:text-right text-gray-900 bg-white dark:text-white">
                            {{ __('Add New permission') }}
                        </div>
                        <x-inc.input :withLabel="true" :label="__('Name')" :name="'name'" :id="'permission_name'"
                            :type="'text'" :required="false" :value="old('name')" />
                        <div class="flex justify-end">
                            <x-inc.button-primary class="bg-primary" type="submit" :label="__('Save')" />
                        </div>
                    </div>
                </x-inc.form>
            </div>
        </div>
    </div>
    <div class="hidden" id="loading">
        <x-inc.loading />
    </div>

    @push('scripts')
        <script src="{{ Vite::asset('resources/js/roles.js') }}"></script>
    @endpush
</x-layouts.app>
