@foreach (array_reverse($data) as $item)
  @php
    if ($loop->iteration > 3) break;
    $itemDate = date_create($item['time']);
  @endphp
  <div 
    class="grid w-full grid-cols-1 mx-auto mb-1 sm:grid-cols-4 lg:w-4/5 shadow hover:shadow-lg rounded-lg py-4 transform transition-all
      @if (!$loop->first)
        scale-75 opacity-75 hover:opacity-90 hover:scale-90
      @else
        scale-90 opacity-95 hover:opacity-100 hover:scale-100
      @endif
    ">
    <div class="flex flex-col col-span-1 mb-2 text-center sm:mb-0">
      <span class="text-lg leading-none">{{ date_format($itemDate, 'l')}}</span>
      <span class="text-6xl leading-none text-pink-400">{{ date_format($itemDate, 'd')}}</span>
      <span class="text-lg leading-none">{{ date_format($itemDate, 'F')}}</span>
    </div>
    <div class="flex flex-col col-span-1 text-center sm:col-span-3 sm:text-left">
      <span class="text-2xl font-semibold leading-tight text-pink-400 md:text-3xl">{{$item['topic']}}: {{$item['sub_topic']}}</span>
      <span class="font-semibold text-md">{{$item['lecturer']}}</span>
      <span>
        {{ date_format($itemDate, 'H.i')}} wib via <a href="#"><span class="underline">Zoom</span> <span class="icon-launch"></span></a>
      </span>
    </div>
  </div>
  {{-- {{$item['time']}} --}}
@endforeach