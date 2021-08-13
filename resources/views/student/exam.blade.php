@php
  $question=[
    "title" => "Soal yang kesatu",
    "name" => "soal_1",
    "items" => [
      ["id" => "sudah", "value"=> "Sudah selesai", "label" => "Sudah selesai"],
      ["id" => "sedang", "value"=> "Belum selesai", "label" => "Belum selesai"],
      ["id" => "belum", "value"=> "Belum dikerjakan", "label" => "Belum dikerjakan"],
    ]
  ]
@endphp

@extends('layouts.app')

@section('page_title', 'Evaluasi')

@section('main')
<x-card title="Post Test Peran Sebagai Istri" class="hidden">
  <x-radio-group title="{{$question['title']}}" name="{{$question['name']}}" :items="$question['items']"></x-checkbox-group>
</x-card>
<x-card title="Daftar Post Test">
  @for ($i = 1; $i < 8; $i++)
    <a href="#" class="grid grid-cols-12 p-4 pt-2 mb-4 border border-gray-200 rounded-md">
      <div class="col-span-10 xl:col-span-11">
        <h3 class="mb-2 text-xl font-semibold">Peran Sebagai .................</h3>
        <span>Tanggal Materi: {{9-$i}} Agustus 2021</span> 
        
      </div>
      <div class="flex items-center justify-end col-span-2 text-3xl text-right xl:col-span-1 lg:text-4xl">
        @if ($i == 3)
          <span class="text-pink-400 icon-play_circle_outline"></span>
        @else
          @if ($i < 3)
            <span class="text-gray-300 icon-lock"></span>    
          @else
            <div class="flex flex-col text-2xl">
              <span class="text-sm">Skor</span>
              <span class="font-semibold">{{rand(5,10)*10}} <span class="text-sm font-normal">/100</span></span> 
            </div>
          @endif  
        @endif
        
      </div>
    </a>
  @endfor
</x-card>
@endsection