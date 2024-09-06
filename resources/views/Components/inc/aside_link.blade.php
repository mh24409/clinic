@props([
    'dropdowns' => [],
    'type' => 'link',
    'icon' => null,
    'name' => null,
    'link' => null,
    'id' => null,
    'number' => null,
    'active' => false,
])
<li>
    <{{ $type == 'dropdown' || $type == 'button' ? 'button type=button' : 'a href=' . $link . '' }}
    {{ $attributes->merge(['class' =>  $active ? 'bg-primary text-white hover:bg-primary-100 flex items-center w-full px-2 py-1 text-base text-gray-900 transition duration-75 rounded-lg group' : 'bg-gray-50 hover:bg-gray-100 flex items-center w-full px-2 py-1 text-base text-gray-900 transition duration-75 rounded-lg group']) }}
        {{ $type == 'dropdown' ? 'aria-controls=' . $id . ' data-collapse-toggle=' . $id . '' : '' }}
        aria-expanded= "{{ $active ? 'true' : 'false' }}">
        <span class="p-2  rounded-main">
            <i class="fa-regular {{ $icon }}"></i>
        </span>
        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">{{ $name }}</span>
        @if ($type == 'dropdown')
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        @elseif ($type == 'link' && isset($number))
            <span
                class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full">{{ $number }}</span>
        @endif
        <{{ $type == 'link' ? '/a' : '/button' }} />
        {{-- drop list  --}}
        <ul id="{{ $type == 'dropdown' ? $id : '' }}" class="  {{ $active ? '' : 'hidden' }} py-2 space-y-2">
            @foreach ($dropdowns as $dropdown)
                <li>
                    <a href="{{ $dropdown['link'] }}"
                        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">{{ $dropdown['name'] }}</a>
                </li>
            @endforeach
        </ul>
</li>
