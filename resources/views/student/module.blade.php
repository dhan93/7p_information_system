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

  @for ($i = 1; $i <= count($modules); $i++)
    <x-card class="flex flex-col">
      <h1 class="text-lg">Tema: {{$modules[$i][0]['topic']}}</h1>
      <p class="mb-2">oleh {{$modules[$i][0]['lecturer']}}</p>
      @for ($j = 0; $j < count($modules[$i]); $j++)
        <div class="grid items-center w-full grid-cols-12 p-3 mb-2 border rounded-md hover:border-pink-500 hover:text-pink-500">
          <div class="col-span-12 md:col-span-8">
            <h2 class="text-xl font-semibold">{{$modules[$i][$j]['title']}}</h2>
          </div>
          <div class="col-span-12 md:text-right md:col-span-4">
            <a class="block mt-2 md:mt-0" href="{{$modules[$i][$j]['attachment']}}" target="_blank">
              <x-button class="text-xs">
                @switch($modules[$i][$j]['type'])
                    @case('audio')
                      <span class="mr-1 icon-file-audio-o"></span>
                    @break
                    @case('video')
                      <span class="mr-1 icon-file-movie-o"></span>
                    @break
                    @default
                      <span class="mr-1 icon-file-pdf-o"></span>
                @endswitch
                buka materi
              </x-button>
            </a>
          </div>
        </div>
      @endfor
    </x-card>
  @endfor

  {{-- @foreach ($modules as $module)
    <x-card class="flex flex-col">
      <span>Tema: {{$module->topic}}</span>
      <h2 class="text-2xl font-semibold" >{{$module->title}}</h2>
      <span>oleh {{$module->lecturer}}</span>
      <div class="flex flex-row justify-between mt-2 -mb-4 border-t-2 border-gray-100">
        <a class="mt-2" href="{{$module->attachment}}" target="_blank">
          <x-button class="text-xs">
            @switch($module->type)
                @case('audio')
                  <span class="mr-1 icon-file-audio-o"></span>
                @break
                @case('video')
                  <span class="mr-1 icon-file-movie-o"></span>
                @break
                @default
                  <span class="mr-1 icon-file-pdf-o"></span>
            @endswitch
            buka materi
          </x-button>
        </a>
      </div>
    </x-card>
  @endforeach --}}
</div>
@endsection