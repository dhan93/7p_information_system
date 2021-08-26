@extends('layouts.app')

@section('page_title', 'Dashboard')

@section('main')
  <x-card title="Selamat Datang">
    <p class="text-center">
      Selamat datang di <strong>Sistem Informasi Sekolah 7 Perempuan</strong>.
    </p>
    <p class="mb-4 text-center">
      Silakan akses halaman-halaman berikut untuk mengenal Sekolah 7 Perempuan lebih jauh.
    </p>
    <x-link-list href="https://drive.google.com/file/d/1UC_WFnOPooVKnsOFwM9uiC0wzlK_CAuU/view?usp=sharing" target="_blank">
      Perkenalan Manajemen Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="" target="_blank">
      Silabus Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://drive.google.com/file/d/1VGKdNMN40pPmes5ytc9TTL8p0veHi_wH/view?usp=sharing" target="_blank">
      SOP Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://drive.google.com/file/d/1vNe1gcJ7DKS7IffH1eAd45-QJLDrKFPS/view?usp=sharing" target="_blank">
      FAQ Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="" target="_blank">
      Jurnal Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="{{route('guide.index')}}">
      Kumpulan Tutorial Sekolah 7 Perempuan
    </x-link-list>
    <x-link-list href="https://drive.google.com/file/d/1jwsi723wcMZOBHXdq4UbZMsCv659V7tF/view?usp=sharing" target="_blank">
      Dzikir Pagi dan Petang <span class="icon-launch"></span>
    </x-link-list>    
  </x-card>
@endsection