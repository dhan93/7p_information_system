@extends('layouts.app')

@section('page_title', 'Dashboard')

@section('main')
  {{ Auth::user()->role->name }}
@endsection