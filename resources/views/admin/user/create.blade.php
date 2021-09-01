@extends('layouts.app')

@section('page_title', 'Tambah Akun')

@section('main')
  <x-card title="Tambah Akun" >
    <x-error-message class="mb-8 -mt-3" />
    
    <form action="{{route('admin.user.store')}}" method="POST">
      @csrf
      {{-- 'name', --}}
      <x-label class="block">Nama Lengkap</x-label>
      <x-input class="w-full" name="name" type="text" value="{{ old('name') }}" required></x-input>

      {{-- 'phone', --}}
      <x-label class="block mt-4">Nomor Whatsapp</x-label>
      <x-input name="phone" class="w-full" type="text" value="{{ old('phone') }}" required></x-input>

      {{-- 'email', --}}
      <x-label class="block mt-4">Alamat email</x-label>
      <x-input class="w-full" name="email" type="email" value="{{ old('email') }}" placeholder="(optional)"></x-input>
      
      {{-- 'password', --}}
      {{-- <x-label class="block mt-4">Password</x-label>
      <x-checkbox name="use_default_password" value="true" label="Gunakan password default"></x-checkbox>
      <x-input name="email" class="w-full" type="password"></x-input> --}}
      
      {{-- 'role_id', --}}
      {{-- <x-label class="block mt-4">Level Akun</x-label>
      <x-select name="role_id" class="w-full">
        <option value="0">umum</option>
        <option value="1" selected>Siswa</option>
      </x-select> --}}
      {{-- 'multiple_courses', --}}
      {{-- <x-label class="block mt-4">Program Kelas</x-label> --}}
      {{-- <x-checkbox name="course" value="1" label="Gunakan password defaulS7P season 1"></x-checkbox> --}}
      {{-- <x-checkbox name="course" class="w-full" value="4" label="Sekolah 7 Perempuan Season 4" checked="true"></x-checkbox> --}}
      {{-- 'default_course' --}}
      <x-button type="submit" class="mt-4">Simpan</x-button>
    </form>
  </x-card>
@endsection
