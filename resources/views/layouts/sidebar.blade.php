@php
  $studentMenu = [
    ['title'=>'Dashboard', 'target'=>route('dashboard'), 'icon' => 'icon-dashboard'],
    ['title'=>'Jadwal', 'target'=>route('schedule.index'), 'icon' => 'icon-schedule'],
    ['title'=>'Absensi', 'target'=>route('attendance.index'), 'icon' => 'icon-event_available'],
    ['title'=>'Materi', 'target'=>route('module.index'), 'icon' => 'icon-book'],
    ['title'=>'Amalan Harian', 'target'=>route('daily_activity.index'), 'icon' => 'icon-check-square-o'],
    // ['title'=>'Penugasan', 'target'=>route('assignment.index'), 'icon' => 'icon-assignment'],
    ['title'=>'Evaluasi', 'target'=>route('exam.index'), 'icon' => 'icon-create'],
    ['title'=>'Bantuan', 'target'=>route('guide.index'), 'icon' => 'icon-contact_support']
  ];
  $adminMenu = [
    ['title'=>'Kelas', 'target'=>route('admin.course.index'), 'icon' => 'icon-bookmark'],
    ['title'=>'Jadwal', 'target'=>route('admin.schedule.index'), 'icon' => 'icon-schedule'],
    // ['title'=>'Absensi', 'target'=>route('attendance.index'), 'icon' => 'icon-event_available'],
    // ['title'=>'Materi', 'target'=>route('module.index'), 'icon' => 'icon-book'],
    // ['title'=>'Amalan Harian', 'target'=>route('daily_activity.index'), 'icon' => 'icon-check-square-o'],
    // // ['title'=>'Penugasan', 'target'=>route('assignment.index'), 'icon' => 'icon-assignment'],
    // ['title'=>'Evaluasi', 'target'=>route('exam.index'), 'icon' => 'icon-create'],
    // ['title'=>'Bantuan', 'target'=>route('guide.index'), 'icon' => 'icon-contact_support']
];
  switch (Auth::user()->role_id) {
    case 1:
      $menus = $studentMenu;
      break;
    case 2;
      $menus = $adminMenu;
    default:
      # code...
      break;
  }
@endphp

<aside class="flex flex-col-reverse w-full px-3 py-2 bg-red-100 shadow-md md:flex-col md:w-3/12 xl:w-2/12" :class="leftNavOpen ? 'md:hidden' : 'hidden md:block'">
  @auth
    <section class="flex flex-col p-2 mt-2 bg-pink-200 rounded-md shadow-inner md:mt-0 md:mb-2">
      <div class="flex flex-row w-full cursor-pointer" x-on:click="profileMenuOpen = ! profileMenuOpen">
        <img class="w-auto h-10 mr-2 bg-white rounded-full" src="{{ asset('images/user-circle-o.svg') }}" alt="profile picture">
        <div class="flex flex-col w-full">
          <span class="text-sm font-semibold md:leading-4 md:text-base">{{ Auth::user()->name }}</span>
          <div class="flex flex-row">
            <span class="flex-auto text-xs font-semibold md:text-sm">{{ Auth::user()->role->name }}</span>
            <span class="" :class="profileMenuOpen ? 'icon-keyboard_arrow_up' : 'icon-keyboard_arrow_down'"></span>
          </div>
        </div>
      </div>
      <ul class="text-left md:pl-2" x-show="profileMenuOpen">
        {{-- <li class="mt-2"><a href=""><span class="icon-settings"></span> Edit profil</a></li> --}}
        <li class="mt-1">
          <a href="{{route('logout')}}" onclick="event.preventDefault(); getElementById('logouter').submit();">
            <span class="icon-logout"></span> Logout
          </a>
        </li>
      </ul>
    </section>
  @endauth
  <ul class="md:pl-2 sm:grid sm:grid-cols-2 md:block">
    @foreach ($menus as $menu)
      <li class="my-1 text-lg">
        <a href="{{ $menu['target'] }}">
          <span class="{{ $menu['icon'] }}"></span> {{ $menu['title'] }}
        </a>
      </li>
    @endforeach
  </ul>
</aside>

<form method="POST" class="hidden" id="logouter" action="{{ route('logout') }}">
  @csrf
</form>