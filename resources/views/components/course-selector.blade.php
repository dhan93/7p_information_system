
  <select 
    name="default_course" 
    id="course-selector"
    class="flex-grow h-10 pl-5 pr-10 text-gray-600 bg-white border border-gray-300 rounded-lg appearance-none lg:flex-initial hover:border-gray-400 focus:outline-none lg:w-2/3"
  >
    @foreach ($availableCourses as $course)
      <option value="{{$course->id}}">
        {{$course->name}} Season {{$course->generation}}
      </option>
    @endforeach
  </select>