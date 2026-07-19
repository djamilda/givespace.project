@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-[#4A3728]">
    Campaign
</h1>

<p class="text-gray-500 mt-2">
    Daftar seluruh campaign.
</p>

<div class="bg-white rounded-3xl shadow-lg mt-8 p-8">
    <table class="w-full text-left border-collapse">
        <thead>
            <tr class="border-b">
                <th class="py-4">Nama</th>
                <th class="py-4">Target</th>
                <th class="py-4">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($campaigns as $campaign)
                <tr class="border-b last:border-b-0">
                    <td class="py-4">{{ $campaign->title }}</td>
                    <td class="py-4">Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}</td>
                    <td class="py-4">{{ $campaign->is_active ? 'Aktif' : 'Tidak Aktif' }}</td>
                </tr>
            @empty
                <tr>
                    <td class="py-8 text-center text-gray-500" colspan="3">Belum ada campaign.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection