<a href="{{ route('home') }}" class="flex items-center ps-2.5 mb-5">
    <img src="{{ Vite::asset('resources/images/users/1.png') }}" class="h-6 me-3 sm:h-7" alt="{{ Auth::user()->name }}" />
    <div class="flex flex-col ">
        <span class=" text-md font-semibold whitespace-nowrap">{{ Auth::user()->name }}</span>
        <span class=" text-xs font-semibold whitespace-nowrap">Dental Doctor </span>
    </div>
</a>
