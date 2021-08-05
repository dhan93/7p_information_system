@extends('layouts.app')

@section('page_title', 'Absensi Siswa')

@section('main')
<x-card class="w-full" title="Lapor Absensi">
  <form class="grid grid-cols-12" x-data="{attendance_status: null}" action="{{route('attendance.store')}}" method="POST">
    @csrf
    {{-- list judul materi [ tanggal, judul, pemateri ] --}}
    <x-label for="topic" value="Judul Materi" class="col-span-12" />
    <x-select name="topic" id="topic_selector" class="col-span-12">
      <option value="1">Judul materi</option>
    </x-select>
    {{-- hadir/tidak --}}
    <x-label value="Status" class="col-span-12 mt-2" />
    <x-radio model="attendance_status" name="status" class="col-span-12" label="hadir" id="status_yes" value="true" />
    <x-radio model="attendance_status" name="status" class="col-span-12" label="tidak hadir" id="status_no" value="false" />
    {{-- jam masuk ( jika hadir ) --}}
    <template x-if="attendance_status == 'true'">
      <div class="col-span-12 mt-2">
        <x-label for="attendance_time" value="Jam masuk" class="w-full" />
        <x-input type="time" name="attendance_time" class="w-full mb-2" value="19:45" required/>
        {{-- channel (zoom, youtube live, youtube) --}}
        {{-- sampai selesai? ( jika hadir ) --}}
        <x-label value="Hadir sampai selesai" class="" />
        <x-radio name="full_attendance" class="" label="sampai selesai" id="full_yes" value=true />
        <x-radio name="full_attendance" class="" label="tidak sampai selesai" id="full_no" value=false />
      </div>
    </template>
    {{-- alasan izin ( jika tidak hadir / tidak selesai ) --}}
    <template x-if="attendance_status == 'false'">
      <div class="col-span-12 mt-2">
        <x-label for="absence_reason" value="Alasan tidak hadir" class="w-full" />
        <x-textarea name="absence_reason" rows="2" class="w-full" />
      </div>
      {{-- sudah lihat di youtube? --}}
    </template>
    <div class="col-span-12">
      <x-button class="px-3 mt-2 text-center" >Simpan</x-button>
    </div>
  </form>
</x-card>

<x-card class="w-full" title="Rekap Absensi">
  <table class="w-10/12 mx-auto table-auto">
    <thead class="justify-between">
      <tr class="font-semibold text-white bg-pink-400">
        <th class="px-16 py-2">
          <span>Tanggal</span>
        </th>
        <th class="px-16 py-2">
          <span>Judul materi</span>
        </th>
        <th class="px-16 py-2">
          <span>Status</span>
        </th>
      </tr>
    </thead>
    <tbody class="bg-gray-200">
      @foreach ($attendances as $attendance)
        <tr class="bg-white border-b-2 border-gray-200">
          <td class="px-2 py-2 text-center">
            <span>{{ date_format(date_create($attendance->time), 'd M Y') }}</span>
          </td>
          <td class="px-2 py-2">
            <span>{{ $attendance->sub_topic }}</span>
          </td>
          <td class="px-10 py-1 font-semibold text-center text-white">
            @if ($attendance->status == "hadir")
              <span class="block w-full py-1 bg-green-500 rounded-full">
            @else
              @if ($attendance->status == "izin")
                <span class="block w-full py-1 bg-blue-400 rounded-full">
              @else
                <span class="block w-full py-1 bg-red-400 rounded-full">
              @endif
            @endif            
              {{ $attendance->status }}
            </span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</x-card>
@endsection