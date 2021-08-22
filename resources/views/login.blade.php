<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('page_title'){{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- icomoon -->
  {{-- <link rel="stylesheet" href="https://i.icomoon.io/public/temp/8899ffd684/s7p_is/style.css"> --}}

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  {{-- <script src="{{ (env('APP_ENV') === 'development') ? mix('js/app.js') : asset('js/app.js') }}"></script> --}}
</head>
<body class="grid content-center justify-center w-screen min-h-screen px-3 font-sans antialiased text-gray-600 md:h-screen sm:grid-cols-4 sm:grid-rows-4 lg:grid-cols-6 2xl:grid-cols-8 bg-gradient-to-br from-pink-300 via-pink-300 to-pink-400">
  <form method="POST" class="flex flex-col sm:row-span-2 sm:row-start-2 sm:col-span-2 sm:col-start-2 lg:col-start-3 2xl:col-start-4" action="{{ route('login') }}">
    <picture class="w-full">
      <source srcset="{{ asset('images/logo_7_Perempuan_putih.webp') }}" type="image/webp">
      <source srcset="{{ asset('images/logo_7_Perempuan_putih.png') }}" type="image/png"> 
      <img src="{{ asset('images/logo_7_Perempuan_putih.png') }}" class="w-2/3 h-auto mx-auto" alt="Logo">
    </picture>
    @csrf
    
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <!-- Email Address -->
    <div>
        <x-label for="phone" value="Nomor Whatsapp" class="text-sm font-medium" />

        {{-- <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')" required autofocus /> --}}
        <x-input id="phone" class="block w-full mt-1" type="text" name="phone" value="628161170961" placeholder="contoh: 628123456789" required autofocus />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-label for="password" :value="__('Password')" class="text-sm font-medium" />

        <x-input id="password" class="block w-full mt-1"
                        type="password"
                        name="password"
                        value="password"
                        required autocomplete="current-password" />
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="text-indigo-600 border-gray-300 rounded shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        @if (Route::has('password.request'))
            <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif

        <x-button class="ml-3" type="submit">
            Log in
        </x-button>
    </div>
  </form>
</body>