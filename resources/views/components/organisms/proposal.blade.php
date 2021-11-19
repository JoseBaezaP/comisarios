@props(['slug'])

<div class="h-screen w-full bg-blue-200 overflow-hidden">
  <section class="max-w-6xl mx-auto px-4 py-12">
    <x-molecules.proposal-body :slug="$slug" />
  </section>
</div>