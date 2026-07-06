<x-layouts.app title="Jelajah Kampanye - Givespace" bodyClass="bg-gradient-to-br from-slate-100 via-sky-50 to-indigo-50 text-slate-900 min-h-screen">
    <main class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
        <section class="rounded-[2rem] bg-white p-8 shadow-2xl shadow-slate-300/30">
            <div class="flex flex-col gap-8 lg:flex-row lg:items-center lg:justify-between">
                <div class="max-w-3xl">
                    <p class="text-sm uppercase tracking-[0.24em] text-sky-600">Jelajah Kampanye</p>
                    <h1 class="mt-4 text-4xl font-semibold text-slate-950 sm:text-5xl">Temukan kampanye sosial yang ingin Anda dukung</h1>
                    <p class="mt-4 text-lg leading-8 text-slate-600">Dari pendidikan hingga kesehatan, pilih kampanye aktif dan kirim donasi secara cepat dan transparan.</p>
                </div>
                <a href="{{ route('donate') }}#donasi" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-4 text-sm font-semibold text-white transition hover:bg-slate-800">Donasi Sekarang</a>
            </div>

            <form action="{{ route('campaigns.explore') }}" method="GET" class="mt-10 grid gap-4 md:grid-cols-[1.4fr_0.9fr_0.7fr]">
                <div>
                    <label for="q" class="mb-2 block text-sm font-semibold text-slate-900">Cari Kampanye</label>
                    <input id="q" name="q" type="search" value="{{ request('q') }}" placeholder="Misalnya: pendidikan, kesehatan, beasiswa" class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200" />
                </div>
                <div>
                    <label for="sort" class="mb-2 block text-sm font-semibold text-slate-900">Urutkan</label>
                    <select id="sort" name="sort" class="w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200">
                        <option value="latest" {{ request('sort') === 'latest' ? 'selected' : '' }}>Terbaru</option>
                        <option value="popular" {{ request('sort') === 'popular' ? 'selected' : '' }}>Paling populer</option>
                        <option value="target" {{ request('sort') === 'target' ? 'selected' : '' }}>Target terbesar</option>
                        <option value="oldest" {{ request('sort') === 'oldest' ? 'selected' : '' }}>Terlama</option>
                    </select>
                </div>
                <div class="flex items-end">
                    <button type="submit" class="inline-flex w-full items-center justify-center rounded-full bg-slate-900 px-5 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Cari</button>
                </div>
            </form>
        </section>

        <section class="mt-10">
            <div class="flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">
                <div>
                    <p class="text-sm text-slate-600">Menampilkan {{ $campaigns->total() }} kampanye aktif.</p>
                    @if(request('q'))
                        <p class="mt-1 text-sm text-slate-500">Hasil pencarian untuk "{{ request('q') }}".</p>
                    @endif
                </div>
                <div class="text-sm text-slate-500">Urutkan: {{ ucfirst(request('sort', 'latest')) }}</div>
            </div>
            <div class="grid gap-6 xl:grid-cols-3">
                @forelse ($campaigns as $campaign)
                    @php
                        $progress = $campaign->target_amount > 0
                            ? min(100, (int) round(($campaign->donations_sum_amount / $campaign->target_amount) * 100))
                            : 0;
                    @endphp
                    <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm shadow-slate-200 transition hover:-translate-y-1 hover:shadow-slate-300/50">
                        <div class="flex items-start justify-between gap-4">
                            <div>
                                <h2 class="text-xl font-semibold text-slate-950">{{ $campaign->title }}</h2>
                                <p class="mt-3 text-sm leading-6 text-slate-600">{{ \Illuminate\Support\Str::limit($campaign->description, 120) }}</p>
                            </div>
                            <span class="rounded-full bg-sky-100 px-3 py-1 text-sm font-semibold text-sky-700">Aktif</span>
                        </div>

                        <div class="mt-6 space-y-4 text-sm text-slate-500">
                            <div class="flex items-center justify-between gap-3">
                                <span>Terkumpul</span>
                                <span>Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</span>
                            </div>
                            <div class="flex items-center justify-between gap-3">
                                <span>Target</span>
                                <span>Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}</span>
                            </div>
                        </div>

                        <div class="mt-6 rounded-full bg-slate-100 p-1">
                            <div class="h-3 rounded-full bg-gradient-to-r from-sky-500 to-indigo-500" style="width: {{ $progress }}%"></div>
                        </div>
                        <p class="mt-2 text-xs uppercase tracking-[0.24em] text-slate-500">{{ $progress }}% tercapai</p>

                        <a href="{{ route('campaigns.show', $campaign) }}" class="mt-6 inline-flex w-full items-center justify-center rounded-full bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Lihat Detail</a>
                    </article>
                @empty
                    <div class="rounded-[2rem] border border-slate-200 bg-white p-10 text-center text-slate-500">Belum ada kampanye aktif saat ini. Silakan kembali nanti.</div>
                @endforelse
            </div>

            <div class="mt-8">
                {{ $campaigns->links() }}
            </div>
        </section>
    </main>
</x-layouts.app>
