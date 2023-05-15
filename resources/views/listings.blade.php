<x-layouts.app title="listings">
  <div class="py-8">
    <h1 class="text-center text-3xl font-semibold">{{ $heading }}</h1>

    <section class="list">
      @unless (is_null($listings) && count($listings) === 0)
        @foreach ($listings as $listing)
          <article class="list__item hover:bg-green-200">
            <a class="text-2xl" href="/{{ $listing['id'] }}">{{ $listing['title'] }}</a>

            <p class="text-justify">{{ $listing['description'] }}</p>
          </article>
        @endforeach
      @else
        <p class="text-center">No listings available</p>
      @endunless
    </section>
  </div>

</x-layouts.app>
