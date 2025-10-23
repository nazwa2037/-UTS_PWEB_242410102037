@extends('Layout.app')
@include('Components.navbar')
@section('title', 'Dashboard')

@section('content')
<h1 class="text-2xl font-semibold text-rose-900 mb-6">
  Selamat datang, {{ $username }}!
</h1>
<br>
<div class="text-center bg-white shadow-lg p-6 rounded-2xl border-t-4 border-rose-700">
    <h2 class="text-xl font-semibold text-rose-800 mb-4 text-center">
        Today's Orders
    </h2>
    <table class="w-full text-sm text-center border-collapse">
        <thead class="bg-rose-800">
            <tr class="text-white">
                <th class="p-2">No</th>
                <th class="p-2">Customer</th>
                <th class="p-2">Item</th>
                <th class="p-2">Total</th>
                <th class="p-2">Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr class="border-b">
                <td class="p-2">{{$order['no']}}</td>
                <td class="p-2">{{$order['customer']}}</td>
                <td class="p-2">{{$order['items']}}</td>
                <td class="p-2">Rp {{$order['total']}}</td>
                <td class="p-2">{{$order['time']}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<br><br>
<div class="text-center bg-white shadow-lg p-6 rounded-2xl border-t-4 border-rose-800">
    <h2 class="text-xl font-semibold mb-4 text-rose-800">Overview</h2>
    <div class="grid grid-cols-2 gap-4 text-center">
        <div class="bg-rose-100 p-4 rounded-xl">
            <p class="text-lg font-md">Total Orders</p>
            <p class="text-3xl font-bold text-rose-700">3</p>
        </div>
        <div class="bg-rose-100 p-4 rounded-xl">
            <p class="text-lg font-md">Revenue</p>
            <p class="text-3xl font-bold text-rose-700">Rp 800.000,00</p>
        </div>
    </div>
</div>
@endsection
