<div>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-label for="email" :value="__('Email')" />

            <x-input wire:model='email' id="email" class="block mt-1 w-full"
                            type="email"
                            name="email"
                            :value="old('email')" />
            @error('email') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input wire:model='password' id="password" class="block mt-1 w-full"
                            type="password"
                            name="password" />
            @error('password') <span class="error">{{ $message }}</span> @enderror
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-button class="ml-3" wire:click.prevent='submit'>
                {{ __('Log in') }}
            </x-button>
        </div>
    </form>
</div>
