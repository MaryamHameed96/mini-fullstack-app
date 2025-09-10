@extends('layouts.app')

@section('content')
<div class="container mx-auto py-20 text-center">
    <h1 class="text-3xl font-bold text-[#2B1B12]">
        Welcome Admin {{ auth()->user()->name }}
    </h1>
        <!-- Logout button -->
     <form method="POST" action="{{ route('logout') }}" class="mt-6">
        @csrf
        <button type="submit" 
            class="bg-black text-white px-6 py-2 rounded-lg hover:black-700 transition">
            Logout
        </button>
    </form>
</div>
@endsection
