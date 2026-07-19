@extends('layouts.app')

@section('content')

<h1 class="text-4xl font-bold text-[#4A3728]">
    User
</h1>

<p class="text-gray-500 mt-2">
    Data seluruh pengguna.
</p>

<div class="flex justify-between items-center mt-8">
    <p class="text-gray-500">Data seluruh pengguna.</p>
    <a href="{{ route('user.create') }}" class="rounded-xl bg-[#4A3728] px-5 py-3 text-white font-semibold">Tambah User</a>
</div>

@if (session('success'))
    <div class="mt-4 rounded-xl bg-green-100 p-4 text-green-700">
        {{ session('success') }}
    </div>
@endif

<div class="bg-white rounded-3xl shadow-lg mt-4 p-8">

<table class="w-full">

<thead>

<tr class="border-b">

<th class="text-left py-4">Nama</th>
<th>Email</th>
<th>Status</th>

</tr>

</thead>

<tbody>

@forelse ($users as $user)
<tr class="border-b">

<td class="py-4">{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>
    @if ($user->email_verified_at)
        <span class="text-green-600 font-semibold">Aktif</span>
    @else
        <span class="text-yellow-600 font-semibold">Belum Verifikasi</span>
    @endif
</td>

</tr>
@empty
<tr>
    <td colspan="3" class="py-4 text-center text-gray-500">Belum ada user.</td>
</tr>
@endforelse

</tbody>

</table>

</div>

@endsection