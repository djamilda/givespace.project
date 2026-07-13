<!DOCTYPE html>

<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>CampaignManager - Buat Kampanye</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "secondary-fixed": "#d9e3f4",
                        "on-primary": "#ffffff",
                        "surface-tint": "#0053db",
                        "primary": "#004ac6",
                        "primary-fixed-dim": "#b4c5ff",
                        "tertiary-container": "#bc4800",
                        "surface-container-high": "#e7e7f3",
                        "on-secondary-fixed-variant": "#3e4755",
                        "background": "#faf8ff",
                        "surface-container-highest": "#e1e2ed",
                        "on-surface-variant": "#434655",
                        "tertiary-fixed-dim": "#ffb596",
                        "surface-bright": "#faf8ff",
                        "surface-variant": "#e1e2ed",
                        "on-tertiary-fixed-variant": "#7d2d00",
                        "secondary-fixed-dim": "#bdc7d8",
                        "on-surface": "#191b23",
                        "surface-container": "#ededf9",
                        "on-primary-fixed": "#00174b",
                        "on-error-container": "#93000a",
                        "secondary-container": "#d6e0f1",
                        "on-secondary-container": "#596372",
                        "on-primary-container": "#eeefff",
                        "inverse-on-surface": "#f0f0fb",
                        "surface-dim": "#d9d9e5",
                        "surface": "#faf8ff",
                        "outline": "#737686",
                        "error-container": "#ffdad6",
                        "on-background": "#191b23",
                        "on-secondary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-fixed": "#121c28",
                        "tertiary": "#943700",
                        "tertiary-fixed": "#ffdbcd",
                        "surface-container-low": "#f3f3fe",
                        "on-tertiary-fixed": "#360f00",
                        "on-error": "#ffffff",
                        "on-tertiary": "#ffffff",
                        "primary-container": "#2563eb",
                        "error": "#ba1a1a",
                        "primary-fixed": "#dbe1ff",
                        "inverse-primary": "#b4c5ff",
                        "on-tertiary-container": "#ffede6",
                        "secondary": "#555f6d",
                        "outline-variant": "#c3c6d7",
                        "on-primary-fixed-variant": "#003ea8",
                        "inverse-surface": "#2e3039"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "element-gap": "1rem",
                        "page-padding": "1.5rem",
                        "section-margin": "2rem",
                        "max-width-form": "32rem",
                        "card-padding": "1.5rem"
                    },
                    "fontFamily": {
                        "body-base": ["Inter"],
                        "label-md": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-lg": ["Inter"],
                        "error-text": ["Inter"]
                    },
                    "fontSize": {
                        "body-base": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "500"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-md": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "700"
                        }],
                        "error-text": ["13px", {
                            "lineHeight": "18px",
                            "fontWeight": "400"
                        }]
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
    </style>
</head>

<body class="bg-surface font-body-base text-on-surface">
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
    <main class="pt-24 pb-12 px-page-padding flex justify-center">
        <div class="w-full max-w-max-width-form">
            <!-- Back Button -->
            <div class="mb-6">
                <a class="inline-flex items-center text-primary font-label-md text-label-md hover:underline gap-1"
                    href="{{ route('campaigns.index') }}">
                    <span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    Kembali ke Daftar
                </a>
            </div>
            <!-- Page Title & Description -->
            <div class="mb-8">
                <h1 class="font-headline-lg text-headline-lg text-on-surface">Buat Kampanye</h1>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-1">Lengkapi formulir di bawah ini untuk
                    memulai kampanye penggalangan dana baru.</p>
            </div>
            <!-- Validation Errors -->
            @if ($errors->any())
            <div class="mb-6 p-4 bg-error-container text-on-error-container rounded-lg border border-error/20">
                <div class="flex items-center gap-2 mb-2">
                    <span class="material-symbols-outlined text-[20px]">error</span>
                    <span class="font-label-md">Terdapat kesalahan pada input Anda:</span>
                </div>
                <ul class="list-disc list-inside font-error-text text-error-text opacity-90 ml-2">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <!-- Form Card -->
            <div
                class="bg-white rounded-lg shadow-[0_1px_3px_0_rgba(0,0,0,0.1)] border border-outline-variant p-card-padding">
                <form action="{{ route('campaigns.store') }}" class="space-y-4" method="POST">
                    @csrf
                    <!-- Title Field -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-md text-label-md text-on-surface" for="title">Judul Kampanye</label>
                        <input
                            class="border @error('title') border-error focus:ring-2 focus:ring-error focus:border-error @else border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary @enderror rounded-md px-3 py-2 w-full outline-none transition-all font-body-base text-body-base"
                            id="title" name="title" placeholder="Contoh: Bantuan Sembako Lansia" type="text"
                            value="{{ old('title') }}" />
                        @error('title')
                            <span class="text-error font-error-text mt-0.5">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Description Field -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-md text-label-md text-on-surface" for="description">Deskripsi</label>
                        <textarea
                            class="border @error('description') border-error focus:ring-2 focus:ring-error focus:border-error @else border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary @enderror rounded-md px-3 py-2 w-full outline-none transition-all font-body-base text-body-base resize-none"
                            id="description" name="description" rows="4">{{ old('description') }}</textarea>
                        @error('description')
                            <span class="text-error font-error-text mt-0.5">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Target Amount Field -->
                    <div class="flex flex-col gap-1.5">
                        <label class="font-label-md text-label-md text-on-surface" for="target_amount">Target Dana
                            (Rp)</label>
                        <input
                            class="border @error('target_amount') border-error focus:ring-2 focus:ring-error focus:border-error @else border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary @enderror rounded-md px-3 py-2 w-full outline-none transition-all font-body-base text-body-base"
                            id="target_amount" name="target_amount" placeholder="0" type="number"
                            value="{{ old('target_amount') }}" />
                        @error('target_amount')
                            <span class="text-error font-error-text mt-0.5">{{ $message }}</span>
                        @enderror
                    </div>
                    <!-- Active Status Checkbox -->
                    <div class="flex items-center gap-3 pt-2">
                        <div class="flex items-center h-5">
                            <input class="w-5 h-5 text-primary border-outline-variant rounded focus:ring-primary"
                                id="is_active" name="is_active" type="checkbox" value="1" {{ old('is_active') ? 'checked' : (session()->has('_old_input') ? '' : 'checked') }} />
                        </div>
                        <label class="font-label-md text-label-md text-on-surface cursor-pointer" for="is_active">Status
                            Aktif</label>
                    </div>
                    <!-- Form Actions -->
                    <div class="pt-6 border-t border-outline-variant flex justify-end gap-3">
                        <a href="{{ route('campaigns.index') }}"
                            class="text-secondary hover:bg-surface-container-high px-4 py-2 rounded-md font-medium transition-colors inline-flex items-center justify-center">
                            Batal
                        </a>
                        <button
                            class="bg-primary hover:bg-primary-container text-white font-medium py-2 px-6 rounded-md transition-all shadow-sm"
                            type="submit">
                            Simpan Kampanye
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Footer Section -->
    <footer
        class="bg-surface-container-low dark:bg-surface-container-highest border-t border-outline-variant dark:border-outline w-full py-8 px-page-padding flex flex-col md:flex-row justify-between items-center gap-4">
        <div class="flex flex-col gap-1 items-center md:items-start">
            <span class="font-label-md text-label-md font-semibold text-secondary">CampaignManager</span>
            <p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 Campaign Management System. Academic
                Purpose Only.</p>
        </div>
        <div class="flex gap-6">
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all"
                href="#">Documentation</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all"
                href="#">Privacy Policy</a>
            <a class="font-body-sm text-body-sm text-on-surface-variant hover:underline transition-all"
                href="#">Support</a>
        </div>
    </footer>
</body>

</html>
