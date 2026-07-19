@extends('layouts.app')

@section('content')
<div class="max-w-2xl">
    <h1 class="text-4xl font-bold text-[#4A3728]">Tambah User</h1>
    <p class="text-gray-500 mt-2">Buat akun pengguna baru dari halaman ini.</p>

    <div class="bg-white rounded-3xl shadow-lg mt-8 p-8">
        <form action="{{ route('user.store') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-700">Nama</label>
                <input type="text" name="name" required class="w-full mt-2 rounded-xl border border-gray-300 px-4 py-3" />
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" name="email" required class="w-full mt-2 rounded-xl border border-gray-300 px-4 py-3" />
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Password</label>
                <input type="password" name="password" required class="w-full mt-2 rounded-xl border border-gray-300 px-4 py-3" />
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700">Konfirmasi Password</label>
                <input type="password" name="password_confirmation" required class="w-full mt-2 rounded-xl border border-gray-300 px-4 py-3" />
            </div>

            <div class="flex gap-3">
                <button type="submit" class="rounded-xl bg-[#4A3728] px-5 py-3 text-white font-semibold">Simpan User</button>
                <a href="{{ route('user') }}" class="rounded-xl border border-gray-300 px-5 py-3">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection
