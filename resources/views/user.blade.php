@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-[#4A3728]">
    User
</h1>

<p class="text-gray-500 mt-2">
    Data seluruh pengguna.
</p>

<div class="bg-white rounded-3xl shadow-lg mt-8 p-8">

<table class="w-full">

<thead>

<tr class="border-b">

<th class="text-left py-4">Nama</th>
<th>Email</th>
<th>Status</th>

</tr>

</thead>

<tbody>

<tr class="border-b">

<td class="py-4">Atta</td>
<td>atta@email.com</td>
<td>Aktif</td>

</tr>

<tr class="border-b">

<td class="py-4">Budi</td>
<td>budi@email.com</td>
<td>Aktif</td>

</tr>

<tr>

<td class="py-4">Siti</td>
<td>siti@email.com</td>
<td>Aktif</td>

</tr>

</tbody>

</table>

</div>

@endsection