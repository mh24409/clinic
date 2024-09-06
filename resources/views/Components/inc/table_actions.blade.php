@if (isset($edit))
    <a href="{{ $edit }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
        title="{{ __('Edit') }}"> <i class="fa fa-solid fa-edit"></i> </a>
@endif
@if (isset($show))
    <a href="{{ $show }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
        title="{{ __('Show') }}"><i class="fa fa-solid fa-eye"></i></a>
@endif
@if (isset($destroy))
    <a href="{{ $destroy }}" class="font-medium text-red-600 dark:text-red-500 hover:underline"><i
            class="fa fa-solid fa-recycle"></i></a>
@endif
