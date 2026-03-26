@extends('layouts.base')
@section('content')


  <!-- SEARCH -->
  <div class="mb-6">
    <input
      type="text"
      placeholder="Zoek op..."
      class="w-full border rounded-md px-4 py-3 bg-white shadow-sm focus:outline-none"
    />
  </div>

  <!-- FILTERS -->
  <div class="flex gap-6 mb-6">
    <select class="border rounded-md px-4 py-2 bg-white shadow-sm">
      <option>Producttype</option>
    </select>

    <select class="border rounded-md px-4 py-2 bg-white shadow-sm">
      <option>Materialen</option>
    </select>

    <select class="border rounded-md px-4 py-2 bg-white shadow-sm">
      <option>Productietijd</option>
    </select>
  </div>

  <!-- RESULT COUNT -->
  <p class="text-center text-sm text-gray-600 mb-4">200 producten</p>

  <!-- PRODUCT GRID -->
  <div class="grid grid-cols-4 gap-6">

    @foreach ($products as $product)
    <a href="{{ route('producten.view', $product->id) }}" class="border rounded-md bg-white shadow-sm overflow-hidden">
      <img src="{{ asset('img/placeholder.png') }}" class="w-full h-48 object-cover" />
      <div class="p-2 text-sm">
        <p>{{ $product->name }}</p>
        <div class="flex justify-between items-center text-xs mt-1">
          <span>${{ number_format($product->price, 2) }}</span>
          <span class="flex items-center gap-1 text-purple-500">
            ★ <span class="text-black">1</span>
          </span>
        </div>
      </div>
    </a>
    @endforeach

  </div>

  <!-- PAGINATION -->
  <div class="text-center mt-6 text-sm text-gray-600">
    &lt; 1 van 15 &gt;
  </div>

</div>
@endsection
