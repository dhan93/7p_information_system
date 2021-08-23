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
    @if (strtotime($exam->schedule->time)<time())
      <a href="{{ route('exam.show', $exam->id) }}" class="grid grid-cols-12 p-4 pt-2 mb-4 border border-gray-200 rounded-md hover:bg-red-50 hover:border-red-50">
    @else
      <a class="grid grid-cols-12 p-4 pt-2 mb-4 border border-gray-200 rounded-md opacity-60">
    @endif
      <div class="col-span-10 xl:col-span-11">
        <h3 class="mb-2 text-2xl font-semibold underline">
          {!!$exam->schedule->topic!!}{{$exam->schedule->sub_topic ? ': ' : ''}}{!!$exam->schedule->sub_topic!!}
        </h3>
        <span>Jadwal Test: {{date( 'd-M-Y', strtotime($exam->schedule->time) )}}</span> <br>
        <span>Batas Akhir: {{date( 'd-M-Y', strtotime($exam->due_date) )}}</span> 
      </div>
      <div class="flex items-center justify-end col-span-2 text-3xl text-right xl:col-span-1 lg:text-4xl">
        @if (strtotime($exam->schedule->time)>time())
          <span class="text-gray-300 icon-https"></span>
        @else
          @if (count($exam->users))
            <div class="flex flex-col text-2xl">
              <span class="text-sm">Skor</span>
              <span class="font-semibold">{{$exam->users[0]->pivot->score}} <span class="text-sm font-normal">/100</span></span> 
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