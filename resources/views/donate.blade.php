<x-layouts.app title="Givespace - Donasi untuk Perubahan" bodyClass="bg-gradient-to-br from-slate-100 via-sky-50 to-indigo-50 text-[#0f172a] min-h-screen">
    <div class="min-h-screen">
        <header class="border-b border-white/80 bg-white/95 backdrop-blur-md sticky top-0 z-30">
            <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-6 py-4 lg:px-8">
                <div>
                    <a href="{{ route('donate') }}" class="inline-flex items-center gap-3 text-lg font-bold text-slate-900">
                        <span class="inline-flex h-11 w-11 items-center justify-center rounded-2xl bg-slate-900 text-white">G</span>
                        <span>Givespace</span>
                    </a>
                    <p class="text-sm text-slate-500">Platform donasi modern untuk kampanye sosial dan bisnis.</p>
                </div>
                <nav class="flex flex-wrap items-center gap-3 text-sm text-slate-700">
                    <a href="{{ route('campaigns.explore') }}" class="transition hover:text-slate-900">Jelajah Kampanye</a>
                    <a href="#fitur" class="transition hover:text-slate-900">Fitur</a>
                    <a href="#donasi" class="transition hover:text-slate-900">Donasi</a>
                    <a href="{{ route('login') }}" class="rounded-full border border-slate-900 bg-slate-900 px-4 py-2 text-white transition hover:bg-slate-800">Masuk Admin</a>
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
            <section class="grid gap-12 lg:grid-cols-[1.4fr_1fr] lg:items-center">
                <div class="max-w-2xl">
                    <span class="inline-flex rounded-full bg-sky-100 px-4 py-2 text-sm font-semibold text-sky-700">Donasi Sekarang</span>
                    <h1 class="mt-6 text-4xl font-semibold tracking-tight text-slate-950 sm:text-5xl">Berbagi bantuan dengan cepat, transparan, dan profesional.</h1>
                    <p class="mt-6 text-lg leading-8 text-slate-600">Givespace memudahkan donatur dan pengelola kampanye untuk mengumpulkan dana, melaporkan progress, dan membangun kepercayaan secara digital.</p>

                    <div class="mt-10 grid gap-4 sm:grid-cols-3">
                        <div class="rounded-3xl bg-white p-6 shadow-sm shadow-slate-200">
                            <p class="text-sm text-slate-500">Kampanye aktif</p>
                            <p class="mt-4 text-3xl font-semibold text-slate-900">{{ count($campaigns) }}</p>
                        </div>
                        <div class="rounded-3xl bg-white p-6 shadow-sm shadow-slate-200">
                            <p class="text-sm text-slate-500">Donasi terkirim</p>
                            <p class="mt-4 text-3xl font-semibold text-slate-900">{{ $donationCount }}</p>
                        </div>
                        <div class="rounded-3xl bg-white p-6 shadow-sm shadow-slate-200">
                            <p class="text-sm text-slate-500">Dana terhimpun</p>
                            <p class="mt-4 text-3xl font-semibold text-slate-900">Rp {{ number_format($totalDonations, 0, ',', '.') }}</p>
                        </div>
                    </div>

                    <div class="mt-10 flex flex-col gap-4 sm:flex-row">
                        <a href="#campaigns" class="inline-flex items-center justify-center rounded-full bg-slate-900 px-6 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-900/10 transition hover:bg-slate-800">Lihat Kampanye</a>
                        <a href="#donasi" class="inline-flex items-center justify-center rounded-full border border-slate-200 bg-white px-6 py-3 text-sm font-semibold text-slate-900 transition hover:bg-slate-100">Donasi Sekarang</a>
                    </div>
                </div>

                <div class="grid gap-4 rounded-[2rem] bg-gradient-to-b from-slate-950 to-slate-900 p-1 shadow-2xl shadow-slate-400/20">
                    <div class="rounded-[2rem] bg-white p-8">
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Laporan singkat</p>
                        <h2 class="mt-4 text-3xl font-semibold text-slate-950">Bantu donasi dengan visualisasi dan update nyata.</h2>
                        <p class="mt-4 text-sm leading-7 text-slate-600">Semua donasi tercatat, target ditampilkan, dan kemajuan kampanye mudah diikuti oleh semua pihak.</p>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            <article class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                                <p class="text-sm text-slate-500">Total target</p>
                                <p class="mt-3 text-2xl font-semibold text-slate-950">Rp {{ number_format($totalTarget, 0, ',', '.') }}</p>
                            </article>
                            <article class="rounded-3xl border border-slate-200 bg-slate-50 p-6">
                                <p class="text-sm text-slate-500">Donasi terbaru</p>
                                <p class="mt-3 text-2xl font-semibold text-slate-950">@if($recentDonations->isNotEmpty()) {{ $recentDonations->first()->donor_name }} @else - @endif</p>
                            </article>
                        </div>
                    </div>
                </div>
            </section>

            <section id="fitur" class="mt-20 space-y-8">
                <div class="flex flex-col gap-3 lg:flex-row lg:items-end lg:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-sky-600">Fitur Givespace</p>
                        <h2 class="mt-3 text-3xl font-semibold text-slate-950">Semua kebutuhan crowdfunding dalam satu platform</h2>
                    </div>
                </div>

                <div class="grid gap-6 lg:grid-cols-3">
                    <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm shadow-slate-200/50">
                        <p class="text-sm font-semibold text-slate-900">Kampanye Publik</p>
                        <p class="mt-4 text-sm leading-7 text-slate-600">Tampilkan setiap kampanye dengan halaman detail yang mudah diakses oleh donatur.</p>
                    </article>
                    <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm shadow-slate-200/50">
                        <p class="text-sm font-semibold text-slate-900">Form Donasi Modern</p>
                        <p class="mt-4 text-sm leading-7 text-slate-600">Donatur bisa memilih kampanye, memasukkan nominal, dan mengirim donasi dalam beberapa langkah.</p>
                    </article>
                    <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm shadow-slate-200/50">
                        <p class="text-sm font-semibold text-slate-900">Dashboard Admin</p>
                        <p class="mt-4 text-sm leading-7 text-slate-600">Admin dapat melihat ringkasan campaign dan donasi secara instan dengan tampilan profesional.</p>
                    </article>
                </div>
            </section>

            <section id="campaigns" class="mt-20">
                <div class="flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Kampanye</p>
                        <h2 class="mt-3 text-3xl font-semibold text-slate-950">Bergabung dan dukung misi sosial</h2>
                    </div>
                    <p class="max-w-xl text-sm text-slate-600">Pilih kampanye yang sesuai dengan nilai Anda, lalu kirim donasi cepat lewat formulir di bawah.</p>
                </div>

                <div class="mt-8 grid gap-6 xl:grid-cols-3">
                    @if ($campaigns->isEmpty())
                        <div class="rounded-[2rem] border border-slate-200 bg-white p-10 text-center text-slate-500">Belum ada kampanye aktif.</div>
                    @endif

                    @foreach ($campaigns as $campaign)
                        <article class="rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm shadow-slate-200/60 transition hover:-translate-y-1 hover:shadow-slate-300/50">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-xl font-semibold text-slate-950">{{ $campaign->title }}</h3>
                                    <p class="mt-2 text-sm text-slate-500">{{ \Illuminate\Support\Str::limit($campaign->description, 100) }}</p>
                                </div>
                                <span class="rounded-full bg-sky-100 px-3 py-1 text-sm font-semibold text-sky-700">Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}</span>
                            </div>
                            <div class="mt-6 flex items-center justify-between gap-3 text-sm text-slate-500">
                                <span class="inline-flex h-2.5 w-2.5 rounded-full bg-sky-700"></span>
                                <span>Target transparan</span>
                            </div>
                            <a href="{{ route('campaigns.show', $campaign) }}" class="mt-6 inline-flex w-full items-center justify-center rounded-full bg-slate-900 px-4 py-3 text-sm font-semibold text-white transition hover:bg-slate-800">Lihat Detail</a>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="donasi" class="mt-20 grid gap-8 lg:grid-cols-[1.4fr_0.9fr]">
                <div class="rounded-[2rem] bg-white p-8 shadow-xl shadow-slate-200/60">
                    <div class="flex flex-col gap-4">
                        <div>
                            <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Form Donasi</p>
                            <h2 class="mt-3 text-3xl font-semibold text-slate-950">Donasi langsung dalam beberapa klik</h2>
                            <p class="mt-3 text-sm leading-7 text-slate-600">Pilih kampanye yang ingin Anda dukung, masukkan nominal, dan kirimkan bantuan. Semua data tercatat untuk admin.</p>
                        </div>

                        @if (session('success'))
                            <div class="rounded-3xl border border-emerald-200 bg-emerald-50 p-4 text-sm text-emerald-700">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="rounded-3xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                                <ul class="list-disc space-y-1 pl-5">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('donate.submit') }}" method="POST" class="space-y-5">
                            @csrf
                            <div>
                                <label for="campaign" class="mb-2 block text-sm font-semibold text-slate-900">Pilih Kampanye</label>
                                <select id="campaign" name="campaign" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200">
                                    @foreach ($campaigns as $campaign)
                                        <option value="{{ $campaign->id }}" {{ old('campaign') == $campaign->id ? 'selected' : '' }}>{{ $campaign->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div>
                                <label for="amount" class="mb-2 block text-sm font-semibold text-slate-900">Jumlah Donasi (Rp)</label>
                                <input id="amount" name="amount" type="number" min="10000" placeholder="100000" value="{{ old('amount', '100000') }}" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200" />
                                <p class="mt-2 text-xs text-slate-500">Minimal Rp 10.000. Masukkan angka tanpa tanda pemisah.</p>
                            </div>

                            <div class="grid gap-4 sm:grid-cols-2">
                                <div>
                                    <label for="name" class="mb-2 block text-sm font-semibold text-slate-900">Nama Donatur</label>
                                    <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Nama lengkap" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200" />
                                </div>
                                <div>
                                    <label for="email" class="mb-2 block text-sm font-semibold text-slate-900">Email</label>
                                    <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="email@domain.com" class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200" />
                                </div>
                            </div>

                            <div>
                                <label for="message" class="mb-2 block text-sm font-semibold text-slate-900">Pesan untuk penerima (opsional)</label>
                                <textarea id="message" name="message" rows="4" placeholder="Tulis pesan singkat..." class="w-full rounded-3xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 outline-none focus:border-slate-900 focus:ring-2 focus:ring-sky-200">{{ old('message') }}</textarea>
                            </div>

                            <button type="submit" class="w-full rounded-full bg-slate-900 px-6 py-4 text-sm font-semibold text-white shadow-lg shadow-slate-900/10 transition hover:bg-slate-800">Kirim Donasi</button>
                        </form>
                    </div>
                </div>

                <aside class="space-y-6 rounded-[2rem] bg-slate-950 p-8 text-slate-50 shadow-xl shadow-slate-900/20">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-sky-300">Mengapa Givespace?</p>
                        <h2 class="mt-4 text-2xl font-semibold">Platform crowdfunding profesional</h2>
                    </div>

                    <div class="space-y-4 rounded-[1.75rem] border border-slate-800 bg-slate-900/95 p-6">
                        <div class="flex items-center gap-3">
                            <div class="rounded-3xl bg-sky-500/15 p-3 text-sky-300">✅</div>
                            <p class="text-sm text-slate-300">Bayar donasi langsung dan aman.</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="rounded-3xl bg-sky-500/15 p-3 text-sky-300">📊</div>
                            <p class="text-sm text-slate-300">Laporan donasi dan target transparan.</p>
                        </div>
                        <div class="flex items-center gap-3">
                            <div class="rounded-3xl bg-sky-500/15 p-3 text-sky-300">🧑‍🤝‍🧑</div>
                            <p class="text-sm text-slate-300">Donatur dapat mendukung banyak kampanye.</p>
                        </div>
                    </div>

                    <div class="rounded-[1.75rem] border border-slate-800 bg-slate-900/95 p-6">
                        <p class="text-xs uppercase tracking-[0.3em] text-slate-500">Kepercayaan</p>
                        <p class="mt-3 text-sm leading-7 text-slate-300">Semua aktivitas tercatat dan dapat diakses oleh admin untuk audit internal.</p>
                    </div>
                </aside>
            </section>

            <section class="mt-20 rounded-[2rem] border border-slate-200 bg-white p-8 shadow-sm shadow-slate-200/70">
                <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-slate-500">Riwayat Donasi</p>
                        <h2 class="mt-3 text-3xl font-semibold text-slate-950">Donasi terbaru</h2>
                    </div>
                    <p class="text-sm text-slate-600">Lihat aktivitas terakhir dari donatur yang telah membantu.</p>
                </div>

                <div class="mt-8 overflow-hidden rounded-[1.75rem] border border-slate-200 bg-slate-50">
                    <div class="grid grid-cols-[2fr_2fr_1fr_2fr] gap-4 bg-slate-100 px-6 py-4 text-xs uppercase tracking-[0.2em] text-slate-500">
                        <span>Donatur</span>
                        <span>Kampanye</span>
                        <span>Jumlah</span>
                        <span>Tanggal</span>
                    </div>

                    @if ($recentDonations->isEmpty())
                        <div class="px-6 py-10 text-center text-sm text-slate-500">Belum ada donasi terkini.</div>
                    @else
                        <div class="divide-y divide-slate-200">
                            @foreach ($recentDonations as $donation)
                                <div class="grid grid-cols-[2fr_2fr_1fr_2fr] gap-4 px-6 py-4 text-sm text-slate-700">
                                    <span>{{ $donation->donor_name }}</span>
                                    <span>{{ $donation->campaign->title }}</span>
                                    <span>Rp {{ number_format($donation->amount, 0, ',', '.') }}</span>
                                    <span>{{ $donation->created_at->format('d M Y') }}</span>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </section>
        </main>
    </div>
</x-layouts.app>
