@extends('layouts.base')
@section('content')
    <div class="max-w-6xl mx-auto p-6 bg-gray-100">
  <div class="grid grid-cols-3 gap-8">

    <!-- LEFT: IMAGE GALLERY -->
    <div>
      <div class="border-2 border-black">
        <img src="{{ asset(('img/placeholder.png')) }}" class="w-full h-auto" />
      </div>

      <div class="flex gap-2 mt-2">
        <img src="{{ asset(('img/placeholder.png')) }}" class="border w-20 h-20 object-cover" />
        <img src="{{ asset(('img/placeholder.png')) }}" class="border w-20 h-20 object-cover" />
        <img src="{{ asset(('img/placeholder.png')) }}" class="border w-20 h-20 object-cover" />
      </div>
    </div>

    <!-- RIGHT: PRODUCT INFO -->
    <div class="col-span-2">
      <h1 class="text-3xl font-bold">{{ $product->name }}</h1>
      <p class="text-sm text-gray-600 mt-1">Aangeboden door Thijs den Braven</p>

      <div class="border-t my-3"></div>

      <p class="text-2xl font-semibold">${{ number_format($product->price, 2) }}</p>

      <p class="mt-2 text-gray-700 max-w-xl">
        {{
          $product->description ?? 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
        }}
      </p>

      <div class="border-t my-4"></div>

      <!-- SPECS + BUTTON -->
      <div class="flex justify-between items-start">
        <div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm">
          <span class="font-semibold">Type</span>
          <span>{{ $product->type ?? 'Niet gespecificeerd' }}</span>

          <span class="font-semibold">Materiaal</span>
          <span>{{ $product->material ?? 'Niet gespecificeerd' }}</span>

          <span class="font-semibold">Duurzaamheid</span>
          <span>{{ $product->sustainability ?? 'Niet gespecificeerd' }}</span>

          <span class="font-semibold">Productietijd</span>
          <span>{{ $product->production_time ?? 'Niet gespecificeerd' }}</span>

          <span class="font-semibold">Complexiteit</span>
          <span>{{ $product->complexity ?? 'Niet gespecificeerd' }}</span>

          <span class="font-semibold">Unieke eigenschap</span>
          <span>{{ $product->unique_feature ?? 'Niet gespecificeerd' }}</span>
        </div>

        <button class="ml-6 bg-green-300 hover:bg-green-400 text-black px-6 py-2 rounded shadow">
          Kopen
        </button>
      </div>
    </div>
  </div>

  <!-- REVIEWS -->
  <div class="mt-12">
    <h2 class="text-3xl font-bold">Reviews</h2>

    <div class="border-t mt-2 pt-6 flex items-center gap-6">
      <div>
        <p class="text-4xl font-bold">1.0</p>
        <div class="text-purple-500 text-lg">★★★★★</div>
        <p class="text-xs text-gray-500">100 reviews</p>
      </div>
    </div>
  </div>
</div>
@endsection
