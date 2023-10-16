<x-guest-layout>
    <p class="mt-2 font-bold text-center lg:text-3xl">Sangguniang Barangay ng Gatid</p>
    <form class="mt-10" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <fieldset class="input-group flex justify-around">
            <legend class="font-bold">Full Name:</legend>
            <div>
                <x-input-label class="font-semibold" for="first_name" :value="__('First Name')" />
                <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name"
                    :value="old('first_name')" required autofocus autocomplete="first_name"
                    placeholder="Enter First Name" />
                <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
            </div>

            <div>
                <x-input-label class="font-semibold" for="middle_name" :value="__('Middle Name')" />
                <x-text-input id="middle_name" class="block mt-1 w-full" type="text" name="middle_name"
                    :value="old('middle_name')" required autofocus autocomplete="middle_name"
                    placeholder="Enter Middle Name" />
                <x-input-error :messages="$errors->get('middle_name')" class="mt-2" />
            </div>

            <div>
                <x-input-label class="font-semibold" for="last_name" :value="__('Last Name')" />
                <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name"
                    :value="old('last_name')" required autofocus autocomplete="last_name"
                    placeholder="Enter Last Name" />
                <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
            </div>
        </fieldset>

        <!-- Email Address -->
        <fieldset class="input-group flex justify-around mt-4">
            <legend class="font-bold">Contact Details:</legend>

            <div class="w-2/5">
                <x-input-label class="font-semibold" for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="email" placeholder="Enter Email" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="w-2/5">
                <x-input-label class="font-semibold" for="contact_number" :value="__('Contact Number')" />
                <x-text-input id="contact_number" class="block mt-1 w-full" type="text" name="contact_number"
                    :value="old('contact_number')" required autocomplete="contact_number"
                    placeholder="Enter Contact Number" />
                <x-input-error :messages="$errors->get('contact_number')" class="mt-2" />
            </div>
        </fieldset>

        <fieldset class="input-group flex justify-around mt-4">
            <legend class="font-bold">Home Address:</legend>
            <div class="w-2/5">
                <x-input-label class="font-semibold" for="house_no" :value="__('House Number')" />
                <x-text-input id="house_no" class="block mt-1 w-full" type="text" name="house_no"
                    :value="old('house_no')" required autocomplete="house_no" placeholder="Enter House Number" />
                <x-input-error :messages="$errors->get('house_no')" class="mt-2" />
            </div>

            <div class="w-2/5">
                <x-input-label class="font-semibold" for="sitio" :value="__('Sitio')" />
                <x-select-input-sitio id="sitio" class="block mt-1 w-full" name="sitio"
                    :value="old('sitio')" required autocomplete="sitio" />
                <x-input-error :messages="$errors->get('sitio')" class="mt-2" />
            </div>
        </fieldset>

        <!-- Confirm Password -->
        <fieldset class="input-group flex justify-around mt-4">
            <legend class="font-bold">Setup Account Password:</legend>
            <div class="w-2/5">
                <x-input-label class="font-semibold" for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" placeholder="Enter Password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <div class="w-2/5">
                <x-input-label class="font-semibold" for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </fieldset>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>