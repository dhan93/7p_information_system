@extends('layouts.app')

@section('page_title', 'Edit Jadwal')

@section('main')
  <x-card>
    <x-error-message class="mb-8" />
    
    <form action="{{route('admin.schedule.update', $schedule->id)}}" method="POST" x-data="handler()">
      @csrf
      @method('PATCH')
      {{-- tema --}}
      <x-label class="block mt-4">Tema</x-label>
      <x-input name="topic" type="text" value="{{ old('topic') ?? $schedule->topic }}" class="w-full" required></x-input>
      {{-- judul --}}
      <x-label class="block mt-4">Judul <small>(opsional)</small></x-label>
      <x-input name="sub_topic" type="text" value="{{ old('sub_topic') ?? $schedule->sub_topic }}" class="w-full"></x-input>
      {{-- pemateri --}}
      <x-label class="block mt-4">Pemateri</x-label>
      <x-input name="lecturer" type="text" value="{{ old('lecturer') ?? $schedule->lecturer }}" class="w-full" required></x-input>
      {{-- tanggal --}}
      <x-label class="block mt-4">Tanggal</x-label>
      <x-input name="date" type="date" value="{{ old('date') ?? date_format(date_create($schedule->time), 'Y-m-d') }}" class="w-full" required></x-input>
      {{-- jam --}}
      <x-label class="block mt-4">Jam</x-label>
      <x-input name="time" type="time" value="{{ old('time') ?? date_format(date_create($schedule->time), 'H:i') }}" class="w-full" required></x-input>
      {{-- link --}}
      {{-- <div class="w-full p-4 mt-4 border rounded-md">
        @foreach ($schedule->scheduleLinks as $link)
          <x-label class="block">Channel</x-label>
          <x-select name="channel" class="w-full">
            <option value="Zoom">Zoom</option>
            <option value="Youtube">YouTube</option>
          </x-select>
          <x-label class="block">Link</x-label>
          <x-textarea name="link" class="w-full">
            {{ $schedule->scheduleLinks[0]->link ?? '' }}
          </x-textarea>
        @endforeach
      </div> --}}
      <div class="w-full p-4 pt-0 mt-4 border rounded-md">
        <template x-for="(item, index) in links" :key="index">
          <div class="grid grid-cols-12 pb-4 border-b">
            <div class="col-span-11">
              <x-label class="block mt-2" x-text="'Channel '+(index+1)"></x-label>
              <input 
                class="w-full capitalize border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                type="text" 
                :name="'links['+index+'][channel]'" 
                x-model="item.channel"
              >
              <x-label class="block mt-2" x-text="'Link '+(index+1)"></x-label>
              <textarea 
                class="w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                :name="'links['+index+'][link]'" 
                placeholder="contoh: https://www.youtube.com/watch?v=Thw3ZEFcPwE"
                x-model="item.link">
              </textarea>
              <input type="hidden" :name="'links['+index+'][id]'" x-model="item.id">
            </div>
            <div class="col-span-1 pt-4 text-center">
              <a class="inline-block p-1 text-sm text-white bg-red-500 rounded-md cursor-pointer" @click="removeLink(index)">
                <span class="icon-clear"></span>
              </a>
            </div>
          </div>
        </template>
        <a class="block mt-2 text-center text-green-600 cursor-pointer" @click="addNewLink()">
          <span class="mr-2 icon-add"></span>Tambah Link
        </a>
      </div>
      <template x-for="(item, index) in deletedLink" :key="index">
        <input type="hidden" name="deleted_links[]" x-model="item">
      </template>      
      <x-button type="submit" class="mt-4">Simpan</x-button>
    </form>
  </x-card>
@endsection

@section('bottom-js')
<script>
  console.log('{!!json_encode($schedule->scheduleLinks->toArray())!!}');
  function handler() {
    return {
      links: {!!json_encode($schedule->scheduleLinks->toArray())!!},
      deletedLink: [],
      addNewLink() {
        this.links.push({
          channel: '',
          link: ''
        });
      },
      removeLink(index) {
        let r = confirm("Hapus link untuk channel "+this.links[index].channel+" ("+this.links[index].link+")?");
        if (r) {
          if (this.links[index].id) {
            this.deletedLink.push(this.links[index].id)
          }
          this.links.splice(index, 1);
        }
        
      }
    }
  }
</script>
@endsection