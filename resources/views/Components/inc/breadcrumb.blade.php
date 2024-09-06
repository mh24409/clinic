@props(['actionButton' => [], 'breadcrumbItems' => []])
<nav class="px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 grid lg:grid-cols-2 md:grid-cols-1"
    aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        @foreach ($breadcrumbItems as $name => $item)
            @if (!$loop->last)
                <li class="inline-flex items-center">
                    <a href="{{ $item['link'] }}"
                        class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                        <i class=" mx-1 {{ $item['icon'] }}"></i>
                        {{ $name }}
                    </a>
                </li>
            @else
                <li aria-current="page">
                    <div class="flex items-center">
                        <svg class="rtl:rotate-180 w-3 h-3 mx-1 text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">{{ $name }}</span>
                    </div>
                </li>
            @endif
        @endforeach
    </ol>
    @if (count($actionButton) > 0)
        <div class="flex justify-end align-center gap-4">
            @foreach ($actionButton as $item)
                <x-inc.link href="{{ $item['link'] }}"> {{ $item['text'] }} </x-inc.link>
            @endforeach
        </div>
    @endif

</nav>
