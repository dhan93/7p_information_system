@php
  $menus = [
    ['title'=>'Dashboard', 'target'=>route('dashboard'), 'icon' => 'icon-dashboard'],
    ['title'=>'Absensi', 'target'=>route('dashboard'), 'icon' => 'icon-event_available'],
    ['title'=>'Jadwal', 'target'=>route('dashboard'), 'icon' => 'icon-schedule'],
    ['title'=>'Materi', 'target'=>route('dashboard'), 'icon' => 'icon-book'],
    ['title'=>'Amalan harian', 'target'=>route('dashboard'), 'icon' => 'icon-check-square-o'],
    ['title'=>'Penugasan', 'target'=>route('dashboard'), 'icon' => 'icon-assignment'],
    ['title'=>'Post Test', 'target'=>route('dashboard'), 'icon' => 'icon-create'],
    ['title'=>'Bantuan', 'target'=>route('dashboard'), 'icon' => 'icon-contact_support']
  ]
@endphp

<aside class="flex flex-col-reverse w-full px-3 py-2 bg-red-100 shadow-md md:flex-col md:w-3/12 2xl:w-2/12" :class="leftNavOpen ? 'md:hidden' : 'hidden md:block'">
  <section class="flex flex-col p-2 mt-2 bg-pink-200 rounded-md shadow-inner md:mt-0 md:mb-2">
    <div class="flex flex-row w-full cursor-pointer" x-on:click="profileMenuOpen = ! profileMenuOpen">
      <img class="w-auto h-10 mr-2 bg-white rounded-full" src="{{ asset('images/user-circle-o.svg') }}" alt="profile picture">
      <div class="flex flex-col w-full">
        <span class="text-sm font-semibold md:leading-4 md:text-base">Nur Fitriani</span>
        <div class="flex flex-row">
          <span class="flex-auto text-xs font-semibold md:text-sm">siswa</span>
          <span class="" :class="profileMenuOpen ? 'icon-keyboard_arrow_up' : 'icon-keyboard_arrow_down'"></span>
        </div>
      </div>
    </div>
    <ul class="text-left md:pl-2" x-show="profileMenuOpen">
      <li class="mt-2"><span class="icon-settings"></span> Edit profil</li>
      <li class="mt-1"><span class="icon-logout"></span> Logout</li>
    </ul>
  </section>
  <ul class="md:pl-2">
    @foreach ($menus as $menu)
      <li class="my-1 text-lg text-center md:text-left">
        <a href="{{ $menu['target'] }}">
          <span class="{{ $menu['icon'] }}"></span> {{ $menu['title'] }}
        </a>
      </li>
    @endforeach
  </ul>
</aside>