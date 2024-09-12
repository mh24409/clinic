<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white">
        <x-inc.aside-user />

        <ul class="space-y-2 font-medium border-t  ">
            <x-inc.aside-link :active="true" :dropdowns="[
                [
                    'name' => __('List Roles'),
                    'link' => route('roles-permissions.index'),
                ],
            ]" :icon="'fa-edit'" :type="'dropdown'" :id="'roles_and_permissions_dropdown'"
                :name="__('Roles')" />


            <x-inc.aside-link :active="false" :dropdowns="[
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

            @if (auth()->user()->hasRole('writer'))
                @if (auth()->user()->hasPermissionTo('delete articles'))
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
                    <x-inc.aside-link :dropdowns="$dropdowns" :icon="'fa-folder-open'" :type="'dropdown'" :id="'Doctors'"
                        :name="'Ecommerce'" />
                @endif
            @endif
            {{-- <x-inc.aside-link :icon="'fa-folder-open'" :type="'link'" :number="'55'" :name="'Address'"
                :link="route('home')" /> --}}
            {{-- <x-inc.aside-link :icon="'fa-folder-open'" :type="'link'" :number="'55'" :name="'Ecommerce'"
                :link="route('home')" />
            <x-inc.aside-link :dropdowns="$dropdowns" :icon="'fa-folder-open'" :type="'dropdown'" :id="'ecommerce'"
                :name="'Ecommerce'" />
            <x-inc.aside-link :icon="'fa-folder-open'" :type="'link'" :number="'55'" :name="'account'"
                :link="route('home')" />
            <x-inc.aside-link :dropdowns="$dropdowns" :icon="'fa-folder-open'" :type="'dropdown'" :id="'Staff'"
                :name="'Ecommerce'" /> --}}

            <x-inc.form action="{{ route('logout') }}" method="POST">
                <x-inc.button-primary class="text-center bg-red-500 hover:bg-red-800 text-white w-full transition duration-75 rounded-lg" type="submit"
                    :label="__('Logout')" />
            </x-inc.form>

        </ul>
    </div>
</aside>
