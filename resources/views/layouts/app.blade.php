<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
  <script src="{{ (env('APP_ENV') === 'development') ? mix('js/app.js') : asset('js/app.js') }}"></script>
</head>
<body class="flex flex-col w-screen min-h-screen font-sans antialiased">
  <header class="flex flex-row py-3 text-3xl text-pink-500 bg-red-100">
    <nav class="flex items-center mx-3 align-bottom">
      <span class="icon-menu"></span>
    </nav>
    <h1 class="mx-5 font-mono">
      {{-- <picture>
        <source srcset="{{ asset('images/logo_7_Perempuan.webp') }}" type="image/webp">
        <source srcset="{{ asset('images/logo_7_Perempuan.png') }}" type="image/png"> 
        <img src="{{ asset('images/logo_7_Perempuan.png') }}" class="w-auto h-10" alt="Logo">
      </picture> --}}
      Sistem Informasi 7P
    </h1>
  </header>

  <div class="flex flex-row flex-1">
    <aside class="w-3/12 bg-gray-500">
      sidebar
    </aside>
    <main class="bg-pink-200">
      content
    </main>
  </div>
  
</body>
</html>