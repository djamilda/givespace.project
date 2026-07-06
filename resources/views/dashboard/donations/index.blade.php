<x-layouts.app title="Daftar Donasi - Givespace" bodyClass="bg-[#f8fafc] text-[#1c1b18] min-h-screen">
    <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
        <div class="flex flex-col gap-6 rounded-[2rem] bg-white p-8 shadow-xl shadow-slate-300/20 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="text-sm uppercase tracking-[0.24em] text-slate-600">Riwayat Donasi</p>
                <h1 class="mt-3 text-3xl font-semibold text-slate-900">Semua donasi</h1>
                <p class="mt-2 text-sm text-slate-600">Lihat detail donasi yang masuk dan kampanye terkait.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center rounded-full border border-slate-200 bg-slate-50 px-5 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-100">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" class="inline">
                    @csrf
                    <button type="submit" class="inline-flex items-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white hover:bg-slate-700">Logout</button>
                </form>
            </div>
        </div>

        <div class="mt-8 overflow-hidden rounded-[2rem] bg-white shadow-xl shadow-slate-300/20">
            <div class="grid grid-cols-[1.4fr_1.4fr_1fr_1fr_1fr] gap-4 border-b border-slate-200 bg-slate-50 px-6 py-4 text-xs uppercase tracking-[0.2em] text-slate-600">
                <span>Donatur</span>
                <span>Kampanye</span>
                <span>Email</span>
                <span>Jumlah</span>
                <span>Tanggal</span>
            </div>
            @forelse ($donations as $donation)
                <div class="grid grid-cols-[1.4fr_1.4fr_1fr_1fr_1fr] gap-4 px-6 py-4 text-sm text-slate-700 hover:bg-slate-50 sm:px-8">
                    <span class="font-semibold text-slate-900">{{ $donation->donor_name }}</span>
                    <span class="text-slate-600">{{ $donation->campaign->title }}</span>
                    <span class="text-slate-600">{{ $donation->donor_email }}</span>
                    <span class="font-semibold text-slate-900">Rp {{ number_format($donation->amount, 0, ',', '.') }}</span>
                    <span class="text-slate-600">{{ $donation->created_at->format('d M Y') }}</span>
                </div>
            @empty
                <div class="px-6 py-10 text-center text-sm text-slate-500">Belum ada donasi yang diterima.</div>
            @endforelse
        </div>

        <div class="mt-6">{{ $donations->links() }}</div>
    </div>
</x-layouts.app>
