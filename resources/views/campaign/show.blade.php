<x-layouts.app title="{{ $campaign->title }} - Givespace" bodyClass="bg-gradient-to-br from-slate-100 via-sky-50 to-indigo-50 text-slate-900 min-h-screen">
    <main class="mx-auto max-w-6xl px-6 py-10 lg:px-8">
        <div class="rounded-[2rem] bg-white p-8 shadow-2xl shadow-slate-300/30">
            <div class="flex flex-col gap-6 lg:flex-row lg:items-start lg:justify-between">
                <div class="max-w-3xl">
                    <p class="text-sm uppercase tracking-[0.24em] text-slate-600">Detail Kampanye</p>
                    <h1 class="mt-4 text-4xl font-semibold text-slate-900">{{ $campaign->title }}</h1>
                    <p class="mt-6 text-base leading-8 text-slate-600">{{ $campaign->description }}</p>
                </div>
                <div class="space-y-4 rounded-[2rem] border border-slate-200 bg-slate-50 p-6 shadow-sm shadow-slate-200/40">
                    <div>
                        <p class="text-sm text-[#475569]">Target dana</p>
                        <p class="mt-2 text-2xl font-semibold text-[#0f172a]">Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-[#475569]">Terkumpul</p>
                        <p class="mt-2 text-2xl font-semibold text-[#0f172a]">Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-[#475569]">Jumlah donasi</p>
                        <p class="mt-2 text-2xl font-semibold text-[#0f172a]">{{ $campaign->donations_count }}</p>
                    </div>
                    <div class="rounded-3xl bg-white p-4 text-sm text-slate-600 shadow-sm shadow-slate-200/40">
                        <p class="font-semibold text-slate-900">Status</p>
                        <p class="mt-2">{{ $campaign->is_active ? 'Aktif' : 'Tidak aktif' }}</p>
                    </div>
                </div>

            <div class="mt-10 grid gap-6 lg:grid-cols-[1.3fr_0.7fr]">
                <div class="space-y-6 rounded-[2rem] border border-[#e2e8f0] bg-[#f8fafc] p-6">
                    <h2 class="text-2xl font-semibold text-[#0f172a]">Tentang Kampanye</h2>
                    <p class="text-sm leading-7 text-[#475569]">Setiap donasi akan masuk ke kampanye ini. Pastikan jumlah dan pesan Anda sesuai dengan dukungan yang ingin diberikan.</p>
                </div>
                <div class="rounded-[2rem] border border-[#e2e8f0] bg-white p-6">
                    <p class="text-sm uppercase tracking-[0.24em] text-[#334155]">Aksi</p>
                    <a href="{{ route('donate') }}#donasi" class="mt-4 inline-flex w-full items-center justify-center rounded-3xl bg-[#0f172a] px-5 py-4 text-sm font-semibold text-white hover:bg-[#020817]">Donasi untuk Kampanye Ini</a>
                    <a href="{{ route('donate') }}" class="mt-4 inline-flex w-full items-center justify-center rounded-3xl border border-[#cbd5e1] px-5 py-4 text-sm font-semibold text-[#0f172a] hover:bg-[#f8fafc]">Kembali ke Halaman Utama</a>
                </div>
            </div>
        </div>
    </main>
</x-layouts.app>
