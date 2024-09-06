@if ($attributes['withLabel'])
    <div class="form-group flex gap-1 flex-col">
        <label for="{{ $attributes['id'] }}">{{ $attributes['label'] }}</label>
@endif
@if ($attributes['type'] == 'select')
    <select
        {{ $attributes->except(['items', 'withLabel', 'label'])->merge(['class' => 'block p-2 ps-10 text-sm text-gray-900 rounded-main bg-gray-80 focus:outline-none focus:ring focus:ring-accent']) }}>
        @foreach ($items as $item)
            <option value="{{ $item['value'] }}">{{ $item['text'] }}</option>
        @endforeach
    </select>
@else
    <input
        {{ $attributes->merge(['class' => 'block p-2 ps-10 text-sm text-gray-900 rounded-main bg-gray-80 focus:outline-none focus:ring focus:ring-accent']) }}>
@endif
@if ($attributes['label'])
    </div>
@endif
