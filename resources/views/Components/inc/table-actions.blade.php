
    @if (isset($edit))
        <a href="{{ $edit }}" class="edit-record font-medium text-accent hover:underline"
            title="{{ __('Edit') }}"> <i class="fa fa-solid fa-edit fa-lg"></i> </a>
    @endif
    @if (isset($show))
        <a href="{{ $show }}" class="show-record font-medium text-blue-600 dark:text-blue-500 hover:underline"
            title="{{ __('Show') }}"><i class="fa fa-solid fa-eye fa-lg"></i></a>
    @endif
    @if (isset($destroy))
        <x-inc.form :id="'delete_form'" :method="'DELETE'" action="{{ $destroy }}" >
            <button type="submit" class="font-medium text-red-600 delete-record dark:text-red-500 hover:underline"
                title="{{ __('destroy') }}">
                <i class="fa fa-solid fa-trash fa-lg"></i>
            </button>
        </x-inc.form>
    @endif
