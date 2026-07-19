@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-[#4A3728]">
    Dashboard
</h1>

<p class="text-gray-500 mt-2">
    Selamat datang kembali Admin.
</p>

<div class="grid grid-cols-4 gap-6 mt-10">

    <div class="bg-white rounded-3xl shadow-lg p-6">
        <p>Total User</p>
        <h1 class="text-4xl font-bold mt-2">320</h1>
    </div>

    <div class="bg-white rounded-3xl shadow-lg p-6">
        <p>Campaign</p>
        <h1 class="text-4xl font-bold mt-2">24</h1>
    </div>

    <div class="bg-white rounded-3xl shadow-lg p-6">
        <p>Donasi</p>
        <h1 class="text-4xl font-bold mt-2">{{ $donationCount }}</h1>
    </div>

    <div class="bg-white rounded-3xl shadow-lg p-6">
        <p>Dana Masuk</p>
        <h1 class="text-3xl font-bold mt-2">
            Rp{{ number_format($totalDonations, 0, ',', '.') }}
        </h1>
    </div>

</div>

@endsection
