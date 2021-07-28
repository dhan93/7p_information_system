@php
  $assignment=[
    "title" => "Tugas yang kesatu",
    "name" => "tugas_1",
    "items" => [
      ["id" => "sudah", "value"=> "Sudah selesai", "label" => "Sudah selesai"],
      ["id" => "sedang", "value"=> "Belum selesai", "label" => "Belum selesai"],
      ["id" => "belum", "value"=> "Belum dikerjakan", "label" => "Belum dikerjakan"],
    ]
  ]
@endphp

@extends('layouts.app')

@section('page_title', 'Daftar tugas')

@section('main')
  <x-card title="Tugas Peran Sebagai Istri" class="hidden">
    <x-radio-group title="{{$assignment['title']}}" name="{{$assignment['name']}}" :items="$assignment['items']"></x-checkbox-group>
  </x-card>
  <x-card title="Daftar Tugas">
    @for ($i = 1; $i < 8; $i++)
      <a href="#" class="grid grid-cols-12 p-4 pt-2 mb-4 border border-gray-200 rounded-md">
        <div class="col-span-10 lg:col-span-11">
          <h3 class="mb-2 text-xl font-semibold">Peran Sebagai .................</h3>
          <span>diisi tanggal: </span> 
          @if ($i > 3)
            {{9-$i}} Agustus 2021    
          @else
            -
          @endif          
        </div>
        <div class="flex items-center justify-end col-span-2 text-3xl text-right lg:col-span-1 lg:text-4xl">
          @if ($i == 3)
            <span class="text-pink-400 icon-play_circle_outline"></span>
          @else
            @if ($i < 3)
              <span class="text-gray-300 icon-lock"></span>    
            @else
              <span class="text-green-500 icon-check_circle"></span>
            @endif  
          @endif
          
        </div>
      </a>
    @endfor
  </x-card>
@endsection
