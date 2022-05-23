<x-guest-layout>
    <x-jet-authentication-card>
        <div class="sign-in-from">
            <h1 class="mb-0">Iniciar Sesión</h1>

            @if (session('status'))
                <div class="alert alert-success mb-3 rounded-0" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="mt-4">
                @csrf
                <div class="form-group">
                    <x-jet-label value="{{ __('Email') }}" />

                    <x-jet-input class="{{ $errors->has('email') ? 'is-invalid' : '' }} form-control mb-0" type="email" name="email" :value="old('email')" required />
                    <x-jet-input-error for="email"></x-jet-input-error>
                </div>

                <div class="form-group">
                    <x-jet-label value="{{ __('Password') }}" />

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="float-right">{{ __('Forgot your password?') }}</a>
                    @endif
                    <x-jet-input class="form-control mb-0{{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
                        name="password" required autocomplete="current-password" />
                    <x-jet-input-error for="password"></x-jet-input-error>
                </div>

                <div class="d-inline-block w-100">
                    <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                        <x-jet-checkbox id="remember_me" name="remember" class="custom-control-input"/>
                        <label class="custom-control-label" for="remember_me">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Ingresar</button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>