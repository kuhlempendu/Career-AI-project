<x-authentication-layout>
    <h1 class="text-3xl text-gray-800 dark:text-gray-100 font-bold mb-6">{{ __('Create your Account') }}</h1>
    <!-- Form -->
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="space-y-4">
            <div>
                <x-label for="name">{{ __('Full Name') }} <span class="text-red-500">*</span></x-label>
                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="email">{{ __('Email Address') }} <span class="text-red-500">*</span></x-label>
                <x-input id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div>
                <x-label for="password">{{ __('Password') }}</x-label>
                <x-input id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div>
                <x-label for="password_confirmation">{{ __('Confirm Password') }}</x-label>
                <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <!-- Additional Fields -->
            <div>
                <x-label for="date_of_birth">{{ __('Date of Birth') }}</x-label>
                <x-input id="date_of_birth" type="date" name="date_of_birth" :value="old('date_of_birth')" />
            </div>

            <div>
                <x-label for="gender">{{ __('Gender') }}</x-label>
                <x-input id="gender" type="text" name="gender" :value="old('gender')" />
            </div>

            <div>
                <x-label for="nationality">{{ __('Nationality') }}</x-label>
                <x-input id="nationality" type="text" name="nationality" :value="old('nationality')" />
            </div>

            <div>
                <x-label for="phone_number">{{ __('Phone Number') }}</x-label>
                <x-input id="phone_number" type="text" name="phone_number" :value="old('phone_number')" />
            </div>

            <div>
                <x-label for="address">{{ __('Address') }}</x-label>
                <x-input id="address" type="text" name="address" :value="old('address')" />
            </div>

            <div>
                <x-label for="languages_spoken">{{ __('Languages Spoken') }} (comma-separated)</x-label>
                <x-input id="languages_spoken" type="text" name="languages_spoken" :value="old('languages_spoken')" />
            </div>

            <div>
                <x-label for="personality_traits">{{ __('Personality Traits') }} (comma-separated)</x-label>
                <x-input id="personality_traits" type="text" name="personality_traits" :value="old('personality_traits')" />
            </div>

            <div>
                <x-label for="learning_style">{{ __('Learning Style') }}</x-label>
                <x-input id="learning_style" type="text" name="learning_style" :value="old('learning_style')" />
            </div>

            <div>
                <x-label for="hobbies_and_interests">{{ __('Hobbies and Interests') }} (comma-separated)</x-label>
                <x-input id="hobbies_and_interests" type="text" name="hobbies_and_interests" :value="old('hobbies_and_interests')" />
            </div>
            <!-- End of Additional Fields -->
        </div>
        <div class="flex items-center justify-between mt-6">
            <div class="mr-1">
                <label class="flex items-center" name="newsletter" id="newsletter">
                    <input type="checkbox" class="form-checkbox" />
                    <span class="text-sm ml-2">Email me about product news.</span>
                </label>
            </div>
            <x-button>
                {{ __('Sign Up') }}
            </x-button>
        </div>
        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-6">
                <label class="flex items-start">
                    <input type="checkbox" class="form-checkbox mt-1" name="terms" id="terms" />
                    <span class="text-sm ml-2">
                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="text-sm underline hover:no-underline">'.__('Terms of Service').'</a>',
                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="text-sm underline hover:no-underline">'.__('Privacy Policy').'</a>',
                        ]) !!}
                    </span>
                </label>
            </div>
        @endif
    </form>
    <x-validation-errors class="mt-4" />
    <!-- Footer -->
    <div class="pt-5 mt-6 border-t border-gray-100 dark:border-gray-700/60">
        <div class="text-sm">
            {{ __('Have an account?') }} <a class="font-medium text-violet-500 hover:text-violet-600 dark:hover:text-violet-400" href="{{ route('login') }}">{{ __('Sign In') }}</a>
        </div>
    </div>
</x-authentication-layout>
