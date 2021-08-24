<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Course;

class CourseList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {   
      $availableCourses = Course::all();
      
      return view('components.course-list', compact('availableCourses'));
    }
}
