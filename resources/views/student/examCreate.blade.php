@extends('layouts.app')

@section('page_title', $examData->topic.': '.$examData->sub_topic)

@section('main')
<x-card title="{{ $examData->topic.': '.$examData->sub_topic }}">
  <form action="{{route('exam.store')}}" method="post">
    @csrf
    @foreach ($questions as $question)
      <div class="p-4 pt-2 mb-4 border border-gray-200 rounded-md">
        <h3 class="mb-2 font-semibold">{{ $question->text }}</h3>
        <ul>
          @foreach ($question->options as $option)
            <li class="mt-2">
              <x-radio id="{{$question->id}}_{{$option->key}}" name="question[{{$question->id}}]" value="{{$option->key}}" label="{{strtoupper($option->key)}}. {{$option->text}}" />
            </li>
          @endforeach
        </ul>
      </div>
    @endforeach
    <input type="hidden" name="exam_id" value="{{$examData->id}}">
    <x-button type="submit" class="px-4 py-2 mx-auto">Selesai</x-button>
  </form>
</x-card>
@endsection