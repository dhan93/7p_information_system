@extends('layouts.app')

@section('page_title', 'Tugas')

@section('main')
  <x-card title="{!!$schedule->topic!!}{{$schedule->sub_topic? ': '.$schedule->sub_topic:''}}">
    <form action="{{route('assignment.store')}}" method="post">
      @csrf
      @foreach ($assignments as $assignment)
        <div class="w-full p-2 mb-2 border rounded-md">
          @if (in_array($assignment->id, $assignmentDoneArray))
            <x-checkbox 
              name="assignment[{{$assignment->id}}]" 
              value="{{$assignment->id}}" 
              label="{{$assignment->title}}"
              checked
            ></x-checkbox>    
          @else
            <x-checkbox 
              name="assignment[{{$assignment->id}}]" 
              value="{{$assignment->id}}" 
              label="{{$assignment->title}}"
            ></x-checkbox>
          @endif
        </div>
      @endforeach
      <input type="hidden" name="schedule_id" value="{{$schedule->id}}">
      <x-button type="submit" class="mt-4">Simpan</x-button>
    </form>
  </x-card>
@endsection