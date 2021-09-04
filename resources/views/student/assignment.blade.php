@extends('layouts.app')

@section('page_title', 'Penugasan')

@section('main')
  <x-card title="Daftar Tugas">
    @foreach ($assignments as $assignment)
      @if (strtotime($assignment->time)>time())
        <a class="grid grid-cols-12 p-4 pt-2 mb-4 border border-gray-200 rounded-md">    
      @else
        <a href="{{route('assignment.show', $assignment->id)}}" class="grid grid-cols-12 p-4 pt-2 mb-4 border border-gray-200 rounded-md hover:text-pink-500 hover:border-pink-500">
      @endif
      
        <div class="col-span-10 lg:col-span-11">
          <h3 class="mb-2 text-xl font-semibold">
            {{$assignment->topic}}
            {{$assignment->sub_topic? ': '.$assignment->sub_topic:''}}
          </h3>
          <span>
            Tugas selesai: {{$assignment->assignment_done}}/{{$assignment->assignments_count}}
          </span> 
          
        </div>
        <div class="flex items-center justify-end col-span-2 text-3xl text-right lg:col-span-1 lg:text-4xl">
          @if (strtotime($assignment->time)>time())
            <span class="text-gray-300 icon-https"></span>
          @else
            @if ($assignment->assignment_done == $assignment->assignments_count)
              <span class="text-green-500 icon-check_circle"></span>
            @else
              <span class="text-pink-400 icon-play_circle_outline"></span>
            @endif
          @endif
          {{-- @else
            @if ($i < 3)
              <span class="text-gray-300 icon-lock"></span>    
            @else
              <span class="text-green-500 icon-check_circle"></span>
            @endif  
          @endif --}}
        </div>
      </a>
    @endforeach
  </x-card>
@endsection
