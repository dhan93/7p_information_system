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
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/8899ffd684/s7p_is/style.css">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  {{-- <script src="{{ (env('APP_ENV') === 'development') ? mix('js/app.js') : asset('js/app.js') }}"></script> --}}
</head>
<body class="flex flex-col w-screen min-h-screen font-sans antialiased text-gray-600" x-data="{ leftNavOpen: false, profileMenuOpen: false }">
  <header class="grid grid-cols-5 py-3 text-3xl text-pink-600 bg-pink-100 bg-gradient-to-br from-pink-300 via-pink-300 to-pink-400">
    <nav class="items-center mx-3 align-bottom">
      <a href="#" class="icon-menu" x-on:click="leftNavOpen = ! leftNavOpen"></a>
    </nav>
    <div class="col-span-3 mx-3 font-mono">
      <picture class="w-full">
        <source srcset="{{ asset('images/logo_7_Perempuan_putih.webp') }}" type="image/webp">
        <source srcset="{{ asset('images/logo_7_Perempuan_putih.png') }}" type="image/png"> 
        <img src="{{ asset('images/logo_7_Perempuan_putih.png') }}" class="w-auto h-10 mx-auto" alt="Logo">
      </picture>
      {{-- Sistem Informasi 7P --}}
    </div>
  </header>

  <div class="flex flex-col flex-1 md:flex-row bg-gray-50">
    @include('layouts.sidebar')
    <main class="flex-grow px-5 py-2">
      <h1 class="text-2xl text-center">
        @yield('page_title')
      </h1>
      @yield('main')
    </main>
  </div>
  
</body>
</html>