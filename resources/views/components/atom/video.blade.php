@props(['slug'])

<div {{ $attributes }}>
  <video width="40%" height="24rem" controls>
    <source src="/videos/{{$slug}}.mp4" type="video/mp4">
    Tu navegador no soporta HTML5 video.
  </video>
</div>