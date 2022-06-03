<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('You\'re in the waitlist. If you have a invite code, enter it here.') }}
        </div>

        <div class="mt-4">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            <form method="POST" action="{{ route('activate') }}">
                @csrf

                <div>
                    <x-label for="code" :value="__('Invite Code')" />

                    <x-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required
                        autofocus />
                </div>

                <div class="mt-2">
                    <x-button>
                        {{ __('Check invitation code') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
