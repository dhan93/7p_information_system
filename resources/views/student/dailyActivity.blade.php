@php
  $activities=[
    [
      "title" => "Qiyamul Lail",
      "items" => [
        ["name" => "shalat_taubat", "label" => "Shalat Taubat"],
        ["name" => "shalat_tahajud", "label" => "Shalat Tahajud"],
        ["name" => "shalat_witir", "label" => "Shalat Witir"],
        ["name" => "baca_al-quran", "label" => "Baca Al-Quran"],
      ]
    ],
    [
      "title" => "Subuh",
      "items" => [
        ["name" => "istighfar_sebelum_adzan_subuh", "label" => "Istighfar Sebelum Adzan Subuh"],
        ["name" => "shalat_sunat_fajar", "label" => "Shalat Sunat Fajar"],
        ["name" => "shalat_fardhu_subuh", "label" => "Shalat Fardhu Subuh"],
        ["name" => "dzikir_setelah_shalat_subuh", "label" => "Dzikir Setelah Shalat Subuh"],
        ["name" => "dzikir_al-matsurat", "label" => "Dzikir Al-Matsurat"],
        ["name" => "baca_surat_Al-Waqiah", "label" => "Baca Surat Al-Waqiah"],
        ["name" => "sedekah_pagi", "label" => "Sedekah Pagi"],
      ]
    ],
  ]
@endphp

@extends('layouts.app')

@section('page_title', 'Amalan Harian')

@section('main')
  <x-card title="Ringkasan Amalan Harian dan Riyadhoh" class="w-full overflow-x-auto">
    <div class="text-center">
      <x-button class="mx-auto mb-4"><span class="mr-1 icon-add"></span>isi form</x-button>
    </div>
      
      <table class="w-full mx-auto table-auto md:max-w-md lg:max-w-xl xl:max-w-3xl min-w-min md:min-w-0">
        <thead class="">
          <tr class="font-semibold text-white bg-pink-400">
            <th class="px-2 py-2">
              <span>Tanggal</span>
            </th>
            <th class="px-2 py-2">
              <span>Capaian</span>
            </th>
            <th class="px-2 py-2">
              <span>Rincian</span>
            </th>
          </tr>
        </thead>
        <tbody class="text-center bg-gray-200">
          @foreach ($userActivities as $userActivity)
            <tr class="bg-white border-b-2 border-gray-200">
              <td class="px-2 py-2">
                <span>{{$userActivity->date}}</span>
              </td>
              <td class="px-2 py-2">
                <span>{{ $userActivity->activities_done }}/{{ $userActivity->total_activities }}</span>
              </td>
              <td class="px-2 py-2">
                <a href="" class="px-2 py-1 mr-2 text-gray-600 border border-gray-400 rounded-md hover:bg-gray-300 hover:border-gray-300">
                  <span class="icon-remove_red_eye"></span> <span class="hidden sm:inline">lihat</span>
                </a>
                <a href="" class="px-2 py-1 text-gray-600 border border-gray-400 rounded-md hover:bg-gray-300 hover:border-gray-300">
                  <span class="icon-edit"></span> <span class="hidden sm:inline">perbarui</span>
                </a>
              </td>
            </tr>
            <tr>
              <td colspan="4" class="p-2 text-sm text-left">
                <span class="font-semibold">Catatan diri :</span>
                <span class="w-full">
                  @if ($userActivity->note)
                    {{$userActivity->note}}
                  @else
                    -
                  @endif
                </span>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </x-card>
  <x-card title="Amalan dan Riyadhoh Hari Ini" class="hidden">
    <form action="{{route('daily_activity.store')}}" method="post">
      @csrf
      <div class="col-span-12 p-4 pt-2 my-2 border-2 border-gray-200 rounded-lg">
        <x-label for="date" value="Tanggal" class="w-full" />
        <x-input name="date" type="date" class="w-full" value="{{date('Y-m-d')}}"></x-input>
      </div>
      @foreach ($activities as $activity)
        <x-checkbox-group title="{{$activity['title']}}" :items="$activity['items']"/>
      @endforeach
      <x-button>Simpan</x-button>
    </form>
  </x-card>
@endsection

