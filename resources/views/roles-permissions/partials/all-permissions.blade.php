
<ul
    class="items-center w-full text-sm font-medium text-gray-900 bg-white  grid lg:grid-cols-5 gap-4 md:grid-cols-3  dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    @foreach ($permissions as $permission)
        <li class="w-full  border">
            <div class="flex items-center ps-3">
                <input {{ in_array($permission->name, $selected_permissions) ? 'checked' : '' }} name="permissions[]"
                    id="permission-{{ $permission->id }}" type="checkbox" value="{{ $permission->name }}"
                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                <label for="permission-{{ $permission->id }}"
                    class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300 capitalize">{{ $permission->name }}</label>
            </div>
        </li>
    @endforeach
</ul>
