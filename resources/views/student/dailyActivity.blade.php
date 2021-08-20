@extends('layouts.app')

@section('page_title', 'Amalan Harian')

@section('main')
  <x-card title="Ringkasan Amalan Harian dan Riyadhoh" class="w-full overflow-x-auto">
    <div class="text-center">
      <a href="{{ route('daily_activity.create') }}" class="block mx-auto mb-8">
        <x-button><span class="mr-1 icon-add"></span>isi form</x-button>
      </a>
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
@endsection

