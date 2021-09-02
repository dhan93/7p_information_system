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
    <div class="xl:grid xl:grid-cols-2 xl:gap-2">
      <x-link-list href="Tentang Sekolah 7 Perempuan" target="_blank" thumbnail="about-s7p-thumb.png">
        Tentang Sekolah 7 Perempuan <span class="icon-launch"></span>
      </x-link-list>
      <x-link-list href="https://youtu.be/hOQR_GsQ8e4" target="_blank" thumbnail="video-management-thumb.png">
        Perkenalan Manajemen Sekolah 7 Perempuan <span class="icon-launch"></span>
      </x-link-list>
      <x-link-list href="https://dl.dropboxusercontent.com/s/j8t9jqg9w6m30yo/Silabus%207PS4%20rev.1.pdf?dl=0" target="_blank" thumbnail="silabus-thumb.png">
        Silabus Sekolah 7 Perempuan <span class="icon-launch"></span>
      </x-link-list>
      <x-link-list href="https://dl.dropboxusercontent.com/s/6dfggt0prek4dj5/SOP%207PS4.pdf?dl=0" target="_blank" thumbnail="SOP-thumb.png">
        SOP Sekolah 7 Perempuan <span class="icon-launch"></span>
      </x-link-list>
      <x-link-list href="https://dl.dropboxusercontent.com/s/yey7k767qrox8h3/FAQ%207PS4.pdf?dl=0" target="_blank" thumbnail="FAQ-thumb.png">
        FAQ Sekolah 7 Perempuan <span class="icon-launch"></span>
      </x-link-list>
      {{-- <x-link-list href="https://dl.dropboxusercontent.com/s/5kcr0kem3mewocc/Jurnal%207PS4.pdf?dl=0" target="_blank" thumbnail="jurnal-thumb.png">
        Jurnal Sekolah 7 Perempuan <span class="icon-launch"></span>
      </x-link-list> --}}
      <x-link-list href="{{route('module.index')}}">
        Kumpulan Materi Sekolah 7 Perempuan
      </x-link-list>
      <x-link-list href="{{route('guide.index')}}">
        Kumpulan Tutorial Sekolah 7 Perempuan
      </x-link-list>
      {{-- <x-link-list href="https://dl.dropboxusercontent.com/s/apgwuqpzlj6u1od/Dzikir%20Pagi%20Petang%20S7P.pdf?dl=0" target="_blank" thumbnail="matsurat-thumb.png">
        Dzikir Pagi dan Petang <span class="icon-launch"></span>
      </x-link-list>     --}}
    </div>
  </x-card>
@endsection