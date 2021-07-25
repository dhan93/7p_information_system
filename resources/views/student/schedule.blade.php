@extends('layouts.app')

@section('page_title', 'Jadwal Materi')

@section('main')
  {{-- jadwal pekan ini [ tanggal, tema, judul, pemateri, materi ] --}}
  <x-card title="Jadwal Terdekat">
    <div class="grid w-full grid-cols-1 mx-auto mb-4 sm:grid-cols-4 lg:w-4/5">
      <div class="flex flex-col col-span-1 mb-2 text-center sm:mb-0">
        <span class="text-lg leading-none">Senin</span>
        <span class="text-6xl leading-none text-pink-400">02</span>
        <span class="text-lg leading-none">Agustus</span>
      </div>
      <div class="flex flex-col col-span-1 text-center sm:col-span-3 sm:text-left">
        <span class="text-2xl font-semibold leading-tight text-pink-400 md:text-3xl">Judulnya ditulis di sini</span>
        <span class="font-semibold text-md">bersama Nama Pemateri</span>
        <span>
          19.45 wib via <a href="#"><span class="underline">Zoom</span> <span class="icon-launch"></span></a>
        </span>
      </div>
    </div>
    <div class="grid w-full grid-cols-1 mx-auto mb-4 transform scale-75 opacity-75 sm:grid-cols-4 lg:w-4/5">
      <div class="flex flex-col col-span-1 mb-2 text-center sm:mb-0">
        <span class="text-lg leading-none">Senin</span>
        <span class="text-6xl leading-none text-pink-400">02</span>
        <span class="text-lg leading-none">Agustus</span>
      </div>
      <div class="flex flex-col col-span-1 text-center sm:col-span-3 sm:text-left">
        <span class="text-2xl font-semibold leading-tight text-pink-400 md:text-3xl">Judulnya ditulis di sini</span>
        <span class="font-semibold text-md">bersama Nama Pemateri</span>
        <span>
          19.45 wib via <a href="#"><span class="underline">Zoom</span> <span class="icon-launch"></span></a>
        </span>
      </div>
    </div>
  </x-card>
  {{-- jadwal akan datang [ tanggal, tema, judul, pemateri, materi ] --}}
  {{-- jadwal telah berlalu [ tanggal, tema, judul, pemateri, materi, dokumentasi ] --}}
  <x-card title="Kalender Jadwal">
    <div class="grid w-full grid-cols-7 grid-rows-6 gap-2 mx-auto text-center lg:w-3/5">
      <span>Ah</span>
      <span>Sn</span>
      <span>Sl</span>
      <span>Rb</span>
      <span>Km</span>
      <span>Jm</span>
      <span>Sb</span>
      @for ($i = 1; $i <= 31; $i++)
        @php
          $agenda = [2, 7, 9, 11, 14, 16, 21, 25, 28, 30];
        @endphp
        <span
          @if (in_array($i, $agenda))
            class="text-white bg-pink-500 rounded-full"
          @endif
        >{{$i}}</span>
      @endfor
    </div>
    <div class="flex flex-col mt-8">
      <table class="w-full mx-auto table-auto">
        <thead class="justify-between">
          <tr class="bg-pink-400">
            <th class="px-2 py-2">
              <span class="font-semibold text-white">Tanggal</span>
            </th>
            <th class="px-2 py-2">
              <span class="font-semibold text-white">Tema</span>
            </th>
            <th class="px-2 py-2">
              <span class="font-semibold text-white">Judul materi</span>
            </th>
            <th class="px-2 py-2">
              <span class="font-semibold text-white">Pemateri</span>
            </th>
            <th class="px-2 py-2">
              <span class="font-semibold text-white">Dokumentasi</span>
            </th>
          </tr>
        </thead>
        <tbody class="text-center bg-gray-200">
          @for ($i = 0; $i < 10; $i++)
            <tr class="bg-white border-b-2 border-gray-200">
              <td class="px-2 py-2">
                <span>{{ $i+1 }} Juli 2021</span>
              </td>
              <td class="px-2 py-2">
                <span>Tema materi ke {{ $i+1 }}</span>
              </td>
              <td class="px-2 py-2">
                <span>Judul materi ke {{ $i+1 }}</span>
              </td>
              <td class="px-2 py-2">
                <span>Nama Pemateri {{ $i+1 }}</span>
              </td>
              <td class="flex flex-col px-2 py-2">
                <span class="mb-4">
                  <a href="">
                    <span class="icon-file-movie-o"></span> <span class="hidden sm:inline">Video</span>
                  </a>
                </span>
                <span>
                  <a href="">
                    <span class="icon-file-pdf-o"></span> <span class="hidden sm:inline">Materi</span>
                  </a>
                </span>
              </td>
            </tr>
          @endfor
        </tbody>
      </table>
    </div>
  </x-card>
@endsection