<div class="px-4 pt-4 pb-8 my-2 bg-white shadow sm:px-6 rounded-xl {!! $class ?? '' !!}">
  @isset($title)
    <h2 class="mb-8 text-xl text-center" >{{$title}}</h2>      
  @endisset
  {{ $slot }}
</div>