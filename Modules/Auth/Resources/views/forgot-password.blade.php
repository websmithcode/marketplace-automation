<x-auth::guest-layout>
  <x-auth::card>
    <x-slot name="logo">
      <a href="/">
        <x-core::application-logo class="h-20 w-20 fill-current text-gray-500" />
      </a>
    </x-slot>

    <div class="mb-4 text-sm text-gray-600">
      {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth::session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth::validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('password.email') }}">
      @csrf

      <!-- Email Address -->
      <div>
        <x-auth::label for="email" :value="__('Email')" />

        <input id="email" class="mt-1 block w-full" type="email" name="email" :value="old('email')" required
          autofocus />
      </div>

      <div class="mt-4 flex items-center justify-end">
        <x-auth::button>
          {{ __('Email Password Reset Link') }}
          </x-button>
      </div>
    </form>
    </x-auth-card>
    </x-guest-layout>
