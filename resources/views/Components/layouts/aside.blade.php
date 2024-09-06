<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <x-inc.aside_user />

        <ul class="space-y-2 font-medium border-t  ">
            @php
                $dropdowns = [
                    [
                        'name' => 'Dashboard',
                        'link' => route('home'),
                    ],
                    [
                        'name' => 'Dashboard 1',
                        'link' => route('home'),
                    ],
                    [
                        'name' => 'Dashboard 2',
                        'link' => route('home'),
                    ],
                ];
            @endphp
            <x-inc.aside_link :active="true" :dropdowns="[
                [
                    'name' => __('List Users'),
                    'link' => route('users.index'),
                ],
                [
                    'name' => __('Add Users'),
                    'link' => route('users.create'),
                ],
            ]" :icon="'fa-user'" :type="'dropdown'" :id="'users_dropdown'"
                :name="__('Users')" />
            <x-inc.aside_link :icon="'fa-folder-open'" :type="'link'" :number="'55'" :name="'Address'"
                :link="route('home')" />
            <x-inc.aside_link :dropdowns="$dropdowns" :icon="'fa-folder-open'" :type="'dropdown'" :id="'Doctors'"
                :name="'Ecommerce'" />
            <x-inc.aside_link :icon="'fa-folder-open'" :type="'link'" :number="'55'" :name="'Ecommerce'"
                :link="route('home')" />
            <x-inc.aside_link :dropdowns="$dropdowns" :icon="'fa-folder-open'" :type="'dropdown'" :id="'ecommerce'"
                :name="'Ecommerce'" />
            <x-inc.aside_link :icon="'fa-folder-open'" :type="'link'" :number="'55'" :name="'account'"
                :link="route('home')" />
            <x-inc.aside_link :dropdowns="$dropdowns" :icon="'fa-folder-open'" :type="'dropdown'" :id="'Staff'"
                :name="'Ecommerce'" />
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-inc.aside_link class="bg-red-500 hover:bg-red-800 text-white " :icon="'fa-folder-open'" :type="'button'" :name="__('Log Out')" :link="route('logout')" />
            </form>

        </ul>
    </div>
</aside>
