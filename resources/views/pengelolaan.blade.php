@extends('Layout.app')
@include('Components.navbar')
@section('title', 'Pengelolaan')

@section('content')
<h1 class="text-center text-3xl font-semibold text-rose-800 mb-10">
  Manage Your Products
</h1>

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
  @foreach($items as $item)
    <div class="bg-white rounded-2xl shadow-md hover:shadow-xl overflow-hidden border-t-4 border-rose-900">
      <img src="{{ $item['img'] ?? asset('images/default-flower.jpg') }}" alt="{{ $item['nama'] ?? 'Produk' }}" class="w-full h-48 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-semibold text-rose-700 mb-2">
          {{$item['nama']}}
        </h3>
        <p class="text-sm text-gray-700">
          Rp {{$item['harga']}}
        </p>
        <p class="text-sm text-gray-500 mt-1">
          Stok: {{$item['stok']}}
        </p>

        <div class="flex justify-end gap-2 mt-4">
          <button class="px-4 py-1.5 rounded-full border border-rose-700 text-pink-700 hover:bg-rose-700 hover:text-white">
            Edit
          </button>
          <button class="px-4 py-1.5 rounded-full bg-rose-700 text-white hover:bg-rose-800">
            Hapus
          </button>
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection
