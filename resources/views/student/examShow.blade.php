@extends('layouts.app')

@section('page_title', $examData->topic.': '.$examData->sub_topic)

@section('main')
<x-card title="{{ $examData->topic.': '.$examData->sub_topic }}">
  <h3 class="mb-8 -mt-4 text-xl text-center">score: {{$examData->users[0]->pivot->score}}/100</h3>
  @for ($i = 0; $i < count($questions); $i++)
    <div class="p-4 pt-2 mb-4 border border-gray-200 rounded-md">
      <h3 class="mb-2 font-semibold">{{ $questions[$i]->text }}</h3>
      <ul>
        @foreach ($questions[$i]->options as $option)
          @if (($questions[$i]->answer == $answers[$i]->answer && $questions[$i]->answer == $option->key)||$questions[$i]->answer == $option->key)
            <li class="mt-2 text-green-500">
              <span class="icon-check"></span>
          @else
            @if ($answers[$i]->answer == $option->key)
              <li class="mt-2 text-red-500">
                <span class="icon-close"></span>
            @else
              <li class="mt-2">
                <span class="opacity-0 icon-circle"></span>
            @endif            
          @endif
            {{strtoupper($option->key)}}. {{$option->text}}
          </li>          
        @endforeach
      </ul>
    </div>
  @endfor 
</x-card>
@endsection