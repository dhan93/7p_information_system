<div class="col-span-12 p-4 pt-2 my-2 border-2 border-gray-200 rounded-lg">
  <x-label>{{ $title }}</x-label>
  @foreach ($items as $item)
    <x-radio name="{{ $name }}" id="{{ $item['id'] }}" label="{{ $item['label'] }}"></x-checkbox>
  @endforeach
</div>