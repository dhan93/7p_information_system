@extends('layouts.app')

@section('page_title', 'Absensi Siswa')

@section('main')
<x-card class="w-full" title="Lapor Absensi">
  <x-error-message class="mb-8 -mt-3" />

  @if ($scheduleOptions)
    <form class="grid grid-cols-12" x-data="{attendance_status: null}" action="{{route('attendance.store')}}" method="POST">
      @csrf
      {{-- list judul materi [ tanggal, judul, pemateri ] --}}
      <x-label for="topic" value="Judul Materi" class="col-span-12" />
      <x-select name="topic" id="topic_selector" class="col-span-12">
        @foreach ($scheduleOptions as $option)
            <option value="{{ $option->id }}">
              {{ $option->topic }}
                @if ($option->sub_topic)
                  :
                @endif
              {{ $option->sub_topic }}
            </option>
        @endforeach
      </x-select>
      {{-- hadir/tidak --}}
      <x-label value="Status" class="col-span-12 mt-2" />
      <x-radio model="attendance_status" name="status" class="col-span-12" label="hadir" id="status_yes" value="hadir" required/>
      <x-radio model="attendance_status" name="status" class="col-span-12" label="tidak hadir" id="status_no" value="izin" required/>
      {{-- jam masuk ( jika hadir ) --}}
      <template x-if="attendance_status == 'hadir'">
        <div class="col-span-12 mt-2">
          <x-label for="attendance_time" value="Jam masuk" class="w-full" />
          <x-input type="time" name="attendance_time" class="w-full mb-2" value="19:45" required/>
          {{-- channel (zoom, youtube live, youtube) --}}
          <x-label value="Media yang digunakan" class="mt-2" />
          <x-radio name="channel" class="" label="Zoom" id="zoom" value="zoom" required />
          <x-radio name="channel" class="" label="Youtube" id="youtube" value="youtube live" required />
          {{-- sampai selesai? ( jika hadir ) --}}
          <x-label value="Hadir sampai selesai" class="mt-2" />
          <x-radio name="full_attendance" class="" label="sampai selesai" id="full_yes" value=true required />
          <x-radio name="full_attendance" class="" label="tidak sampai selesai" id="full_no" value=false required />
        </div>
      </template>
      {{-- alasan izin ( jika tidak hadir / tidak selesai ) --}}
      <template x-if="attendance_status == 'izin'">
        <div class="col-span-12 mt-2">
          <x-label for="absence_reason" value="Alasan tidak hadir" class="w-full" />
          <x-textarea name="absence_reason" rows="2" class="w-full" />
          {{-- sudah lihat di youtube? --}}
          <x-label value="Sudah menyaksikan rekaman materi di youtube" class="mt-2" />
          <x-radio name="channel" class="" label="Ya, sudah" id="youtube" value="youtube" required />
          <x-radio name="channel" class="" label="Belum" id="none" value="-" required />
        </div>
      </template>
      <div class="col-span-12">
        <x-button class="px-3 mt-2 text-center" type="submit">Simpan</x-button>
      </div>
    </form>    
  @else
    <div class="font-medium text-center">
      belum ada agenda terbaru
    </div>    
  @endif
</x-card>

<x-card class="w-full" title="Rekap Absensi">
  <div class="w-full overflow-x-auto">
    <table class="w-10/12 mx-auto table-fix">
      <thead class="justify-between">
        <tr class="font-semibold text-white bg-pink-400">
          <th class="w-1/4 px-16 py-2">
            Tanggal
          </th>
          <th class="w-2/4 px-16 py-2">
            Judul materi
          </th>
          <th class="w-1/4 px-16 py-2">
            Status
          </th>
        </tr>
      </thead>
      <tbody class="bg-gray-200">
        @if (!count($attendances))
          <tr>
            <td colspan="3" class="py-4 text-center bg-white">Belum ada data</td>
          </tr>
        @endif
        @foreach ($attendances as $attendance)
          <tr class="bg-white border-b-2 border-gray-200">
            <td class="px-2 py-2 text-center">
              <span>{{ date_format(date_create($attendance->time), 'd M Y') }}</span>
            </td>
            <td class="px-2 py-2">
              <span>{{ $attendance->topic }}{{ $attendance->sub_topic ? ': '.$attendance->sub_topic : ''}}</span>
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
  </div>
</x-card>
@endsection
