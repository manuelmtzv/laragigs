<x-layouts.app title="listing">
  <div class="py-8">
    <h1 class="text-center text-3xl font-semibold">{{ $heading }}</h1>

    <section class="list">
      <article class="list__item">
        <h2 class="text-2xl font-bold">{{ $listing['title'] }}</h2>

        <p class="text-justify">{{ $listing['description'] }}</p>
      </article>
    </section>
  </div>
</x-layouts.app>
