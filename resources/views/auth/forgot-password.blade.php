<x-guest-layout>
    <x-jet-authentication-card>

        <div class="sign-in-from">
            <h1 class="mb-0">Restaurar contraseña</h1>
            <p>{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}</p>

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <x-jet-validation-errors class="mb-3" />
            
            <form method="POST" action="/forgot-password" class="mt-4">
                @csrf

                <div class="form-group">
                    <x-jet-label value="Email" />
                    <x-jet-input type="email" name="email" :value="old('email')" required autofocus class="mb'0"/>
                </div>

                <div class="d-inline-block w-100">
                    <button type="submit" class="btn btn-primary float-right">{{ __('Email Password Reset Link') }}</button>
                </div>
            </form>
        </div>
    </x-jet-authentication-card>
</x-guest-layout>