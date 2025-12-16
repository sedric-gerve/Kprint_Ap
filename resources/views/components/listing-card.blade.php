@props(['listing'])

<x-card>
  <div class="flex">
    <img class="hidden w-48 mr-6 md:block"
      src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}" alt="" />
    <div>
      <h3 class="text-2xl">
        <a class="font-bold" href="/listings/{{$listing->id}}">{{$listing->title}}</a>
      </h3>
      <x-listing-tags :tagsCsv="$listing->tags" />
    </div>
  </div>
</x-card>