<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Web Donasi - Givespace</title>

        @fonts

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */ @layer properties{@supports (((-webkit-hyphens:none)) and (not (margin-trim:inline))) or ((-moz-orient:inline) and (not (color:rgb(from red r g b)))){*,:before,:after,::backdrop{--tw-translate-x:0;--tw-translate-y:0;--tw-translate-z:0;--tw-rotate-x:initial;--tw-rotate-y:initial;--tw-rotate-z:initial;--tw-skew-x:initial;--tw-skew-y:initial;--tw-space-x-reverse:0;--tw-border-style:solid;--tw-leading:initial;--tw-font-weight:initial;--tw-tracking:initial;--tw-shadow:0 0 #0000;--tw-shadow-color:initial;--tw-shadow-alpha:100%;--tw-inset-shadow:0 0 #0000;--tw-inset-shadow-color:initial;--tw-inset-shadow-alpha:100%;--tw-ring-color:initial;--tw-ring-shadow:0 0 #0000;--tw-inset-ring-color:initial;--tw-inset-ring-shadow:0 0 #0000;--tw-ring-inset:initial;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-offset-shadow:0 0 #0000;--tw-blur:initial;--tw-brightness:initial;--tw-contrast:initial;--tw-grayscale:initial;--tw-hue-rotate:initial;--tw-invert:initial;--tw-opacity:initial;--tw-saturate:initial;--tw-sepia:initial;--tw-drop-shadow:initial;--tw-drop-shadow-color:initial;--tw-drop-shadow-alpha:100%;--tw-drop-shadow-size:initial;--tw-duration:initial;--tw-ease:initial;--tw-content:""}}}@layer theme{:root,:host{--font-sans:"Instrument Sans", ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";--font-serif:ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;--font-mono:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;--color-white:#fff;--color-black:#000;--color-slate-50:#f8fafc;--color-slate-900:#0f172a;}@layer utilities{.text-shadow{text-shadow:0 10px 20px rgba(15,23,42,.12);}}
            </style>
        @endif
    </head>
    <body class="bg-gradient-to-br from-slate-100 via-sky-50 to-indigo-50 text-[#0f172a] min-h-screen">
        <header class="border-b border-slate-200 bg-white/80 backdrop-blur-md sticky top-0 z-20 shadow-sm shadow-slate-200/80">
            <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-4 lg:px-8">
                <div>
                    <a href="{{ route('donate') }}" class="font-semibold text-xl text-slate-900">Givespace Donasi</a>
                    <p class="text-sm text-slate-600">Solusi donasi untuk pendidikan, kesehatan, dan pemberdayaan.</p>
                </div>
                <nav class="flex items-center gap-4 text-sm text-slate-700">
                    <a href="#campaigns" class="hover:text-slate-900">Kampanye</a>
                    <a href="#fitur" class="hover:text-slate-900">Fitur</a>
                    <a href="#donasi" class="rounded-full bg-slate-900 px-4 py-2 text-white shadow-md shadow-slate-900/10 transition hover:bg-slate-700">Donasi Sekarang</a>
                    @auth
                        <a href="{{ route('dashboard') }}" class="rounded-full border border-slate-900 px-4 py-2 text-sm font-semibold text-slate-900 hover:bg-slate-100">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="rounded-full border border-slate-900 px-4 py-2 text-sm font-semibold text-slate-900 hover:bg-slate-100">Login</a>
                    @endauth
                </nav>
            </div>
        </header>

        <main class="mx-auto max-w-7xl px-6 py-10 lg:px-8">
            <section class="grid gap-10 lg:grid-cols-[1.5fr_1fr] items-center">
                <div class="space-y-6">
                    <p class="inline-flex items-center gap-2 rounded-full bg-[#e0f2fe] px-4 py-1 text-sm font-medium text-[#0c4a6e]">Web Donasi Baru</p>
                    <h1 class="text-4xl font-semibold tracking-tight text-[#0f172a] sm:text-5xl">Bersama wujudkan kebaikan dengan donasi yang mudah, transparan, dan aman.</h1>
                    <p class="max-w-xl text-base leading-7 text-[#475569]">Pilih kampanye, tentukan jumlah, dan kirim bantuan Anda untuk dampak sosial yang nyata. Cocok untuk siswa, komunitas, dan organisasi kecil yang ingin berbagi.</p>
                    <div class="grid gap-3 sm:grid-cols-2">
                        <a href="#donasi" class="rounded-full bg-[#0f172a] px-5 py-3 text-center text-sm font-semibold text-white shadow-sm shadow-[#0f172a]/10 hover:bg-[#020817]">Donasi Sekarang</a>
                        <a href="#campaigns" class="rounded-full border border-[#cbd5e1] px-5 py-3 text-center text-sm font-semibold text-[#0f172a] hover:border-[#94a3b8]">Lihat Kampanye</a>
                    </div>
                    <div class="mt-4 grid gap-3 sm:grid-cols-2">
                        <a href="{{ route('donate') }}" class="rounded-full border border-slate-900 bg-white px-5 py-3 text-center text-sm font-semibold text-slate-900 shadow-sm shadow-slate-200 transition hover:bg-slate-100">Halaman Donasi</a>
                        @auth
                            <a href="{{ route('dashboard') }}" class="rounded-full border border-slate-900 bg-slate-900 px-5 py-3 text-center text-sm font-semibold text-white shadow-sm shadow-slate-200 transition hover:bg-slate-700">Kembali ke Admin</a>
                        @else
                            <a href="{{ route('login') }}" class="rounded-full border border-slate-900 bg-slate-900 px-5 py-3 text-center text-sm font-semibold text-white shadow-sm shadow-slate-200 transition hover:bg-slate-700">Login Admin</a>
                        @endauth
                    </div>
                </div>
                <div class="overflow-hidden rounded-3xl bg-gradient-to-br from-sky-500 via-violet-500 to-indigo-500 p-1 shadow-2xl shadow-slate-400/30">
                    <div class="rounded-3xl bg-white p-8 sm:p-10">
                        <p class="text-sm font-semibold uppercase tracking-[0.2em] text-indigo-700">Rekap Donasi</p>
                        <div class="mt-6 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5 shadow-sm shadow-slate-200/60">
                                <p class="text-sm text-slate-500">Kampanye aktif</p>
                                <p class="mt-3 text-2xl font-semibold text-slate-900">{{ count($campaigns) }}</p>
                            </div>
                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5 shadow-sm shadow-slate-200/60">
                                <p class="text-sm text-slate-500">Donasi terkirim</p>
                                <p class="mt-3 text-2xl font-semibold text-slate-900">{{ $donationCount }}</p>
                            </div>
                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5 shadow-sm shadow-slate-200/60">
                                <p class="text-sm text-slate-500">Dana terkumpul</p>
                                <p class="mt-3 text-2xl font-semibold text-slate-900">Rp {{ number_format($totalDonations, 0, ',', '.') }}</p>
                            </div>
                            <div class="rounded-3xl border border-slate-200 bg-slate-50 p-5 shadow-sm shadow-slate-200/60">
                                <p class="text-sm text-slate-500">Target total</p>
                                <p class="mt-3 text-2xl font-semibold text-slate-900">Rp {{ number_format($totalTarget, 0, ',', '.') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="fitur" class="mt-16 space-y-8">
                <div class="flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-[#334155]">Fitur utama</p>
                        <h2 class="text-3xl font-semibold text-[#0f172a]">Fitur yang disesuaikan untuk situs donasi</h2>
                    </div>
                </div>

                <div class="grid gap-6 lg:grid-cols-3">
                    <article class="rounded-3xl border border-[#e2e8f0] bg-white p-8 shadow-sm shadow-[#0f172a]/5">
                        <p class="text-sm font-semibold text-[#0f172a]">Katalog Kampanye</p>
                        <p class="mt-3 text-sm leading-7 text-[#475569]">Dukung berbagai tujuan: pendidikan, kesehatan, pemberdayaan, dan bantuan darurat.</p>
                    </article>
                    <article class="rounded-3xl border border-[#e2e8f0] bg-white p-8 shadow-sm shadow-[#0f172a]/5">
                        <p class="text-sm font-semibold text-[#0f172a]">Form Donasi Cepat</p>
                        <p class="mt-3 text-sm leading-7 text-[#475569]">Pilih nominal tetap atau masukkan jumlah sendiri, lalu kirimkan dalam beberapa langkah sederhana.</p>
                    </article>
                    <article class="rounded-3xl border border-[#e2e8f0] bg-white p-8 shadow-sm shadow-[#0f172a]/5">
                        <p class="text-sm font-semibold text-[#0f172a]">Laporan Transparan</p>
                        <p class="mt-3 text-sm leading-7 text-[#475569]">Jelaskan tujuan dana dan tampilkan status penggalangan agar donatur percaya dengan penggunaan bantuan.</p>
                    </article>
                </div>
            </section>

            <section id="campaigns" class="mt-20">
                <div class="flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-[0.24em] text-[#334155]">Kampanye donasi</p>
                        <h2 class="text-3xl font-semibold text-[#0f172a]">Pilih kampanye yang Anda ingin dukung</h2>
                    </div>
                </div>

                <div class="mt-8 grid gap-6 xl:grid-cols-3">
                    @foreach ($campaigns as $campaign)
                        <article class="rounded-3xl border border-slate-200 bg-white p-6 shadow-xl shadow-slate-300/30 transition hover:-translate-y-1 hover:shadow-slate-300/50">
                            <div class="flex items-center justify-between gap-3">
                                <h3 class="text-xl font-semibold text-slate-900">{{ $campaign->title }}</h3>
                                <span class="rounded-full bg-sky-100 px-3 py-1 text-sm font-semibold text-sky-700">Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}</span>
                            </div>
                            <p class="mt-4 text-sm leading-7 text-slate-600">{{ $campaign->description }}</p>
                            <div class="mt-6 flex items-center gap-3 text-sm text-slate-500">
                                <span class="inline-flex h-2.5 w-2.5 rounded-full bg-sky-700"></span>
                                <span>Target transparan dan disesuaikan.</span>
                            </div>
                            <div class="mt-6">
                                <a href="{{ route('campaigns.show', $campaign) }}" class="inline-flex items-center rounded-full bg-slate-900 px-4 py-2 text-sm font-semibold text-white transition hover:bg-slate-700">Lihat Detail</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </section>

            <section id="donasi" class="mt-20 rounded-[2rem] bg-[#ffffff] p-6 shadow-lg shadow-[#0f172a]/5 lg:p-10">
                <div class="grid gap-10 lg:grid-cols-[0.95fr_1.05fr] items-start">
                    <div class="space-y-5">
                        <p class="text-sm uppercase tracking-[0.24em] text-[#334155]">Formulir donasi</p>
                        <h2 class="text-3xl font-semibold text-[#0f172a]">Donasi langsung untuk perubahan nyata</h2>
                        <p class="max-w-xl text-sm leading-7 text-[#475569]">Isi data dan pilih kampanye. Sistem ini sudah dirancang untuk memudahkan donatur dan membuat pelaporan lebih jelas.</p>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div class="rounded-3xl border border-[#e2e8f0] bg-[#f8fafc] p-6">
                                <p class="font-semibold text-[#0f172a]">Donasi Sekali</p>
                                <p class="mt-2 text-sm text-[#475569]">Sumbangan langsung untuk kampanye yang Anda pilih.</p>
                            </div>
                            <div class="rounded-3xl border border-[#e2e8f0] bg-[#f8fafc] p-6">
                                <p class="font-semibold text-[#0f172a]">Laporan Donasi</p>
                                <p class="mt-2 text-sm text-[#475569]">Cetak bukti dan catatan ringkas setelah mengirim donasi.</p>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('donate.submit') }}" method="POST" class="space-y-5 rounded-[2rem] border border-[#e2e8f0] bg-[#f8fafc] p-6 shadow-sm shadow-[#0f172a]/5">
                        @csrf

                        @if (session('success'))
                            <div class="rounded-3xl border border-green-200 bg-green-50 p-4 text-sm text-green-700">
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

                        <div>
                            <label for="campaign" class="mb-2 block text-sm font-semibold text-[#0f172a]">Pilih Kampanye</label>
                            <select id="campaign" name="campaign" class="w-full rounded-3xl border border-[#cbd5e1] bg-white px-4 py-3 text-sm text-[#0f172a] outline-none focus:border-[#0f172a] focus:ring-2 focus:ring-[#c7d2fe]/50">
                                @foreach ($campaigns as $campaign)
                                    <option value="{{ $campaign->id }}" {{ old('campaign') == $campaign->id ? 'selected' : '' }}>{{ $campaign->title }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label for="amount" class="mb-2 block text-sm font-semibold text-[#0f172a]">Jumlah Donasi (Rp)</label>
                            <input id="amount" name="amount" type="number" min="10000" placeholder="100000" value="{{ old('amount', '100000') }}" class="w-full rounded-3xl border border-[#cbd5e1] bg-white px-4 py-3 text-sm text-[#0f172a] outline-none focus:border-[#0f172a] focus:ring-2 focus:ring-[#c7d2fe]/50" />
                            <p class="mt-2 text-xs text-[#64748b]">Minimal Rp 10.000. Masukkan angka tanpa titik atau koma.</p>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2">
                            <div>
                                <label for="name" class="mb-2 block text-sm font-semibold text-[#0f172a]">Nama Donatur</label>
                                <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Nama lengkap" class="w-full rounded-3xl border border-[#cbd5e1] bg-white px-4 py-3 text-sm text-[#0f172a] outline-none focus:border-[#0f172a] focus:ring-2 focus:ring-[#c7d2fe]/50" />
                            </div>
                            <div>
                                <label for="email" class="mb-2 block text-sm font-semibold text-[#0f172a]">Email</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="email@domain.com" class="w-full rounded-3xl border border-[#cbd5e1] bg-white px-4 py-3 text-sm text-[#0f172a] outline-none focus:border-[#0f172a] focus:ring-2 focus:ring-[#c7d2fe]/50" />
                            </div>
                        </div>

                        <div>
                            <label for="message" class="mb-2 block text-sm font-semibold text-[#0f172a]">Pesan untuk penerima (opsional)</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tulis pesan singkat..." class="w-full rounded-3xl border border-[#cbd5e1] bg-white px-4 py-3 text-sm text-[#0f172a] outline-none focus:border-[#0f172a] focus:ring-2 focus:ring-[#c7d2fe]/50">{{ old('message') }}</textarea>
                        </div>

                        <button type="submit" class="w-full rounded-3xl bg-[#0f172a] px-6 py-4 text-sm font-semibold text-white transition hover:bg-[#020817]">Kirim Donasi</button>

                        <div class="rounded-3xl border border-[#cbd5e1] bg-white p-4 text-sm text-[#475569]">
                            <p class="font-semibold text-[#0f172a]">Catatan</p>
                            <p class="mt-2">Sistem ini hanya menampilkan alur donasi. Pembayaran aktual dapat ditautkan ke gateway spesifik sesuai kebutuhan proyek.</p>
                        </div>
                    </form>
                </div>
            </section>

            <section class="mt-20">
                <div class="rounded-[2rem] bg-[#f8fafc] p-8 shadow-sm shadow-[#0f172a]/5">
                    <div class="flex flex-col gap-3 lg:flex-row lg:items-center lg:justify-between">
                        <div>
                            <p class="text-sm uppercase tracking-[0.24em] text-[#334155]">Donasi terbaru</p>
                            <h2 class="mt-2 text-3xl font-semibold text-[#0f172a]">Riwayat donasi terakhir</h2>
                        </div>
                        <p class="text-sm text-[#475569]">Lihat ringkasan donatur dan kampanye yang aktif.</p>
                    </div>

                    <div class="mt-8 overflow-hidden rounded-[1.75rem] border border-[#e2e8f0] bg-white">
                        <div class="grid grid-cols-[2fr_2fr_1fr_2fr] gap-4 bg-[#f8fafc] px-6 py-4 text-xs uppercase tracking-[0.2em] text-[#475569] sm:grid-cols-[2fr_2fr_1fr_2fr]">
                            <span>Donatur</span>
                            <span>Kampanye</span>
                            <span>Jumlah</span>
                            <span>Tanggal</span>
                        </div>
                        @if ($recentDonations->isEmpty())
                            <div class="px-6 py-10 text-center text-sm text-[#64748b]">Belum ada donasi terkini. Ajak donatur untuk mendukung kampanye Anda.</div>
                        @else
                            <div class="divide-y divide-[#e2e8f0]">
                                @foreach ($recentDonations as $donation)
                                    <div class="grid grid-cols-[2fr_2fr_1fr_2fr] gap-4 px-6 py-4 text-sm text-[#334155] sm:grid-cols-[2fr_2fr_1fr_2fr]">
                                        <span>{{ $donation->donor_name }}</span>
                                        <span>{{ $donation->campaign->title }}</span>
                                        <span>Rp {{ number_format($donation->amount, 0, ',', '.') }}</span>
                                        <span>{{ $donation->created_at->format('d M Y') }}</span>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </section>

            <section class="mt-20 grid gap-8 lg:grid-cols-3">
                <div class="rounded-[2rem] bg-[#eff6ff] p-8 text-[#0f172a] shadow-sm shadow-[#0f172a]/5">
                    <p class="text-sm uppercase tracking-[0.24em]">Manajemen Donatur</p>
                    <h3 class="mt-4 text-2xl font-semibold">Profil donatur</h3>
                    <p class="mt-3 text-sm leading-7 text-[#475569]">Simpan data donatur, riwayat donasi, dan bukti donasi yang mudah dilihat.</p>
                </div>
                <div class="rounded-[2rem] bg-[#fff7ed] p-8 text-[#92400e] shadow-sm shadow-[#c2410c]/10">
                    <p class="text-sm uppercase tracking-[0.24em]">Tingkatkan Kepercayaan</p>
                    <h3 class="mt-4 text-2xl font-semibold">Laporan transparan</h3>
                    <p class="mt-3 text-sm leading-7">Tampilkan penggunaan dana, capaian target, dan realisasi program secara jelas.</p>
                </div>
                <div class="rounded-[2rem] bg-[#ecfdf5] p-8 text-[#14532d] shadow-sm shadow-[#166534]/10">
                    <p class="text-sm uppercase tracking-[0.24em]">Proses Cepat</p>
                    <h3 class="mt-4 text-2xl font-semibold">Alur fleksibel</h3>
                    <p class="mt-3 text-sm leading-7">Desain web donasi yang mendukung donasi sekali, pilihan nominal, dan pesan personal.</p>
                </div>
            </section>
        </main>

        <footer class="border-t border-[#d8d7d1] bg-white py-8">
            <div class="mx-auto max-w-7xl px-6 text-sm text-[#64748b] lg:px-8">© {{ date('Y') }} Givespace. Situs donasi sederhana untuk membantu masyarakat dan komunitas.</div>
        </footer>
    </body>
</html>
