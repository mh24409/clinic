@props(['method' => 'POST', 'action' => '#'])
<form {{ $attributes }} method="POST" action="{{ $action }}">
    @csrf
    @method($method)
    {{ $slot }}
</form>
