<x-layouts.app :title="__('Users')" :meta_description="__('Users')" :meta_keywords="__('Users')" :meta_image="asset('images/logo.png')">
    @php
        $breadcrumbItems = [
            __('Dashboard') => ['link' => route('home'), 'icon' => 'fa-solid fa-house-laptop'],
            __('Users') => ['link' => route('users.index'), 'icon' => 'fa-solid fa-user'],
            __('Create User') => null,
        ];
    @endphp
    <x-inc.breadcrumb :breadcrumbItems="$breadcrumbItems" />

    <div class="mt-4">
        <x-inc.form action="{{ route('users.store') }}" method="POST">
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4 ">
                <x-inc.input :placeholder="'John Doe'" :icon="'fa-solid fa-signature'" :required="true" withLabel="true" :label="__('Name')"
                    name="name" id="name" type="text" :value="old('name')" />
                <x-inc.input :placeholder="'example@example.com'" :icon="'fa-solid fa-at'" :required="true" withLabel="true" :label="__('Email')"
                    name="email" id="email" type="email" :value="old('email')" />
                <x-inc.input :placeholder="'12345678'" :icon="'fa-solid fa-key'" :required="true" withLabel="true" label="password"
                    name="password" id="password" type="password" :value="old('password')" />
                <x-inc.input :icon="'fa-solid fa-genderless'" :required="true" withLabel="true" :label="__('Gender')" name="gender"
                    id="gender" :selected="old('gender')" type="select" :items="[['text' => 'Male', 'value' => 'male'], ['text' => 'Female', 'value' => 'female']]" />
                <x-inc.input :icon="'fa-solid fa-heading'" :required="true" withLabel="true" :label="__('Honorific')" name="honorific"
                    id="honorific" :placeholder="'Dr'" type="honorific" :value="old('honorific')" />
                <x-inc.input :icon="'fa-solid fa-heading'" withLabel="true" :label="__('National ID')" name="national_id" id="national_id"
                    :placeholder="'12345678912345'" type="text" :value="old('national_id')" />
                <x-inc.input :icon="'fa-solid fa-heading'" withLabel="true" :label="__('Mobile')" name="mobile" id="mobile"
                    :placeholder="'01559470947'" type="text" :value="old('mobile')" />
            </div>
        </x-inc.form>

    </div>


    @push('scripts')
        <script>
            $(document).ready(function() {

            });
        </script>
    @endpush
</x-layouts.app>
