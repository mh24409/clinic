<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                #
            </th>
            <th scope="col" class="px-6 py-3">
                {{ __('Role') }}
            </th>
            <th scope="col" class="px-6 py-3">
                {{ __('# Permissions') }}
            </th>
            <th scope="col" class="px-6 py-3">
                {{ __('# Users') }}
            </th>
            <th scope="col" class="px-6 py-3">
                <span class="sr-only">{{ __('Edit') }}</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($roles as $role)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{ $loop->iteration }}
                </td>
                <td class="px-6 py-4">
                    {{ $role->name }}
                </td>
                <td class="px-6 py-4">
                    {{ $role->permissions_count }}
                </td>
                <td class="px-6 py-4">
                    {{ $role->users_count }}
                </td>
                <td class="px-6 py-4 flex gap-2">
                    <x-inc.table-actions :edit="route('roles-permissions.edit', $role->id)" :destroy="route('roles-permissions.destroy', $role->id)" />
                    <button onclick="showRoleDetails(`{{ $role->id }}` , `{{ $role->name }}`)"
                        class=" font-medium text-blue-600 dark:text-blue-500 hover:underline"
                        title="{{ __('Show') }}"><i class="fa fa-solid fa-eye fa-lg"></i></button>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
