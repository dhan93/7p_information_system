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
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/e4149d2f77/s7p_is/style.css">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  {{-- <script src="{{ (env('APP_ENV') === 'development') ? mix('js/app.js') : asset('js/app.js') }}"></script> --}}
</head>
<body class="flex flex-col w-screen min-h-screen font-sans antialiased text-gray-600" x-data="{ leftNavOpen: false }">
  <header class="flex flex-row py-3 text-3xl text-pink-600 bg-pink-100 bg-gradient-to-br from-pink-300 via-pink-300 to-pink-400">
    <nav class="flex items-center mx-3 align-bottom">
      <a href="#" class="icon-menu" x-on:click="leftNavOpen = ! leftNavOpen"></a>
    </nav>
    <div class="flex-grow mx-3 font-mono">
      <picture class="w-full">
        <source srcset="{{ asset('images/logo_7_Perempuan_putih.webp') }}" type="image/webp">
        <source srcset="{{ asset('images/logo_7_Perempuan_putih.png') }}" type="image/png"> 
        <img src="{{ asset('images/logo_7_Perempuan_putih.png') }}" class="w-auto h-10 mx-auto" alt="Logo">
      </picture>
      {{-- Sistem Informasi 7P --}}
    </div>
    <nav class="flex items-center mx-3 align-bottom">
      <span class="icon-person"></span>
    </nav>
  </header>

  <div class="flex flex-col flex-1 md:flex-row bg-gray-50">
    <aside class="w-full px-3 py-2 bg-red-100 shadow-md md:w-3/12 xl:w-2/12" :class="leftNavOpen ? 'md:hidden' : 'hidden md:block'">
      <ul>
        @for ($i = 0; $i < 10; $i++)
          <li class="text-lg text-center">side menu {{ $i }}</li>
        @endfor
      </ul>
    </aside>
    <main class="flex-grow px-5 py-2">
      <h1 class="text-2xl text-center">
        @yield('page_title')
      </h1>
      @yield('main')
    </main>
  </div>
  
</body>
</html>