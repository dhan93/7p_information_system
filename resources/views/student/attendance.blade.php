@extends('layouts.app')

@section('page_title', 'Absensi Siswa')

@section('main')
<div class="w-full p-3 mx-auto my-2 bg-white shadow sm:p-6 rounded-xl">
  <h2 class="mb-4 text-xl text-center" >Lapor absensi</h2>
  <form class="grid grid-cols-12" x-data="{status: ''}" action="{{route('attendance.store')}}" method="POST">
    @csrf
    {{-- list judul materi [ tanggal, judul, pemateri ] --}}
    <x-label for="topic" value="Judul Materi" class="col-span-12" />
    <x-select name="topic" id="topic_selector" class="col-span-12">
      <option value="1">Judul materi</option>
    </x-select>
    {{-- hadir/tidak --}}
    <x-label value="Status" class="col-span-12 mt-2" />
    <x-radio model="status" name="status" class="col-span-12" label="hadir" id="status_yes" value="true" />
    <x-radio model="status" name="status" class="col-span-12" label="tidak hadir" id="status_no" value="false" />
    {{-- jam masuk ( jika hadir ) --}}
    <template x-if="status=='true'">
      <div class="col-span-12 mt-2">
        <x-label for="attendance_time" value="Jam masuk" class="w-full" />
        <x-input type="time" name="attendance_time" class="w-full mb-2" value="19:45" required/>
      {{-- sampai selesai? ( jika hadir ) --}}
        <x-label value="Hadir sampai selesai" class="" />
        <x-radio :model=false name="full_attendance" class="" label="sampai selesai" id="full_yes" :value=true />
        <x-radio :model=false name="full_attendance" class="" label="tidak sampai selesai" id="full_no" :value=false />
      </div>
    </template>
    {{-- alasan izin ( jika tidak hadir / tidak selesai ) --}}
    <template x-if="status=='false'">
      <div class="col-span-12 mt-2">
        <x-label for="absence_reason" value="Alasan tidak hadir" class="w-full" />
        <x-textarea name="absence_reason" rows="2" class="w-full" />
      </div>
    </template>
    <div class="col-span-12">
      <x-button class="px-3 mt-2 text-center" >Simpan</x-button>
    </div>
  </form>
</div>

<div class="w-full p-4 mx-auto my-2 bg-white shadow rounded-xl">
  <h2 class="mb-4 text-xl text-center" >Rekap absensi</h2>
  <table class="max-w-5xl mx-auto table-auto">
    <thead class="justify-between">
      <tr class="bg-green-600">
        <th class="px-16 py-2">
          <span class="font-semibold text-gray-100">Tanggal</span>
        </th>
        <th class="px-16 py-2">
          <span class="font-semibold text-gray-100">Judul materi</span>
        </th>
        <th class="px-16 py-2">
          <span class="font-semibold text-gray-100">Status</span>
        </th>
      </tr>
    </thead>
    <tbody class="bg-gray-200">
      @for ($i = 0; $i < 10; $i++)
        <tr class="bg-white border-b-2 border-gray-200">
          <td class="px-16 py-2">
            <span>{{ $i+1 }}-Juli-2021</span>
          </td>
          <td class="px-16 py-2">
            <span>Judul materi ke {{ $i+1 }}</span>
          </td>
          <td class="px-16 py-2">
            <span>
                @if ($i % 4 == 0)
                tidak
              @endif
              hadir
            </span>
          </td>
        </tr>
      @endfor
    </tbody>
  </table>
</div>
@endsection