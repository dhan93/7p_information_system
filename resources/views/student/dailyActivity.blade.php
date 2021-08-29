@extends('layouts.app')

@section('page_title', 'Amalan Harian')

@section('main')
  <x-card title="Ringkasan Amalan Harian" class="hidden w-full overflow-x-auto">
    <div class="text-center">
      <a href="{{ route('daily_activity.create') }}" class="block mx-auto mb-8">
        <x-button><span class="mr-1 icon-add"></span>isi form</x-button>
      </a>
    </div>
      
      <table class="w-full mx-auto table-auto md:max-w-md lg:max-w-xl xl:max-w-3xl min-w-min md:min-w-0">
        <thead class="">
          <tr class="font-semibold text-white bg-pink-400">
            <th class="py-2">
              <span>Tanggal</span>
            </th>
            <th class="py-2">
              <span>Capaian</span>
            </th>
            {{-- <th class="py-2">
              <span>Rincian</span>
            </th> --}}
          </tr>
        </thead>
        <tbody class="text-center bg-gray-200">
          @foreach ($userActivities as $userActivity)
            <tr class="bg-white border-b-2 border-gray-200">
              <td class="py-2">
                <span>{{$userActivity->date}}</span>
              </td>
              <td class="py-2">
                <span>{{ $userActivity->activities_done }}/{{ $userActivity->total_activities }}</span>
              </td>
              {{-- <td class="py-2">
                <a href="{{route('daily_activity.show', $userActivity->id)}}" class="px-2 py-1 mr-2 text-gray-600 border border-gray-400 rounded-md hover:bg-gray-300 hover:border-gray-300">
                  <span class="icon-remove_red_eye"></span> <span class="hidden sm:inline">lihat</span>
                </a>
                <a href="" class="px-2 py-1 text-gray-600 border border-gray-400 rounded-md hover:bg-gray-300 hover:border-gray-300">
                  <span class="icon-edit"></span> <span class="hidden sm:inline">perbarui</span>
                </a>
              </td> --}}
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

  <x-card title="Ringkasan Amalan Harian">
    <div class="text-center">
      <a href="{{ route('daily_activity.create') }}" class="block mx-auto mb-8">
        <x-button><span class="mr-1 icon-add"></span>isi form</x-button>
      </a>
    </div>
    
    <table class="border table-fixed">
      <thead>
        <tr>
          <th class="w-1/3 border" rowspan="2">Amalan</th>
          <th class="border" colspan="15">September</th>
        </tr>
        <tr>
          @for ($i = 1; $i <= 15; $i++)
            <th class="border">{{$i}}</th>
          @endfor
        </tr>
      </thead>
      <tbody>
        @foreach ($activityGroup as $group)
            <tr>
              <td class="text-sm font-semibold text-center bg-pink-200 border" colspan="16">{{$group->title}}</td>
            </tr>
            @foreach ($group->activities as $activity)
              <tr>
                <td class="px-2 py-1 border">{{$activity->title}}</td>
                @foreach ($matrix[$loop->index]['date'] as $item)
                  <td class="text-center border">
                    @if ($item)
                      <span class="icon-check"></span>    
                    @endif
                  </td>
                @endforeach
              </tr>
            @endforeach
        @endforeach
      </tbody>
    </table>
  </x-card>
@endsection

