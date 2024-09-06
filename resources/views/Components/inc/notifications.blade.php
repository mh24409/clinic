<button id="{{ $id }}" data-dropdown-toggle="dropdownNotification"
    class="relative inline-flex items-center text-sm font-medium text-center text-gray-500 hover:text-gray-900 focus:outline-none"
    type="button">
    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
        fill="currentColor" viewBox="0 0 24 24">
        <path
            d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM6 6a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 6 6Zm-2 4H3a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 18 6Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
    </svg>
    <div
        class="absolute block w-3 h-3 bg-red-500 border-1 border-white rounded-full -top-0.5 start-2.5">
    </div>
</button>

<!-- Dropdown menu -->
<div id="dropdownNotification"
    class="z-20 hidden w-full max-w-sm bg-white divide-y divide-gray-100 rounded-lg shadow"
    aria-labelledby="{{ $id }}">
    <div
        class="block px-4 py-2 font-medium text-center text-gray-700 rounded-t-lg bg-gray-50">
        Notifications
    </div>
    <div class="divide-y divide-gray-100">
        @foreach ($items as $item)
            <a href="#" class="flex px-4 py-3 hover:bg-gray-100">
                <div class="flex-shrink-0">
                    <img class="rounded-full w-11 h-11" src="{{ $item['image'] }}" alt="Jese image">
                    <div
                        class="absolute flex items-center justify-center w-5 h-5 ms-6 -mt-5 bg-blue-600 border border-white rounded-full">
                        @isset($item['icon'])
                            {!! $item['icon'] !!}
                        @endisset
                    </div>
                </div>
                <div class="w-full ps-3">
                    <div class="text-gray-500 text-sm mb-1.5">New message from <span
                            class="font-semibold text-gray-900">{{ $item['name'] }}</span>:
                        "{{ $item['message'] }}"</div>
                    <div class="text-xs text-blue-600">{{ $item['time'] }}</div>
                </div>
            </a>
        @endforeach
    </div>
    <a href="#"
        class="block py-2 text-sm font-medium text-center text-gray-900 rounded-b-lg bg-gray-50 hover:bg-gray-100">
        <div class="inline-flex items-center ">
            <svg class="w-4 h-4 me-2 text-gray-500" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 14">
                <path
                    d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
            </svg>
            View all
        </div>
    </a>
</div>
