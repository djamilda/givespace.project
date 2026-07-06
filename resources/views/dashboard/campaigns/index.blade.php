<x-layouts.app title="Kelola Kampanye - Givespace" bodyClass="bg-[#f8fafc] text-[#1c1b18] min-h-screen">
    <div class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
        <div class="flex flex-col gap-6 rounded-[2rem] bg-white p-8 shadow-xl shadow-slate-300/20 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <p class="text-sm uppercase tracking-[0.24em] text-slate-600">Kelola Kampanye</p>
                <h1 class="mt-3 text-3xl font-semibold text-slate-900">Panel Kampanye</h1>
                <p class="mt-2 text-sm text-slate-600">Buat, edit, dan kelola kampanye donasi yang tampil di situs.</p>
            </div>
            <div class="flex flex-wrap gap-3">
                <a href="{{ route('dashboard') }}" class="inline-flex items-center rounded-full border border-slate-200 bg-slate-50 px-5 py-3 text-sm font-semibold text-slate-900 hover:bg-slate-100">Dashboard</a>
                <a href="{{ route('campaigns.create') }}" class="inline-flex items-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white hover:bg-slate-700">Buat Kampanye Baru</a>
            </div>
        </div>

        @if (session('success'))
            <div class="mt-6 rounded-3xl border border-green-200 bg-green-50 p-4 text-sm text-green-700">
                {{ session('success') }}
            </div>
        @endif

        <div class="mt-8 overflow-hidden rounded-[2rem] bg-white shadow-xl shadow-slate-300/20">
            <div class="grid gap-4 border-b border-slate-200 bg-slate-50 px-6 py-4 text-xs uppercase tracking-[0.2em] text-slate-600 sm:grid-cols-[2fr_2fr_1fr_1fr_1fr_1fr]">
                <span>Judul</span>
                <span>Deskripsi</span>
                <span>Target</span>
                <span>Terkumpul</span>
                <span>Status</span>
                <span>Aksi</span>
            </div>
            <div class="divide-y divide-slate-200">
                @forelse ($campaigns as $campaign)
                    <div class="grid gap-4 px-6 py-5 text-sm text-slate-700 sm:grid-cols-[2fr_2fr_1fr_1fr_1fr_1fr] lg:px-8">
                        <span class="font-semibold text-slate-900">{{ $campaign->title }}</span>
                        <span class="truncate text-slate-600">{{ $campaign->description }}</span>
                        <span>Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}</span>
                        <span>Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</span>
                        <span class="font-medium text-slate-900">{{ $campaign->is_active ? 'Aktif' : 'Tidak aktif' }}</span>
                        <span class="flex flex-wrap items-center gap-2">
                            <a href="{{ route('campaigns.edit', $campaign) }}" class="rounded-full border border-slate-200 bg-slate-50 px-3 py-1 text-xs font-semibold text-slate-900 hover:bg-slate-100">Edit</a>
                            <form action="{{ route('campaigns.destroy', $campaign) }}" method="POST" onsubmit="return confirm('Hapus kampanye ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-full bg-red-50 px-3 py-1 text-xs font-semibold text-red-700 hover:bg-red-100">Hapus</button>
                            </form>
                        </span>
                    </div>
                @empty
                    <div class="px-6 py-10 text-center text-sm text-slate-500">Belum ada kampanye. Tambahkan kampanye baru untuk mulai mengumpulkan donasi.</div>
                @endforelse
            </div>
        </div>

        <div class="mt-6">{{ $campaigns->links() }}</div>
    </div>
</x-layouts.app>
