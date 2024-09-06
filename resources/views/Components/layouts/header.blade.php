<nav class="fixed top-0 z-50 w-full bg-primary border-b border-gray-200">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                <x-inc.sidebar_toggle_button />
                <x-inc.header_logo />
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3 gap-4">

                    <x-inc.search class="hidden md:block" />
                    @php
                        $notifications = [
                            [
                                'image' => Vite::asset('resources/images/users/1.png'),
                                'name' => 'Jese Leos',
                                'message' => 'Hey, what\'s up? All set for the presentation?',
                                'time' => 'a few moments ago',
                                'icon' => '<svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 18 18">
                                            <path
                                                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                            <path
                                                d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                        </svg>',
                            ],
                            [
                                'image' => Vite::asset('resources/images/users/2.png'),
                                'name' => 'John Doe',
                                'message' => 'Don\'t forget our meeting at 3 PM.',
                                'time' => '10 minutes ago',
                                'icon' => '<svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 18 18">
                                            <path
                                                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                            <path
                                                d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                        </svg>',
                            ],
                            [
                                'image' => Vite::asset('resources/images/users/1.png'),
                                'name' => 'Jane Smith',
                                'message' => 'Can you review my latest report?',
                                'time' => '30 minutes ago',
                                'icon' => '<svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 18 18">
                                            <path
                                                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                            <path
                                                d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                        </svg>',
                            ],
                            [
                                'image' => Vite::asset('resources/images/users/2.png'),
                                'name' => 'John Doe',
                                'message' => 'Don\'t forget our meeting at 3 PM.',
                                'time' => '10 minutes ago',
                                'icon' => '<svg class="w-2 h-2 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" viewBox="0 0 18 18">
                                            <path
                                                d="M1 18h16a1 1 0 0 0 1-1v-6h-4.439a.99.99 0 0 0-.908.6 3.978 3.978 0 0 1-7.306 0 .99.99 0 0 0-.908-.6H0v6a1 1 0 0 0 1 1Z" />
                                            <path
                                                d="M4.439 9a2.99 2.99 0 0 1 2.742 1.8 1.977 1.977 0 0 0 3.638 0A2.99 2.99 0 0 1 13.561 9H17.8L15.977.783A1 1 0 0 0 15 0H3a1 1 0 0 0-.977.783L.2 9h4.239Z" />
                                        </svg>',
                            ],
                        ];
                    @endphp
                    <x-inc.notifications :id="'notifications-dropdown'" :items="$notifications" />
                    @php
                        $languages = [
                            'English' => ['name' => 'en', 'src' => Vite::asset('resources/images/lang/us.svg')],
                            'Arabic' => ['name' => 'ar', 'src' => Vite::asset('resources/images/lang/sa.svg')],
                        ];
                        $selectedLanguage = ['src' => Vite::asset('resources/images/lang/us.svg')];
                    @endphp
                    <x-inc.dropdown :id="'languages-dropdown'" :dataToggle="'dropdown-languages'" :items="$languages" :selectedItem="$selectedLanguage" />
                    @php
                        $links = [
                            'dashborad' => ['name' => 'dashborad', 'link' => route('home')],
                            'settings' => ['name' => 'settings', 'link' => route('home')],
                            'profle' => ['name' => 'profle', 'link' => route('home')],
                            'logout' => ['name' => 'logout', 'link' => route('home')],
                        ];
                        $head = [
                            'src' => Vite::asset('resources/images/users/1.png'),
                        ];
                    @endphp
                    <x-inc.dropdown :id="'user-dropdown'" :dataToggle="'dropdown-user'" :items="$links" :selectedItem="$head" />
                </div>
            </div>
        </div>
    </div>
</nav>
