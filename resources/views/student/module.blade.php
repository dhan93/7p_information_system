@extends('layouts.app')

@section('page_title', 'Materi')

@section('main')
<div>
  <x-card class="flex flex-col">
    <h2 class="text-2xl font-semibold" >Jurnal Sekolah 7 Perempuan</h2>
    <div class="flex flex-row justify-between mt-2 -mb-4 border-t-2 border-gray-100">
      <a class="mt-2" href="https://dl.dropboxusercontent.com/s/5kcr0kem3mewocc/Jurnal%207PS4.pdf?dl=0" target="_blank">
        <x-button class="text-xs">
          <span class="mr-1 icon-file-pdf-o"></span>download materi
        </x-button>
      </a>
    </div>
  </x-card>
  <x-card class="flex flex-col">
    <h2 class="text-2xl font-semibold" >Dzikir Pagi dan Petang</h2>
    <div class="flex flex-row justify-between mt-2 -mb-4 border-t-2 border-gray-100">
      <a class="mt-2" href="https://dl.dropboxusercontent.com/s/apgwuqpzlj6u1od/Dzikir%20Pagi%20Petang%20S7P.pdf?dl=0" target="_blank">
        <x-button class="text-xs">
          <span class="mr-1 icon-file-pdf-o"></span>download materi
        </x-button>
      </a>
    </div>
  </x-card>
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