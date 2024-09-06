<button id="{{ $id }}" data-dropdown-toggle="{{ $dataToggle }}" type="button" class="rounded-main">
    @if ((isset($selectedItem['icon']) || isset($selectedItem['src'])) && isset($selectedItem['name']))
        <div class="flex items-center gap-2">
            @if (isset($selectedItem['src']))
                <img class="w-small-img h-small-img rounded-main" src="{{ $selectedItem['src'] }}" alt=""
                    srcset="">
            @elseif (isset($selectedItem['icon']))
                <i class="fa-solid {{ $selectedItem['icon'] }}"></i>
            @endif
            <span>
                {{ $selectedItem['name'] }}
            </span>
        </div>
    @elseif (isset($selectedItem['name']))
        <span>
            {{ $selectedItem['name'] }}
        </span>
    @elseif (isset($selectedItem['icon']) || isset($selectedItem['src']))
        @if (isset($selectedItem['src']))
            <img class="w-small-img h-small-img rounded-main" src="{{ $selectedItem['src'] }}" alt=""
                srcset="">
        @elseif (isset($selectedItem['icon']))
            <i class="fa-solid {{ $selectedItem['icon'] }}"></i>
        @endif
    @endif
</button>

<div id="{{ $dataToggle }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
    <ul class="py-2 text-sm text-gray-700" aria-labelledby="{{ $id }}">
        @foreach ($items as $item)
            @if ((isset($item['icon']) || isset($item['src'])) && isset($item['name']))
                <li>
                    <a href="{{ isset($item['link']) ? $item['link'] : '#' }}"
                        class="flex items-center gap-4 px-4 py-2 hover:bg-gray-100">
                        @if (isset($item['src']))
                            <img class="w-small-img h-small-img rounded-main" src="{{ $item['src'] }}" alt=""
                                srcset="">
                        @elseif (isset($item['icon']))
                            <i class="fa-solid {{ $item['icon'] }}"></i>
                        @endif
                        {{ $item['name'] }}
                    </a>
                </li>
            @elseif (isset($item['name']))
                <li>
                    <a href="{{ isset($item['link']) ? $item['link'] : '#' }}"
                        class="flex items-center px-4 py-2 hover:bg-gray-100">
                        {{ $item['name'] }}
                    </a>
                </li>
            @endif
        @endforeach

    </ul>
</div>
