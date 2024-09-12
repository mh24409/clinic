@if ($attributes['withLabel'])
    <div class="form-group flex  flex-col">
        <label for="{{ $attributes['id'] }}"
            class="block mb-2 text-sm font-medium text-gray-600 dark:text-white capitalize">{{ $attributes['label'] }}
            <span class="text-red-500 text-xs">{{ $attributes['required'] ? '*' : '' }}</span></label>
@endif
<div class="relative">
    <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
        <i class=" {{ $attributes['icon'] }} text-gray-400"></i>
    </div>
    @if ($attributes['type'] == 'select')
        <select
            {{ $attributes->except(['items', 'withLabel', 'label'])->merge(['class' => 'w-full block p-2 ps-10 text-sm text-gray-900 rounded-main bg-gray-80 focus:outline-none focus:ring focus:ring-accent border border-gray-300 ']) }}>
            @foreach ($items as $item)
                <option {{ $selected == $item['value'] ? 'selected' : '' }} value="{{ $item['value'] }}">
                    {{ $item['text'] }}</option>
            @endforeach
        </select>
    @else
        <input
            {{ $attributes->merge(['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500']) }}>
    @endif
</div>
@if ($attributes['label'])
    </div>
@endif
