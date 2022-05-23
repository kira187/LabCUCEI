<x-guest-layout>
    <x-jet-authentication-card>

        <div class="sign-in-from">
            <h1 class="mb-0">Registro</h1>
            <form method="POST" action="{{ route('register') }}" class="mt-4">
                @csrf
                <div class="form-group">
                    <x-jet-label value="{{ __('Name') }}" />

                    <x-jet-input class="{{ $errors->has('name') ? 'is-invalid' : '' }} mb-0" type="text" name="name"
                                 :value="old('name')" required autofocus autocomplete="name" />
                    <x-jet-input-error for="name"></x-jet-input-error>
                </div>
                <div class="form-group">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }} mb-0" type="email" name="email"
                                 :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>
                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    <x-jet-input class="{{ $errors->has('password') ? 'is-invalid' : '' }} mb-0" type="password"
                                 name="password" required autocomplete="new-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>
                <div class="form-group">
                    <x-jet-label value="{{ __('Confirm Password') }}" />

                    <x-jet-input class="mb-0" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <div class="d-inline-block w-100">
                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mb-3">
                            <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="terms">
                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'">'.__('Terms of Service').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                </label>
                            </div>
                        </div>
                    @endif
                    <button type="submit" class="btn btn-primary float-right">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>