<div class="{{$class ?? ''}}">
  <input 
    @isset ($model)
      x-model="{{$model}}" 
    @endisset
    class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
    type="checkbox"
    name="{{$name}}"
    id="{{$name}}"
    value="{{$value ?? $name}}"
    required
  >
  <label for="{{$name}}" class="{{$labelClass ?? ''}}">
    {{$label}}
  </label>
</div>