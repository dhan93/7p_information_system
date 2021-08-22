<div class="{{$class ?? ''}}">
  <input 
    @isset ($model)
      x-model="{{$model}}" 
    @endisset
    class="border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
    type="radio"
    name="{{$name}}"
    id="{{$id ?? ''}}"
    value="{{$value ?? $id}}"
    {{$attributes->merge()}}
  >
  <label for="{{$id}}" class="{{$labelClass ?? ''}}">
    {{$label}}
  </label>
</div>