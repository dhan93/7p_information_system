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
  <link rel="stylesheet" href="https://i.icomoon.io/public/temp/f727c0605b/s7p_is/style.css">

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
      <h1 class="mb-4 text-2xl text-center">
        @yield('page_title')
      </h1>
      <div class="flex flex-col w-full mx-auto mb-4 sm:flex-row md:w-4/5 lg:2/3 xl:w-1/2">
        <x-label for="class_selector" value="Kelas Aktif" class="flex-initial my-auto mr-5" />
        {{-- <svg class="absolute w-2 h-2 m-4 pointer-events-none top-3 right-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232"><path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero"/></svg> --}}
        <select 
          name="class_selector" 
          id="class_selector" 
          class="flex-grow h-10 pl-5 pr-10 text-gray-600 bg-white border border-gray-300 rounded-lg appearance-none hover:border-gray-400 focus:outline-none"
        > 
          <option value="s7p4">Sekolah 7 Perempuan Season 4</option>
        </select>
      </div>
      
      @yield('main')
    </main>
  </div>
  
</body>
</html>