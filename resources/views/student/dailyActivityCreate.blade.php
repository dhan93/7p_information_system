@php
  $total_activities = 0;
@endphp

@extends('layouts.app')

@section('page_title', 'Amalan Harian')

@section('main')
<x-card title="Amalan dan Riyadhoh Hari Ini" class="">
  <x-error-message class="mb-8 -mt-3" />
  
  <form action="{{route('daily_activity.store')}}" method="post">
    @csrf

    {{-- tanggal --}}
    <div class="col-span-12 p-4 pt-2 my-2 border-2 border-gray-200 rounded-lg">
      <x-label for="date" value="Tanggal" class="w-full" />
      <x-input name="date" type="date" class="w-full" value="{{date('Y-m-d')}}" max="{{date('Y-m-d')}}"></x-input>
    </div>

    {{-- activities --}}
    @foreach ($activities as $activity)
      <div class="col-span-12 p-4 pt-2 my-2 border-2 border-gray-200 rounded-lg">
        <x-label>{!! $activity->title !!}</x-label>
        @switch($activity->type)
            @case('checkbox')
              @foreach ($activity->activities as $item)
                <x-checkbox name="{{$activity->type}}[{{$activity->id}}][{{$item->id}}]" label="{!!$item->title!!}" value="{{$item->id}}" />
                @php
                  $total_activities += 1;
                @endphp
              @endforeach
              @break
            @case('radio')
              @php
                $total_activities += 1;
              @endphp
              @foreach ($activity->activities as $item)
                <x-radio id="{{$activity->id}}_{{$item->id}}" name="{{$activity->type}}[{{$activity->id}}]" label="{!!$item->title!!}" value="{{$item->id}}" />
              @endforeach
                <div class="block mt-4">
                  <input type="radio" name="{{$activity->type}}[{{$activity->id}}]" id="{{$activity->type}}_reset" class="hidden">
                  <label for="{{$activity->type}}_reset" class="inline-block px-4 py-1 text-xs text-right bg-yellow-300 rounded-md cursor-pointer hover:bg-yellow-200">Reset</label>
                </div>
              @break
            @default
                <x-input name="{{$activity->id}}" />
        @endswitch
      </div>
    @endforeach

    {{-- Note --}}
    <div class="col-span-12 p-4 pt-2 my-2 border-2 border-gray-200 rounded-lg">
      <x-label>Catatan mengenai amalan harianku hari ini</x-label>
      <x-textarea class="w-full" name="note" maxlength="255" />
    </div>

    <input type="hidden" name="total_activities" value="{{ $total_activities }}">
    <x-button>Simpan</x-button>
  </form>
</x-card>
@endsection