@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-[#4A3728]">
    Campaign
</h1>

<p class="text-gray-500 mt-2">
    Daftar seluruh campaign.
</p>

<div class="bg-white rounded-3xl shadow-lg mt-8 p-8">

<table class="w-full">

<tr class="border-b">

<th class="text-left py-4">Nama</th>

<th>Target</th>

<th>Status</th>

</tr>

<tr>

<td class="py-4">Peduli Anak Yatim</td>

<td>Rp25.000.000</td>

<td>Aktif</td>

</tr>

</table>

</div>

@endsection