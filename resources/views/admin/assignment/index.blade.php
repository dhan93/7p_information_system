@extends('layouts.app')

@section('page_title', 'Penugasan')

@section('main')
  <x-card title="Daftar Penugasan" >
    <div class="w-full overflow-x-auto">
      <table class="w-full mx-auto table-auto md:max-w-md lg:max-w-xl xl:max-w-4xl min-w-min md:min-w-0">
        <thead>
          <tr class="font-semibold text-white bg-pink-400">
            <th class="w-4/12 py-2">Judul</th>
            <th class="w-5/12 py-2">Judul Pertemuan</th>
            <th class="w-1/12 py-2">Season</th>
            <th class="w-2/12 py-2"></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($assignments as $assignment)
            @foreach ($assignment->assignments as $item)
              <tr>
                <td class="p-2">{{$item->title}}</td>
                <td class="p-2">
                  {{$assignment->topic}}
                  {{$assignment->sub_topic? ': '.$assignment->sub_topic:''}}
                </td>
                <td class="p-2 text-center">{{$assignment->course->generation}}</td>
                <td class="p-2 text-center">
                  <a href="{{route('admin.assignment.show',$item->id)}}">
                    <x-button>
                      lihat
                    </x-button>
                  </a>
                </td>
              </tr>    
            @endforeach          
          @endforeach
        </tbody>
      </table>
    </div>
  </x-card>
@endsection