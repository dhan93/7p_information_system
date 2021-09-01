<a class="flex flex-col items-center p-4 my-2 text-xl text-center border rounded-md md:text-left md:flex-row hover:text-pink-400 hover:border-pink-400" {{ $attributes->merge() }}>
  @if (isset($thumbnail))
      <div class="mb-2 mr-4 md:mb-0">
        <img src="{{asset('uploads/images/'.$thumbnail)}}" width="100" height="100">
      </div>
  @endif
      <div class="flex-grow">
        {{ $slot }}
      </div>  
</a>