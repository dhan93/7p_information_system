<select name="{{$name}}" id="{{$id}}" {{ $attributes->merge(['class' => 'h-10 pl-5 pr-10 text-gray-600 bg-white border border-gray-300 rounded-lg appearance-none hover:border-gray-400 focus:outline-none']) }}>
  {{$slot}}
</select>