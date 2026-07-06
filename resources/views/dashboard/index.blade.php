<x-layouts.app title="Dashboard - Givespace" bodyClass="bg-[#090b17] text-slate-100 min-h-screen">
    <div class="min-h-screen bg-[#090b17] text-slate-100">
        <main class="grid min-h-screen grid-cols-1 xl:grid-cols-[280px_1fr]">
            <aside class="sticky top-0 h-screen border-r border-slate-800 bg-slate-950/95 px-6 py-8 shadow-inner shadow-black/20">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-purple-500 text-xl font-bold text-white shadow-lg shadow-purple-500/30">G</div>
                        <div>
                            <p class="text-base font-semibold text-white">GiveSpace</p>
                            <p class="text-xs uppercase tracking-[0.32em] text-slate-500">Dashboard</p>
                        </div>
                    </div>
                    <div class="rounded-3xl bg-slate-900 p-3 text-slate-400">💜</div>
                </div>

                <nav class="mt-10 space-y-2 text-sm text-slate-300">
                    <a href="{{ route('dashboard') }}" class="flex items-center gap-3 rounded-3xl bg-slate-800 px-4 py-4 text-white shadow-[0_15px_50px_-35px_rgba(15,23,42,0.8)] transition hover:bg-slate-700">
                        <span>🏠</span>
                        <span>Dashboard</span>
                    </a>
                    <a href="{{ route('campaigns.index') }}" class="flex items-center gap-3 rounded-3xl px-4 py-4 transition hover:bg-slate-800">
                        <span>📣</span>
                        <span>Kampanye</span>
                    </a>
                    <a href="{{ route('dashboard.donations.index') }}" class="flex items-center gap-3 rounded-3xl px-4 py-4 transition hover:bg-slate-800">
                        <span>💰</span>
                        <span>Donasi</span>
                    </a>
                    <a href="{{ route('donate') }}" class="flex items-center gap-3 rounded-3xl px-4 py-4 transition hover:bg-slate-800">
                        <span>🌐</span>
                        <span>Halaman Publik</span>
                    </a>
                </nav>

                <div class="mt-12 rounded-[2rem] border border-slate-800 bg-slate-900/80 p-5">
                    <p class="text-xs uppercase tracking-[0.32em] text-slate-500">Akun</p>
                    <div class="mt-4 flex items-center gap-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-3xl bg-slate-700 text-lg font-semibold text-white">H</div>
                        <div>
                            <p class="font-semibold text-white">Hasby</p>
                            <p class="text-sm text-slate-500">hasby@gmail.com</p>
                        </div>
                    </div>
                </div>
            </aside>

            <section class="px-6 py-8 xl:px-10">
                <div class="flex flex-col gap-6 xl:flex-row xl:items-center xl:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Selamat Datang, Donatur 👋</p>
                        <h1 class="mt-3 text-3xl font-semibold text-white">Berikut ringkasan aktivitas GiveSpace hari ini</h1>
                        <p class="mt-3 max-w-2xl text-sm leading-7 text-slate-400">Dashboard menampilkan kumpulan data kampanye dan donasi terbaru agar Anda cepat melihat performa.</p>
                    </div>
                    <a href="{{ route('campaigns.create') }}" class="inline-flex items-center justify-center rounded-full bg-purple-600 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-purple-500/20 transition hover:bg-purple-500">Buat Kampanye</a>
                </div>

                <div class="mt-8 grid gap-6 sm:grid-cols-2 xl:grid-cols-4">
                    <div class="rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-black/20">
                        <div class="flex items-center justify-between gap-4">
                            <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-slate-800 text-xl">💰</span>
                            <span class="rounded-3xl bg-slate-800 px-3 py-1 text-xs uppercase tracking-[0.28em] text-slate-400">Total Donasi</span>
                        </div>
                        <p class="mt-8 text-3xl font-semibold text-white">Rp {{ number_format($totalDonations, 0, ',', '.') }}</p>
                        <p class="mt-3 text-sm text-slate-500">Rp total yang terkumpul.</p>
                    </div>

                    <div class="rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-black/20">
                        <div class="flex items-center justify-between gap-4">
                            <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-slate-800 text-xl">📈</span>
                            <span class="rounded-3xl bg-slate-800 px-3 py-1 text-xs uppercase tracking-[0.28em] text-slate-400">Kampanye Aktif</span>
                        </div>
                        <p class="mt-8 text-3xl font-semibold text-white">{{ $activeCampaigns }}</p>
                        <p class="mt-3 text-sm text-slate-500">Kampanye aktif saat ini.</p>
                    </div>

                    <div class="rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-black/20">
                        <div class="flex items-center justify-between gap-4">
                            <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-slate-800 text-xl">👥</span>
                            <span class="rounded-3xl bg-slate-800 px-3 py-1 text-xs uppercase tracking-[0.28em] text-slate-400">Total Donatur</span>
                        </div>
                        <p class="mt-8 text-3xl font-semibold text-white">{{ $totalDonors }}</p>
                        <p class="mt-3 text-sm text-slate-500">Jumlah donatur unik.</p>
                    </div>

                    <div class="rounded-[2rem] border border-slate-800 bg-slate-900/95 p-6 shadow-xl shadow-black/20">
                        <div class="flex items-center justify-between gap-4">
                            <span class="inline-flex h-12 w-12 items-center justify-center rounded-3xl bg-slate-800 text-xl">🎯</span>
                            <span class="rounded-3xl bg-slate-800 px-3 py-1 text-xs uppercase tracking-[0.28em] text-slate-400">Target Tercapai</span>
                        </div>
                        <p class="mt-8 text-3xl font-semibold text-white">{{ $targetReached }}%</p>
                        <p class="mt-3 text-sm text-slate-500">Rata-rata pencapaian target kampanye.</p>
                    </div>
                </div>

                <div class="mt-10 grid gap-6 xl:grid-cols-[1.55fr_1fr]">
                    <div class="rounded-[2rem] border border-slate-800 bg-slate-950/95 p-8 shadow-xl shadow-black/20">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Kampanye Terbaru</p>
                                <h2 class="mt-3 text-2xl font-semibold text-white">Kampanye terbaru</h2>
                            </div>
                            <a href="{{ route('campaigns.index') }}" class="text-sm font-semibold text-violet-400 hover:text-white">Lihat Semua →</a>
                        </div>

                        <div class="mt-8 space-y-4">
                            @forelse ($campaigns as $campaign)
                                @php
                                    $progress = $campaign->target_amount > 0
                                        ? min(100, (int) round(($campaign->donations_sum_amount / $campaign->target_amount) * 100))
                                        : 0;
                                @endphp
                                <div class="rounded-[1.75rem] border border-slate-800 bg-slate-900 p-5">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <p class="font-semibold text-white">{{ $campaign->title }}</p>
                                            <p class="mt-1 text-sm text-slate-500">oleh Admin • {{ $campaign->is_active ? 'Aktif' : 'Nonaktif' }}</p>
                                        </div>
                                        <span class="rounded-full bg-emerald-500/10 px-3 py-1 text-xs font-semibold text-emerald-200">{{ $campaign->is_active ? 'Aktif' : 'Tidak aktif' }}</span>
                                    </div>
                                    <div class="mt-5 flex items-center justify-between gap-4 text-sm text-slate-400">
                                        <p>Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }} terkumpul</p>
                                        <p>{{ $progress }}%</p>
                                    </div>
                                    <div class="mt-3 h-2 overflow-hidden rounded-full bg-slate-800">
                                        <div class="h-full rounded-full bg-gradient-to-r from-purple-500 to-fuchsia-500" style="width: {{ $progress }}%"></div>
                                    </div>
                                </div>
                            @empty
                                <div class="rounded-[1.75rem] border border-slate-800 bg-slate-900 p-6 text-sm text-slate-500">Belum ada kampanye. Tambahkan kampanye baru untuk mulai mengumpulkan donasi.</div>
                            @endforelse
                        </div>
                    </div>

                    <div class="rounded-[2rem] border border-slate-800 bg-slate-950/95 p-8 shadow-xl shadow-black/20">
                        <div>
                            <p class="text-sm uppercase tracking-[0.24em] text-slate-400">Aktivitas Terbaru</p>
                            <h2 class="mt-3 text-2xl font-semibold text-white">Riwayat donasi</h2>
                        </div>

                        <div class="mt-8 space-y-4">
                            @forelse ($recentDonations as $donation)
                                <div class="rounded-[1.75rem] border border-slate-800 bg-slate-900 p-5">
                                    <div class="flex items-center justify-between gap-4">
                                        <div>
                                            <p class="font-semibold text-white">{{ $donation->donor_name }} berdonasi ke <span class="text-violet-300">{{ $donation->campaign->title }}</span></p>
                                            <p class="mt-1 text-sm text-slate-500">{{ $donation->created_at->diffForHumans() }}</p>
                                        </div>
                                        <p class="text-sm font-semibold text-slate-200">Rp {{ number_format($donation->amount, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                            @empty
                                <div class="rounded-[1.75rem] border border-slate-800 bg-slate-900 p-6 text-sm text-slate-500">Belum ada aktivitas donasi. Ajak donatur untuk mendukung kampanye Anda.</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</x-layouts.app>
