@extends('layouts.app')

@section('page_title', 'Bantuan')

@section('main')
  <x-card title="Tutorial">
    <x-link-list href="https://drive.google.com/file/d/1lZPv2NEmDPMbP6S-eBxAio3yGEOpY4j-/view?usp=sharing" target="_blank">
      Tutorial desain dengan Canva <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://drive.google.com/file/d/1bRhXYJX8MyYEk9cmjTrtsIix1wkMyrtx/view?usp=sharing" target="_blank">
      Tutorial menggunakan Zoom Meting <span class="icon-launch"></span>
    </x-link-list>
    <x-link-list href="https://drive.google.com/file/d/1YAERPMH1eDRNX3OXWAmB8HDKVm3pfFu2/view?usp=sharing" target="_blank">
      Tutorial posting gambar di Instagram <span class="icon-launch"></span>
    </x-link-list>
  </x-card>
@endsection