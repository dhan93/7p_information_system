@php
  $assignment=[
    "title" => "Tugas yang kesatu",
    "name" => "tugas_1",
    "items" => [
      ["id" => "sudah", "value"=> "Sudah selesai", "label" => "Sudah selesai"],
      ["id" => "sedang", "value"=> "Belum selesai", "label" => "Belum selesai"],
      ["id" => "belum", "value"=> "Belum dikerjakan", "label" => "Belum dikerjakan"],
    ]
  ]
@endphp

@extends('layouts.app')

@section('page_title', 'Daftar tugas')

@section('main')
  <x-card title="Tugas Peran Sebagai Istri">
    <x-radio-group title="{{$assignment['title']}}" name="{{$assignment['name']}}" :items="$assignment['items']"></x-checkbox-group>
  </x-card>
  <x-card title="Daftar Tugas">
    @for ($i = 1; $i < 8; $i++)
      <div class="p-4 pt-2 mb-4 border border-gray-200 rounded-md">
        <h3 class="mb-4 text-xl font-semibold">Peran Sebagai .................</h3>
      </div>
    @endfor
  </x-card>
@endsection
