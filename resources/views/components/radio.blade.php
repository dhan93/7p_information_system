<div class="{{$class}}">
  <input 
    @if ($model)
      x-model="{{$model}}" 
    @endif
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