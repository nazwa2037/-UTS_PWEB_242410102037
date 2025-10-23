@extends('Layout.app')
@section('title','Login')

@section('content')
<div class="max-w-md mx-auto mt-12">
  <h2 class="text-3xl font-serif mb-2 text-center" style="font-family:poppins">Welcome to Orchish</h2>
  <br><br>
  <div class="bg-white rounded-2xl p-8 shadow-lg">
    @if(session('error'))
      <div class="mb-3 text-sm text-red-700 bg-red-100 p-2 rounded">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('do.login') }}">
      @csrf
      <div class="mb-4">
        <label class="block text-sm mb-1">Username</label>
        <input name="username" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#8F4151]/40" placeholder="masukkan username">
      </div>
      <br>
      <div class="mb-6">
        <label class="block text-sm mb-1">Password</label>
        <input name="password" type="password" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#8F4151]/40" placeholder="masukkan password">
      </div>

      <div class="text-center w-full">
        <x-button>Login</x-button>
      </div>
    </form>
  </div>
</div>
@endsection
