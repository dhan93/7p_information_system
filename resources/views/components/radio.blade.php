<div class="{{$class}}">
  <input 
    @if ($model)
      x-model="{{$model}}" 
    @endif
    class="border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
    type="radio"
    name="{{$name}}"
    id="{{$id}}"
    value="{{$value ?? $id}}"
    required
  >
  <label for="{{$id}}" class="{{$labelClass ?? ''}}">
    {{$label}}
  </label>
</div>