@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-[#4A3728]">
    Laporan
</h1>

<p class="text-gray-500 mt-2">
    Ringkasan laporan Givespace.
</p>

<div class="grid grid-cols-2 gap-6 mt-8">

<div class="bg-white rounded-3xl shadow-lg p-8">

<h2 class="text-xl font-bold">
Total Donasi
</h2>

<p class="text-4xl font-bold text-[#4A3728] mt-4">
Rp125.000.000
</p>

</div>

<div class="bg-white rounded-3xl shadow-lg p-8">

<h2 class="text-xl font-bold">
Total Campaign
</h2>

<p class="text-4xl font-bold text-[#4A3728] mt-4">
24
</p>

</div>

</div>

@endsection