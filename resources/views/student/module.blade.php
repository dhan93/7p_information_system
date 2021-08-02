@extends('layouts.app')

@section('page_title', 'Materi')

@section('main')
<div>
  @for ($i = 1; $i < 11; $i++)
    <x-card class="flex flex-col">
      <h2 class="text-2xl font-semibold" >Judul Materi ke {{$i}}</h2>
      <span>Nama pemateri {{$i}}</span>
      <div class="flex flex-row justify-between mt-2 -mb-4 border-t-2 border-gray-100">
        {{-- <a class="mt-2" href="">
          <x-button class="text-xs">
            <span class="mr-1 icon-eye"></span>lihat materi
          </x-button>
        </a> --}}
        <a class="mt-2" href="">
          <x-button class="text-xs">
            <span class="mr-1 icon-file-pdf-o"></span>download materi
          </x-button>
        </a>
      </div>
    </x-card>
  @endfor
</div>
@endsection