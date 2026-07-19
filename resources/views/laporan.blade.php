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
Rp{{ number_format($totalDonations, 0, ',', '.') }}
</p>

</div>

<div class="bg-white rounded-3xl shadow-lg p-8">

<h2 class="text-xl font-bold">
Jumlah Transaksi
</h2>

<p class="text-4xl font-bold text-[#4A3728] mt-4">
{{ $donationCount }}
</p>

</div>

</div>

<div class="mt-8 bg-white rounded-3xl shadow-lg overflow-hidden">
    <div class="px-6 py-4 border-b">
        <h2 class="text-xl font-bold">Daftar Donasi Terbaru</h2>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full text-sm">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left">Nama</th>
                    <th class="px-6 py-3 text-left">Email</th>
                    <th class="px-6 py-3 text-left">Nominal</th>
                    <th class="px-6 py-3 text-left">Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($donations as $donation)
                    <tr class="border-t">
                        <td class="px-6 py-3">{{ $donation->donor_name }}</td>
                        <td class="px-6 py-3">{{ $donation->email }}</td>
                        <td class="px-6 py-3">Rp{{ number_format($donation->amount, 0, ',', '.') }}</td>
                        <td class="px-6 py-3">{{ $donation->created_at->format('d M Y H:i') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="px-6 py-6 text-center text-gray-500">Belum ada donasi yang tersimpan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection