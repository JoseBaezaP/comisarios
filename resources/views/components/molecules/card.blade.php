@props(['src','name','team', 'color'])

<a href="/{{Str::slug($name, '-')}}" class="transform hover:scale-105 ">
  <div class="w-full bg-white rounded-lg shadow-lg p-12 flex flex-col justify-center items-center">
    <x-atom.avatar :src="$src" />
    <x-atom.description :name="$name" :team="$team" :color="$color" />
  </div>
</a>