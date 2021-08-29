@extends('layouts.app')

@section('page_title', 'Bantuan')

@section('main')
  <x-card title="Tutorial">
    <x-link-list href="https://youtu.be/u8DuMmM2s9g" target="_blank">
      Tutorial desain dengan Canva <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://youtu.be/Rp1bOsYcowk" target="_blank">
      Tutorial menggunakan Zoom Meting <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://youtu.be/gRuoKJww264" target="_blank">
      Tutorial posting gambar di Instagram <span class="icon-launch"></span>
    </x-link-list>
  </x-card>
@endsection