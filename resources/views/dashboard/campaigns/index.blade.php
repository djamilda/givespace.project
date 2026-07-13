<!DOCTYPE html>

<html class="light" lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>CampaignManager - Kelola Kampanye</title>
    <!-- Google Fonts: Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <!-- Material Symbols -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary": "#943700",
                        "error-container": "#ffdad6",
                        "on-error-container": "#93000a",
                        "secondary-container": "#d6e0f1",
                        "outline-variant": "#c3c6d7",
                        "on-tertiary-fixed-variant": "#7d2d00",
                        "on-tertiary-container": "#ffede6",
                        "on-error": "#ffffff",
                        "tertiary-container": "#bc4800",
                        "surface-dim": "#d9d9e5",
                        "on-secondary-fixed": "#121c28",
                        "background": "#faf8ff",
                        "outline": "#737686",
                        "on-secondary": "#ffffff",
                        "on-primary": "#ffffff",
                        "error": "#ba1a1a",
                        "on-tertiary-fixed": "#360f00",
                        "primary": "#004ac6",
                        "on-secondary-container": "#596372",
                        "on-background": "#191b23",
                        "surface-tint": "#0053db",
                        "surface": "#faf8ff",
                        "surface-container-low": "#f3f3fe",
                        "secondary-fixed": "#d9e3f4",
                        "surface-variant": "#e1e2ed",
                        "on-primary-container": "#eeefff",
                        "tertiary-fixed-dim": "#ffb596",
                        "on-primary-fixed-variant": "#003ea8",
                        "on-surface": "#191b23",
                        "surface-container": "#ededf9",
                        "on-tertiary": "#ffffff",
                        "surface-bright": "#faf8ff",
                        "on-primary-fixed": "#00174b",
                        "inverse-on-surface": "#f0f0fb",
                        "tertiary-fixed": "#ffdbcd",
                        "surface-container-high": "#e7e7f3",
                        "inverse-primary": "#b4c5ff",
                        "on-secondary-fixed-variant": "#3e4755",
                        "secondary": "#555f6d",
                        "primary-fixed": "#dbe1ff",
                        "primary-container": "#2563eb",
                        "surface-container-lowest": "#ffffff",
                        "primary-fixed-dim": "#b4c5ff",
                        "inverse-surface": "#2e3039",
                        "on-surface-variant": "#434655",
                        "surface-container-highest": "#e1e2ed",
                        "secondary-fixed-dim": "#bdc7d8"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "section-margin": "2rem",
                        "page-padding": "1.5rem",
                        "card-padding": "1.5rem",
                        "max-width-form": "32rem",
                        "element-gap": "1rem"
                    },
                    "fontFamily": {
                        "error-text": ["Inter"],
                        "label-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-sm": ["Inter"],
                        "body-base": ["Inter"]
                    },
                    "fontSize": {
                        "error-text": ["13px", {"lineHeight": "18px", "fontWeight": "400"}],
                        "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}],
                        "headline-lg": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                        "headline-md": ["18px", {"lineHeight": "28px", "fontWeight": "600"}],
                        "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "body-base": ["16px", {"lineHeight": "24px", "fontWeight": "400"}]
                    }
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
            vertical-align: middle;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-surface text-on-surface min-h-screen flex flex-col">
<!-- TopAppBar Section -->
<header class="bg-surface dark:bg-inverse-surface border-b border-outline-variant dark:border-outline flex justify-between items-center px-page-padding w-full h-16 fixed top-0 z-50 shadow-sm">
    <div class="flex items-center gap-8">
        <span class="font-headline-md text-headline-md font-bold text-primary dark:text-inverse-primary">CampaignManager</span>
        <nav class="hidden md:flex gap-6 items-center">
            <a class="text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-inverse-primary transition-colors cursor-pointer active:opacity-70 font-body-base text-body-base" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="text-primary dark:text-inverse-primary border-b-2 border-primary dark:border-inverse-primary pb-1 font-body-base text-body-base" href="{{ route('campaigns.index') }}">Campaigns</a>
            <a class="text-secondary dark:text-secondary-fixed-dim hover:text-primary dark:hover:text-inverse-primary transition-colors cursor-pointer active:opacity-70 font-body-base text-body-base" href="#">Reports</a>
        </nav>
    </div>
    <div class="flex items-center gap-4">
        <span class="material-symbols-outlined text-secondary cursor-pointer">notifications</span>
        <span class="material-symbols-outlined text-secondary cursor-pointer">account_circle</span>
    </div>
</header>
<main class="flex-grow pt-24 pb-12">
    <div class="max-w-6xl mx-auto p-6 space-y-6">
        <!-- Header Section -->
        <section class="space-y-1">
            <h1 class="font-headline-lg text-headline-lg text-on-surface">Kelola Kampanye</h1>
            <p class="font-body-base text-body-base text-on-surface-variant">Daftar semua inisiatif penggalangan dana yang sedang berjalan dalam sistem Anda.</p>
        </section>

        <!-- Success Alert -->
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4 flex items-center justify-between" role="alert">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-green-700">check_circle</span>
                <span class="font-body-base text-body-base">{{ session('success') }}</span>
            </div>
            <button class="material-symbols-outlined text-green-700 hover:opacity-70" onclick="this.parentElement.remove()">close</button>
        </div>
        @endif

        <!-- Action Row -->
        <div class="flex justify-between items-center bg-surface-container-low p-4 rounded-lg border border-outline-variant">
            <div class="flex gap-2">
                <a class="px-4 py-2 bg-secondary-fixed text-on-secondary-fixed rounded-md font-label-md text-label-md hover:bg-secondary-fixed-dim transition-all flex items-center gap-2" href="{{ route('dashboard') }}">
                    <span class="material-symbols-outlined text-[20px]">dashboard</span>
                    Dashboard
                </a>
            </div>
            <a class="px-4 py-2 bg-primary text-on-primary rounded-md font-label-md text-label-md hover:opacity-90 transition-all flex items-center gap-2 shadow-sm" href="{{ route('campaigns.create') }}">
                <span class="material-symbols-outlined text-[20px]">add</span>
                Tambah Kampanye
            </a>
        </div>

        <!-- Main Table Card -->
        <div class="bg-surface-container-lowest border border-outline-variant rounded-lg shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="table-auto w-full border-collapse">
                    <thead>
                        <tr class="bg-surface-container text-on-surface-variant">
                            <th class="text-left px-6 py-4 font-label-md text-label-md border-b border-outline-variant uppercase tracking-wider">Judul</th>
                            <th class="text-left px-6 py-4 font-label-md text-label-md border-b border-outline-variant uppercase tracking-wider">Deskripsi</th>
                            <th class="text-left px-6 py-4 font-label-md text-label-md border-b border-outline-variant uppercase tracking-wider">Target Dana</th>
                            <th class="text-left px-6 py-4 font-label-md text-label-md border-b border-outline-variant uppercase tracking-wider">Dana Terkumpul</th>
                            <th class="text-left px-6 py-4 font-label-md text-label-md border-b border-outline-variant uppercase tracking-wider">Status</th>
                            <th class="text-center px-6 py-4 font-label-md text-label-md border-b border-outline-variant uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant">
                        @forelse ($campaigns as $campaign)
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-6 py-4 font-body-base text-body-base text-on-surface font-medium">{{ $campaign->title }}</td>
                            <td class="px-6 py-4 font-body-sm text-body-sm text-on-surface-variant max-w-xs truncate" title="{{ $campaign->description }}">{{ $campaign->description }}</td>
                            <td class="px-6 py-4 font-body-base text-body-base text-on-surface">Rp {{ number_format($campaign->target_amount, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 font-body-base text-body-base text-on-surface">Rp {{ number_format($campaign->donations_sum_amount ?? 0, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">
                                @if ($campaign->is_active)
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                    Aktif
                                </span>
                                @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                    Tidak Aktif
                                </span>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center gap-2">
                                    <a class="p-2 text-primary hover:bg-primary-fixed rounded-md transition-all" href="{{ route('campaigns.edit', $campaign) }}" title="Edit">
                                        <span class="material-symbols-outlined">edit</span>
                                    </a>
                                    <!-- Delete Campaign Form -->
                                    <form action="{{ route('campaigns.destroy', $campaign) }}" class="inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="p-2 text-error hover:bg-error-container rounded-md transition-all" title="Hapus" type="submit">
                                            <span class="material-symbols-outlined">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td class="px-6 py-12 text-center font-body-base text-body-base text-on-surface-variant italic" colspan="6">
                                Belum ada kampanye.
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <!-- Pagination Section -->
            @if ($campaigns->hasPages())
            <div class="px-6 py-4 bg-surface-container-lowest border-t border-outline-variant">
                <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                    <p class="font-body-sm text-body-sm text-on-surface-variant">
                        Menampilkan {{ $campaigns->firstItem() ?? 0 }} sampai {{ $campaigns->lastItem() ?? 0 }} dari {{ $campaigns->total() }} entri
                    </p>
                    <div class="inline-flex items-center gap-1">
                        {{ $campaigns->links() }}
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-low dark:bg-surface-container-highest border-t border-outline-variant dark:border-outline w-full py-8 px-page-padding flex flex-col md:flex-row justify-between items-center gap-4 mt-12">
    <div class="flex flex-col items-center md:items-start">
        <span class="font-label-md text-label-md font-semibold text-secondary">CampaignManager</span>
        <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">© 2024 Campaign Management System. Academic Purpose Only.</p>
    </div>
    <nav class="flex gap-6">
        <a class="font-body-sm text-body-sm text-on-secondary-fixed-variant hover:underline transition-all" href="#">Documentation</a>
        <a class="font-body-sm text-body-sm text-on-secondary-fixed-variant hover:underline transition-all" href="#">Privacy Policy</a>
        <a class="font-body-sm text-body-sm text-on-secondary-fixed-variant hover:underline transition-all" href="#">Support</a>
    </nav>
</footer>
<script>
    // Delete action confirmation dialog
    document.querySelectorAll('form').forEach(form => {
        const deleteBtn = form.querySelector('button[title="Hapus"]');
        if (deleteBtn) {
            form.addEventListener('submit', (e) => {
                if (!confirm('Apakah Anda yakin ingin menghapus kampanye ini?')) {
                    e.preventDefault();
                }
            });
        }
    });
</script>
</body>
</html>
