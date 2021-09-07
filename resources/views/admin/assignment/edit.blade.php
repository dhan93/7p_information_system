@extends('layouts.app')

@section('page_title', 'Edit Penugasan')

@section('main')
  <x-card>
    <x-error-message class="mb-8" />
    
    <form action="{{route('admin.assignment.update', $assignment->id)}}" method="POST">
      @csrf
      @method('PATCH')
      {{-- judul --}}
      <x-label class="block">Judul</x-label>
      <x-input name="title" type="text" value="{{ old('title') ?? $assignment->title }}" class="w-full" required></x-input>
      {{-- schedule --}}
      <x-label class="block mt-4">schedule</x-label>
      <x-select name="schedule_id" class="w-full">
        <option>----Pilih Jadwal----</option>
        @foreach ($schedules as $schedule)
          <option value="{{$schedule->id}}" 
            @if ($schedule->id == $assignment->schedule_id)
              selected
            @endif
          >
            {{$schedule->topic}}
            {{$schedule->sub_topic? ': '.$schedule->sub_topic:''}}
          </option>
        @endforeach
      </x-select>
      <x-button type="submit" class="mt-4">Simpan</x-button>
    </form>
  </x-card>
@endsection