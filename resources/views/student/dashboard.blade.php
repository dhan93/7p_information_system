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
    <x-link-list href="https://youtu.be/hOQR_GsQ8e4" target="_blank">
      Perkenalan Manajemen Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://dl.dropboxusercontent.com/s/j8t9jqg9w6m30yo/Silabus%207PS4%20rev.1.pdf?dl=0" target="_blank">
      Silabus Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://dl.dropboxusercontent.com/s/6dfggt0prek4dj5/SOP%207PS4.pdf?dl=0" target="_blank">
      SOP Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://dl.dropboxusercontent.com/s/yey7k767qrox8h3/FAQ%207PS4.pdf?dl=0" target="_blank">
      FAQ Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://dl.dropboxusercontent.com/s/5kcr0kem3mewocc/Jurnal%207PS4.pdf?dl=0" target="_blank">
      Jurnal Sekolah 7 Perempuan <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="{{route('guide.index')}}">
      Kumpulan Tutorial Sekolah 7 Perempuan
    </x-link-list>
    <x-link-list href="https://dl.dropboxusercontent.com/s/apgwuqpzlj6u1od/Dzikir%20Pagi%20Petang%20S7P.pdf?dl=0" target="_blank">
      Dzikir Pagi dan Petang <span class="icon-launch"></span>
    </x-link-list>    
  </x-card>
@endsection