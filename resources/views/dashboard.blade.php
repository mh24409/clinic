<x-layouts.app :title="__('Dashboard')" :meta_description="__('Dashboard')" :meta_keywords="__('Dashboard')" :meta_image="asset('images/logo.png')">
    @php
        $breadcrumbItems = [
            'Dashboard' => null,
        ];
    @endphp
    <x-inc.breadcrumb :breadcrumbItems="$breadcrumbItems" />

    <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-4 mt-8">
        <div class="w-100 rounded-main p-6 grid grid-cols-4 gap-4 relative doctor-card">
            <x-dashboard_components.auth_card />
        </div>
        <div class="grid grid-cols-3 gap-4">
            <x-dashboard_components.statistics />
        </div>
    </div>

    <div class="grid lg:grid-cols-2 md:grid-cols-1 gap-4 mt-4">
        <div class="">
            <x-dashboard_components.charts.patients />
        </div>
        <div class="">
            <x-dashboard_components.charts.appointments />
        </div>
    </div>
    <div class="grid lg:grid-cols-4 grid-cols-1 gap-4 mt-4">
        <div class="flex flex-col items-center justify-center gap-2">
            <x-dashboard_components.charts.types />
        </div>
        <div class=" col-span-3">
            <x-dashboard_components.charts.incomes />
        </div>
    </div>
    @push('scripts')
        @vite('resources/js/dashboard.js')
    @endpush
</x-layouts.app>
