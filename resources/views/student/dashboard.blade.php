@extends('layouts.app')

@section('page_title', 'Dashboard')

@section('main')
{{Auth::user()->default_course}}
@endsection