<x-layouts.auth :title="__('Login')" :meta_description="__('Login')" :meta_keywords="__('Login')" :meta_image="asset('images/logo.png')">


    <div class="flex justify-center items-center relative" style="height: 100vh">
        <img class="absolute top-0 right-0 animate__animated  animate__infinite animate__shakeY my-element"
            src="{{ Vite::asset('resources/images/assets/dctr.png') }}">
        <div class="lg:w-5/12 h-3/5 shadow-md rounded-main relative flex flex-col items-center justify-center form-bg">
            <img style="left: -20px ; top: -20px"
                class="absolute   animate__animated  animate__infinite animate__shakeY my-element"
                src="{{ Vite::asset('resources/images/assets/landing-slider-1-image-2.png') }}">
            <form class="lg:w-4/5 space-y-5 p-5 " method="POST" action="{{ route('login') }}">
                @csrf
                <div class="flex justify-center items-center">
                    <img src="{{ Vite::asset('resources/images/logo.png') }}" class="h-20" alt=""
                        srcset="">
                </div>
                <x-inc.input :icon="'fa-solid fa-at'" :withLabel="true" :label="__('email')" :name="'email'" :id="'email'"
                    :type="'email'" :autofocus="true" :autocomplete="'username'" :required="true" :value="old('email')" />

                @if ($errors->get('email'))
                    <ul class= 'text-sm text-red-600 space-y-1'>
                        @foreach ($errors->get('email') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif
                <x-inc.input :icon="'fa-solid fa-key'" :withLabel="true" :label="__('password')" :name="'password'"
                    :id="'password'" :type="'password'" :autofocus="true" :autocomplete="'current-password'" :required="true" />

                @if ($errors->get('password'))
                    <ul class= 'text-sm text-red-600 space-y-1'>
                        @foreach ($errors->get('password') as $message)
                            <li>{{ $message }}</li>
                        @endforeach
                    </ul>
                @endif

                <div class="flex items-center justify-between">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                    @if (Route::has('password.request'))
                        <a class="  text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                            href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>

                <div class="">
                    <x-inc.button-primary class="bg-primary w-full" type="submit" :label="__('Log in')" />
                </div>
            </form>
        </div>
    </div>
</x-layouts.auth>
