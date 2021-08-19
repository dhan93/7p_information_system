@props(['errors'])
@if ($errors->any())
    <div class="px-4 py-2 text-red-900 bg-red-300 rounded-md {{$class ?? '' }}">
        <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif