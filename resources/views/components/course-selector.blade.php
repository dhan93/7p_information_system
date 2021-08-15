<form action="{{ route('changeCourse') }}" id="course-selector-form" class="flex-grow h-10 lg:w-2/3" method="POST">
  @csrf
  <select 
    name="default_course" 
    id="course-selector"
    class="pl-5 pr-10 text-gray-600 bg-white border border-gray-300 rounded-lg appearance-none lg:flex-initial hover:border-gray-400 focus:outline-none"
    onchange="document.getElementById('course-selector-form').submit()"
  >
    @foreach ($availableCourses as $course)
      <option value="{{$course->id}}" 
        @if ($course->id == Auth::user()->default_course)
          selected
        @endif
      >
        {{$course->name}} Season {{$course->generation}}
      </option>
    @endforeach
  </select>
  <input type="hidden" class="hidden" name="current_page" value="{{ Route::currentRouteName() }}">
</form>