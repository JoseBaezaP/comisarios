@props(['slug'])

<div>
  <x-atom.back />
  <x-atom.title class="uppercase">
    {{ Str::of($slug)->replace('-', ' ')}}
  </x-atom.title>
  <div class="grid grid-cols-1 sm:grid-cols-4 gap-6">
    <div class="grid place-items-center">
      <img class="object-center object-cover w-1/2 sm:w-full" src="/images/{{$slug}}.png" alt="photo">
    </div>
    <x-atom.video class="sm:col-start-2 sm:col-end-5 grid place-items-center" :slug="$slug" />
  </div>
</div>