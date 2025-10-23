@extends('Layout.app')
@include('Components.navbar')
@section('title', 'Profile')

@section('content')
<div class="max-w-lg mx-auto bg-white p-8 rounded-2xl shadow-lg border-t-4 border-rose-900 text-center">
    <img src="{{asset('images/nazwa.jpg') }}" alt="Profile Picture" class="w-40 h-40 rounded-full mx-auto shadow-md object-cover object-center">
    <br>
    <h2 class="text-2xl font-semibold text-rose-900 mb-2">Nazwa</h2>
    <p class="text-gray-600 mb-6">Admin</p>

    <div class="text-left space-y-3 mb-6">
        <p><span class="font-semibold">Name:</span> Nazwa Ulul Azmi</p>
        <p><span class="font-semibold">Email:</span> nazwa@gmail.com</p>
    </div>

    <x-button>
        Edit Profil
    </x-button>
    <br><br>
    <button class="hover:text-rose-800 px-6 py-2 text-sm ">
        Change Password
    </button>
        
</div>
@endsection
