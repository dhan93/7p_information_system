<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CourseSelector extends Component
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
      if(Auth::user()->multiple_courses) {
        $availableCourses = User::with(['courses' => function ($query) {
              $query->orderBy('name', 'asc')->orderBy('generation', 'desc');
          }])
          ->where('users.id', Auth::user()->id)
          ->first();
        $availableCourses = $availableCourses->courses;
        // $availableCourses = Auth::user()->courses;
        return view('components.course-selector', compact('availableCourses'));
      };
    }
}
