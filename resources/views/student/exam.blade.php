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
<x-card title="Daftar Evaluasi">
  @foreach ($exams as $exam)
    <a href="#" class="grid grid-cols-12 p-4 pt-2 mb-4 border border-gray-200 rounded-md">
      <div class="col-span-10 xl:col-span-11">
        <h3 class="mb-2 text-2xl font-semibold">{{$exam->topic}}</h3>
        <span>Jadwal Test: {{date( 'd-M-Y', strtotime($exam->time) )}}</span> <br>
        <span>Batas Akhir: {{date( 'd-M-Y', strtotime($exam->due_date) )}}</span> 
      </div>
      <div class="flex items-center justify-end col-span-2 text-3xl text-right xl:col-span-1 lg:text-4xl">
        @if (strtotime($exam->time)>time())
          <span class="text-gray-300 icon-https"></span>
        @else
          @if ($exam->score)
            <div class="flex flex-col text-2xl">
              <span class="text-sm">Skor</span>
              <span class="font-semibold">{{$exam->score}} <span class="text-sm font-normal">/100</span></span> 
            </div>
          @else
            <span class="text-pink-400 transition-transform transform icon-play_circle_outline hover:scale-150"></span>       
          @endif  
        @endif
        
      </div>
    </a>
  @endforeach
</x-card>
@endsection