<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - GiveSpace</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        dark: {
                            900: '#0f0f1a',
                            800: '#1a1a2e',
                            700: '#1e1e3a',
                            600: '#2a2a4a',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body { background-color: #0f0f1a; }
        .progress-bar { transition: width 1s ease-in-out; }
        .card-hover { transition: transform 0.2s, box-shadow 0.2s; }
        .card-hover:hover { transform: translateY(-3px); box-shadow: 0 10px 30px rgba(124, 58, 237, 0.2); }
        ::-webkit-scrollbar { width: 6px; }
        ::-webkit-scrollbar-track { background: #1a1a2e; }
        ::-webkit-scrollbar-thumb { background: #7c3aed; border-radius: 3px; }
    </style>
</head>
<body class="text-white min-h-screen">

    <div class="flex min-h-screen">

        {{-- ===== SIDEBAR ===== --}}
        <aside class="w-64 bg-[#1a1a2e] border-r border-purple-900/30 flex flex-col fixed h-full z-10">

            {{-- Logo --}}
            <div class="p-6 border-b border-purple-900/30">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 bg-purple-600 rounded-xl flex items-center justify-center text-lg">💜</div>
                    <span class="text-xl font-bold text-white">GiveSpace</span>
                </div>
            </div>

            {{-- Menu --}}
            <nav class="flex-1 p-4 space-y-1">
                <p class="text-xs text-gray-500 uppercase tracking-widest px-3 mb-3">Menu Utama</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl bg-purple-600/20 text-purple-400 font-medium">
                    <span>🏠</span> Dashboard
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:bg-purple-600/10 hover:text-purple-300 transition">
                    <span>📢</span> Kampanye
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:bg-purple-600/10 hover:text-purple-300 transition">
                    <span>💰</span> Donasi Saya
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:bg-purple-600/10 hover:text-purple-300 transition">
                    <span>📊</span> Laporan
                </a>

                <p class="text-xs text-gray-500 uppercase tracking-widest px-3 mb-3 mt-6">Akun</p>

                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:bg-purple-600/10 hover:text-purple-300 transition">
                    <span>👤</span> Profil Saya
                </a>
                <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-xl text-gray-400 hover:bg-purple-600/10 hover:text-purple-300 transition">
                    <span>⚙️</span> Pengaturan
                </a>
            </nav>

            {{-- User Info --}}
            <div class="p-4 border-t border-purple-900/30">
                <div class="flex items-center gap-3">
                    <div class="w-9 h-9 bg-purple-700 rounded-full flex items-center justify-center font-bold text-sm">H</div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium truncate">Hasby</p>
                        <p class="text-xs text-gray-500 truncate">hasby@gmail.com</p>
                    </div>
                    <a href="/logout" class="text-gray-500 hover:text-red-400 transition text-lg" title="Logout">↩</a>
                </div>
            </div>
        </aside>

        {{-- ===== MAIN CONTENT ===== --}}
        <main class="flex-1 ml-64 p-8">

            {{-- Header --}}
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h1 class="text-2xl font-bold">Selamat Datang, Donatur 👋</h1>
                    <p class="text-gray-400 text-sm mt-1">Berikut ringkasan aktivitas GiveSpace hari ini</p>
                </div>
                <a href="#" class="bg-purple-600 hover:bg-purple-700 text-white px-5 py-2.5 rounded-xl font-medium text-sm transition flex items-center gap-2">
                    <span>➕</span> Buat Kampanye
                </a>
            </div>

            {{-- ===== STATS CARDS ===== --}}
            <div class="grid grid-cols-4 gap-4 mb-8">

                <div class="card-hover bg-[#1e1e3a] border border-purple-900/30 rounded-2xl p-5">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-gray-400 text-sm">Total Donasi</span>
                        <div class="w-9 h-9 bg-purple-600/20 rounded-xl flex items-center justify-center">💰</div>
                    </div>
                    <p class="text-2xl font-bold">Rp 2,4M</p>
                    <p class="text-green-400 text-xs mt-1">↑ 12% dari bulan lalu</p>
                </div>

                <div class="card-hover bg-[#1e1e3a] border border-purple-900/30 rounded-2xl p-5">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-gray-400 text-sm">Kampanye Aktif</span>
                        <div class="w-9 h-9 bg-blue-600/20 rounded-xl flex items-center justify-center">📢</div>
                    </div>
                    <p class="text-2xl font-bold">8</p>
                    <p class="text-blue-400 text-xs mt-1">3 baru minggu ini</p>
                </div>

                <div class="card-hover bg-[#1e1e3a] border border-purple-900/30 rounded-2xl p-5">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-gray-400 text-sm">Total Donatur</span>
                        <div class="w-9 h-9 bg-pink-600/20 rounded-xl flex items-center justify-center">👥</div>
                    </div>
                    <p class="text-2xl font-bold">1.250</p>
                    <p class="text-pink-400 text-xs mt-1">↑ 85 donatur baru</p>
                </div>

                <div class="card-hover bg-[#1e1e3a] border border-purple-900/30 rounded-2xl p-5">
                    <div class="flex items-center justify-between mb-3">
                        <span class="text-gray-400 text-sm">Target Tercapai</span>
                        <div class="w-9 h-9 bg-green-600/20 rounded-xl flex items-center justify-center">🎯</div>
                    </div>
                    <p class="text-2xl font-bold">76%</p>
                    <p class="text-green-400 text-xs mt-1">Rata-rata semua kampanye</p>
                </div>

            </div>

            {{-- ===== KAMPANYE TERBARU + AKTIVITAS ===== --}}
            <div class="grid grid-cols-3 gap-6">

                {{-- Kampanye Terbaru (2/3) --}}
                <div class="col-span-2 bg-[#1e1e3a] border border-purple-900/30 rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-5">
                        <h2 class="font-semibold text-lg">Kampanye Terbaru</h2>
                        <a href="#" class="text-purple-400 text-sm hover:underline">Lihat Semua →</a>
                    </div>

                    <div class="space-y-4">

                        {{-- Campaign Item 1 --}}
                        <div class="bg-[#0f0f1a] rounded-xl p-4">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-orange-500/20 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">🏥</div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between mb-1">
                                        <p class="font-medium text-sm truncate">Bantu Biaya Operasi Ibu Sari</p>
                                        <span class="text-xs bg-green-500/20 text-green-400 px-2 py-0.5 rounded-full ml-2 flex-shrink-0">Aktif</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mb-2">Kesehatan • oleh Budi Santoso</p>
                                    <div class="w-full bg-gray-700 rounded-full h-1.5 mb-1">
                                        <div class="progress-bar bg-purple-500 h-1.5 rounded-full" style="width: 72%"></div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-400">
                                        <span>Rp 7,2 Juta terkumpul</span>
                                        <span class="text-purple-400 font-medium">72%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Campaign Item 2 --}}
                        <div class="bg-[#0f0f1a] rounded-xl p-4">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-blue-500/20 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">📚</div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between mb-1">
                                        <p class="font-medium text-sm truncate">Beasiswa Anak Kurang Mampu Pontianak</p>
                                        <span class="text-xs bg-green-500/20 text-green-400 px-2 py-0.5 rounded-full ml-2 flex-shrink-0">Aktif</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mb-2">Pendidikan • oleh Yayasan Harapan</p>
                                    <div class="w-full bg-gray-700 rounded-full h-1.5 mb-1">
                                        <div class="progress-bar bg-blue-500 h-1.5 rounded-full" style="width: 45%"></div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-400">
                                        <span>Rp 4,5 Juta terkumpul</span>
                                        <span class="text-blue-400 font-medium">45%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Campaign Item 3 --}}
                        <div class="bg-[#0f0f1a] rounded-xl p-4">
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-green-500/20 rounded-xl flex items-center justify-center text-2xl flex-shrink-0">🌱</div>
                                <div class="flex-1 min-w-0">
                                    <div class="flex items-center justify-between mb-1">
                                        <p class="font-medium text-sm truncate">Tanam Pohon untuk Kalimantan</p>
                                        <span class="text-xs bg-yellow-500/20 text-yellow-400 px-2 py-0.5 rounded-full ml-2 flex-shrink-0">Hampir Selesai</span>
                                    </div>
                                    <p class="text-xs text-gray-500 mb-2">Lingkungan • oleh Green Borneo</p>
                                    <div class="w-full bg-gray-700 rounded-full h-1.5 mb-1">
                                        <div class="progress-bar bg-green-500 h-1.5 rounded-full" style="width: 91%"></div>
                                    </div>
                                    <div class="flex justify-between text-xs text-gray-400">
                                        <span>Rp 9,1 Juta terkumpul</span>
                                        <span class="text-green-400 font-medium">91%</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                {{-- Aktivitas Terbaru (1/3) --}}
                <div class="bg-[#1e1e3a] border border-purple-900/30 rounded-2xl p-6">
                    <h2 class="font-semibold text-lg mb-5">Aktivitas Terbaru</h2>

                    <div class="space-y-4">

                        <div class="flex gap-3">
                            <div class="w-8 h-8 bg-purple-600/20 rounded-full flex items-center justify-center text-sm flex-shrink-0">💜</div>
                            <div>
                                <p class="text-xs text-white">Kamu berdonasi ke <span class="text-purple-400">Bantu Ibu Sari</span></p>
                                <p class="text-xs text-gray-500 mt-0.5">2 jam lalu</p>
                            </div>
                        </div>

                        <div class="w-full h-px bg-purple-900/20"></div>

                        <div class="flex gap-3">
                            <div class="w-8 h-8 bg-blue-600/20 rounded-full flex items-center justify-center text-sm flex-shrink-0">📢</div>
                            <div>
                                <p class="text-xs text-white">Kampanye <span class="text-blue-400">Beasiswa Pontianak</span> dibuat</p>
                                <p class="text-xs text-gray-500 mt-0.5">5 jam lalu</p>
                            </div>
                        </div>

                        <div class="w-full h-px bg-purple-900/20"></div>

                        <div class="flex gap-3">
                            <div class="w-8 h-8 bg-green-600/20 rounded-full flex items-center justify-center text-sm flex-shrink-0">✅</div>
                            <div>
                                <p class="text-xs text-white">Target <span class="text-green-400">Tanam Pohon</span> hampir tercapai</p>
                                <p class="text-xs text-gray-500 mt-0.5">1 hari lalu</p>
                            </div>
                        </div>

                        <div class="w-full h-px bg-purple-900/20"></div>

                        <div class="flex gap-3">
                            <div class="w-8 h-8 bg-pink-600/20 rounded-full flex items-center justify-center text-sm flex-shrink-0">👥</div>
                            <div>
                                <p class="text-xs text-white"><span class="text-pink-400">85 donatur baru</span> bergabung minggu ini</p>
                                <p class="text-xs text-gray-500 mt-0.5">3 hari lalu</p>
                            </div>
                        </div>

                        <div class="w-full h-px bg-purple-900/20"></div>

                        <div class="flex gap-3">
                            <div class="w-8 h-8 bg-yellow-600/20 rounded-full flex items-center justify-center text-sm flex-shrink-0">🎉</div>
                            <div>
                                <p class="text-xs text-white">Kampanye <span class="text-yellow-400">Buku Gratis</span> berhasil selesai</p>
                                <p class="text-xs text-gray-500 mt-0.5">5 hari lalu</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </main>
    </div>

</body>
</html>