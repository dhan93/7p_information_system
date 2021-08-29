@extends('layouts.app')

@section('page_title', 'Jadwal Materi')

@section('main')
  {{-- jadwal pekan ini [ tanggal, tema, judul, pemateri, materi ] --}}
  <x-card title="Jadwal Terdekat">
    <x-upcoming-schedule :data='$nextSchedules'></x-upcoming-schedule>
  </x-card>
  {{-- jadwal akan datang [ tanggal, tema, judul, pemateri, materi ] --}}
  {{-- jadwal telah berlalu [ tanggal, tema, judul, pemateri, materi, dokumentasi ] --}}
  <x-card title="Kalender Jadwal">
    {{-- <div class="grid w-full grid-cols-7 grid-rows-6 gap-2 mx-auto text-center lg:w-3/5">
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
    </div> --}}
    <div class="w-full overflow-x-auto">
      <table class="w-full mx-auto table-auto table-stripped">
        <thead class="justify-between">
          <tr class="bg-pink-400">
            <th class="px-2 py-2">
              <span class="font-semibold text-white">Waktu</span>
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
            {{-- <th class="px-2 py-2">
              <span class="font-semibold text-white">Dokumentasi</span>
            </th> --}}
          </tr>
        </thead>
        <tbody class="text-center bg-gray-200">
          @foreach ($schedules as $schedule)
            <tr class="bg-white">
              <td class="px-2 py-2">
                <span>{{ date_format(date_create($schedule->time), 'd/m/Y') }}</span><br/>
                <span>{{ date_format(date_create($schedule->time), 'H:i') }} wib</span>
              </td>
              <td class="px-2 py-2">
                <span>{{ $schedule->topic }}</span>
              </td>
              <td class="px-2 py-2">
                <span>{{ $schedule->sub_topic }}</span>
              </td>
              <td class="px-2 py-2">
                <span>{{ $schedule->lecturer }}</span>
              </td>
              {{-- <td class="flex flex-col px-2 py-2">
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
              </td> --}}
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </x-card>
@endsection