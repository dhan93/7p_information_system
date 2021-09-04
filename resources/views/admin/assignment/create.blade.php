@extends('layouts.app')

@section('page_title', 'Penugasan Baru')

@section('main')
  <x-card>
    <x-error-message class="mb-8" />
    
    <form action="{{route('admin.assignment.store')}}" method="POST">
      @csrf
      {{-- judul --}}
      <x-label class="block">Judul</x-label>
      <x-input name="title" type="text" value="{{ old('title') }}" class="w-full" required></x-input>
      {{-- schedule --}}
      <x-label class="block mt-4">schedule</x-label>
      <x-select name="schedule_id" class="w-full">
        <option>----Pilih Jadwal----</option>
        @foreach ($schedules as $schedule)
          <option value="{{$schedule->id}}" 
            @if ($schedule->id == old('schedule_id'))
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