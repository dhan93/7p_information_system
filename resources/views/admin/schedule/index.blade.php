@extends('layouts.app')

@section('page_title', 'Kelola Jadwal')

@section('main')
  <x-course-list></x-course-list>
  <x-card title="Daftar Jadwal {{$course->name}} Season {{$course->generation}}">
    @foreach ($schedules as $schedule)
        <div class="grid grid-cols-12 p-4 mb-4 border rounded-md">
          <table class="col-span-10 table-fixed">
            <tr>
              <td class="w-1/3 lg:w-1/5 xl:1/6 2xl:w-1/12">Tema</td>
              <td class="w-2/3 font-semibold lg:w-4/5 xl:5/6 2xl:w-11/12">: {{$schedule->topic}}</td>
            </tr>
            <tr>
              <td>Judul</td>
              <td>: {{$schedule->sub_topic ?? '-'}}</td>
            </tr>
            <tr>
              <td>Pemateri</td>
              <td>: {{$schedule->lecturer}}</td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td>: {{date_format(date_create($schedule->time), 'd F Y')}}</td>
            </tr>
            <tr>
              <td>Jam</td>
              <td>: {{ date_format(date_create($schedule->time), 'H:i') }} wib</td>
            </tr>
            <tr>
              <td class="align-top" >Link</td>
              <td>
                @if (count($schedule->scheduleLinks))
                  @foreach ($schedule->scheduleLinks as $link)
                    @if ($loop->first)
                      <a href="{{$link->link}}" class="block">
                        : <span class="underline capitalize">{{$link->channel}}</span>
                         {{-- ({{$link->link}}) --}}
                      </a>
                    @else
                      <a href="{{$link->link}}" class="block ml-2">
                        <span class="underline capitalize">{{$link->channel}}</span>
                         {{-- ({{$link->link}}) --}}
                      </a>
                    @endif
                  @endforeach
                @else
                  : - 
                @endif
              </td>
            </tr>
          </table>
          <div class="col-span-2 text-right">
            <a href="{{route('admin.schedule.edit', $schedule->id)}}" class="p-2 bg-gray-100 rounded-md"><span class="inline icon-edit"></span> <span class="hidden lg:inline">Edit</span></a>
          </div>
        </div>
    @endforeach
  </x-card>
@endsection
