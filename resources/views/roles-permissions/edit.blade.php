<x-layouts.app :title="__('Roles & Permissions')" :meta_description="__('Roles & Permissions')" :meta_keywords="__('Roles & Permissions')" :meta_image="asset('images/logo.png')">
    @php
        $breadcrumbItems = [
            __('Dashboard') => ['link' => route('home'), 'icon' => 'fa-solid fa-house-laptop'],
            __('Roles & Permissions') => [
                'link' => route('roles-permissions.index'),
                'icon' => 'fa-solid fa-house-laptop',
            ],
            $role->name => null,
        ];
    @endphp
    <x-inc.breadcrumb :breadcrumbItems="$breadcrumbItems" />

    <div class="mt-4 ">
        <x-inc.form :action="route('roles-permissions.update', $role->id)" :method="'PUT'">
            <h1 class="mb-4 font-bold text-gray-900 dark:text-white capitalize"> {{ __('available permissions for') }}
                {{ $role->name }}</h1>
            @include('roles-permissions.partials.all-permissions')
            <div class="flex justify-end">
                <x-inc.button-primary type="submit" :label="__('Save')" />
            </div>
        </x-inc.form>
    </div>
    <div class="hidden" id="loading">
        <x-inc.loading />
    </div>

    @push('scripts')
        <script src="{{ Vite::asset('resources/js/roles.js') }}"></script>
    @endpush
</x-layouts.app>
