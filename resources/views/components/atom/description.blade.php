@props(['name','team', 'color'])

@php

if($color === 'red') {
$colorTeam = 'red-800';
}
else {
$colorTeam = ($color === 'white') ? 'gray-300' : $color.-500;
}

@endphp

<div class="text-center">
  <p class="text-xl text-black mb-2">{{$name}}</p>
  <p class="text-base font-normal text-{{$colorTeam}}">{{$team}}</p>
</div>