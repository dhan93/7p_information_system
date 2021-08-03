@extends('layouts.app')

@section('page_title', 'Materi')

@section('main')
<div>
  @foreach ($modules as $module)
    <x-card class="flex flex-col">
      <span>Tema: {{$module->topic}}</span>
      <h2 class="text-2xl font-semibold" >{{$module->title}}</h2>
      <span>oleh {{$module->lecturer}}</span>
      <div class="flex flex-row justify-between mt-2 -mb-4 border-t-2 border-gray-100">
        {{-- <a class="mt-2" href="">
          <x-button class="text-xs">
            <span class="mr-1 icon-eye"></span>lihat materi
          </x-button>
        </a> --}}
        <a class="mt-2" href="{{$module->attachment}}">
          <x-button class="text-xs">
            <span class="mr-1 icon-file-pdf-o"></span>download materi
          </x-button>
        </a>
      </div>
    </x-card>
  @endforeach
</div>
@endsection