@extends('layouts.app')

@section('page_title', 'Kelola Kelas')

@section('main')
  <x-card title="Pilih Kelas" >
    @foreach ($courseList as $course)
      <a href="{{route('admin.course.show', $course->id)}}" class="block p-4 mb-4 border rounded-lg hover:bg-pink-400 hover:text-white hover:border-pink-400">
        <h2 class="text-xl font-semibold">
          {{$course->name}} Season {{$course->generation}}
        </h2>
        <p>status: {{$course->is_finished? 'Selesai' : "Berjalan"}}</p>
      </a>
    @endforeach
    <a href="{{route('admin.course.create')}}" class="block py-2 text-white bg-green-400 rounded-md hover:bg-green-300">
      <h2 class="text-xl font-semibold text-center">
        <span class="icon-add"></span> Tambah Kelas
      </h2>
    </a>
  </x-card>
@endsection
