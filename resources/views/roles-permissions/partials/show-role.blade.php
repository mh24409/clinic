<div class="capitalize">
    <div class="mb-4">
        <span
            class="bg-accent px-1 py-0 rounded-main text-white mx-2">{{ $role->users_count }}</span>{{ __('Person/s have this role') }}
    </div>
    <hr>
    <div class="mt-4">
        @if (count($role->permissions) > 0)
            {{ __('this role have the following permissions') }}
            <div class="mt-4">
                @foreach ($role->permissions as $permission)
                    <span
                        class="bg-primary text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-main ">{{ $permission->name }}</span>
                @endforeach
            </div>
        @else
            {{ __('this role have No permissions') }}
        @endif
    </div>
</div>
