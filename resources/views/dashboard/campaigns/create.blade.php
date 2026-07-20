<!DOCTYPE html>
<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>Buat Kampanye - CampaignManager</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "inverse-on-surface": "#f0f0fb",
                    "secondary": "#555f6d",
                    "surface": "#faf8ff",
                    "on-background": "#191b23",
                    "secondary-container": "#d6e0f1",
                    "on-secondary-container": "#596372",
                    "secondary-fixed-dim": "#bdc7d8",
                    "on-error": "#ffffff",
                    "outline-variant": "#c3c6d7",
                    "surface-variant": "#e1e2ed",
                    "error": "#ba1a1a",
                    "surface-dim": "#d9d9e5",
                    "surface-container": "#ededf9",
                    "surface-container-lowest": "#ffffff",
                    "outline": "#737686",
                    "on-secondary-fixed-variant": "#3e4755",
                    "primary-fixed": "#dbe1ff",
                    "on-primary-container": "#eeefff",
                    "on-primary": "#ffffff",
                    "on-surface": "#191b23",
                    "focus-color": "#2563eb",
                    "tertiary-fixed": "#ffdbcd",
                    "tertiary-container": "#bc4800",
                    "inverse-primary": "#b4c5ff",
                    "on-surface-variant": "#434655",
                    "tertiary": "#943700",
                    "tertiary-fixed-dim": "#ffb596",
                    "error-container": "#ffdad6",
                    "on-tertiary-fixed-variant": "#7d2d00",
                    "on-tertiary-container": "#ffede6",
                    "on-error-container": "#93000a",
                    "background": "#faf8ff",
                    "inverse-surface": "#2e3039",
                    "surface-container-highest": "#e1e2ed",
                    "on-secondary-fixed": "#121c28",
                    "surface-tint": "#0053db",
                    "on-tertiary": "#ffffff",
                    "secondary-fixed": "#d9e3f4",
                    "primary-fixed-dim": "#b4c5ff",
                    "on-tertiary-fixed": "#360f00",
                    "on-primary-fixed": "#00174b",
                    "surface-bright": "#faf8ff",
                    "on-secondary": "#ffffff",
                    "on-primary-fixed-variant": "#003ea8",
                    "primary-container": "#2563eb",
                    "primary": "#004ac6",
                    "surface-container-low": "#f3f3fe",
                    "surface-container-high": "#e7e7f3"
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
                    "max-width-form": "32rem",
                    "card-padding": "1.5rem",
                    "element-gap": "1rem"
            },
            "fontFamily": {
                    "label-md": ["Inter"],
                    "headline-md": ["Inter"],
                    "headline-lg": ["Inter"],
                    "body-sm": ["Inter"],
                    "body-base": ["Inter"],
                    "error-text": ["Inter"]
            },
            "fontSize": {
                    "label-md": ["14px", {"lineHeight": "20px", "fontWeight": "500"}],
                    "headline-md": ["18px", {"lineHeight": "28px", "fontWeight": "600"}],
                    "headline-lg": ["24px", {"lineHeight": "32px", "fontWeight": "700"}],
                    "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                    "body-base": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                    "error-text": ["13px", {"lineHeight": "18px", "fontWeight": "400"}]
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
<body class="bg-surface text-on-background font-body-base">
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
<!-- Main Content -->
<main class="max-w-4xl mx-auto p-6 pt-24 pb-12">
    <!-- Header Section -->
    <div class="mb-8">
        <h1 class="font-headline-lg text-headline-lg text-on-surface mb-1">Buat Kampanye</h1>
        <p class="font-body-base text-body-base text-secondary">Mulai kampanye penggalangan dana baru dengan mengisi formulir di bawah.</p>
    </div>
    <!-- Navigation Buttons -->
    <div class="flex gap-3 mb-6">
        <a class="bg-gray-200 text-on-secondary-fixed-variant px-4 py-2 rounded-md font-label-md text-label-md hover:bg-gray-300 transition-colors flex items-center gap-2" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined text-[18px]">dashboard</span>
            Dashboard
        </a>
        <a class="bg-gray-200 text-on-secondary-fixed-variant px-4 py-2 rounded-md font-label-md text-label-md hover:bg-gray-300 transition-colors flex items-center gap-2" href="{{ route('campaigns.index') }}">
            <span class="material-symbols-outlined text-[18px]">arrow_back</span>
            Kembali
        </a>
    </div>
    <!-- Validation Error Box -->
    @if ($errors->any())
    <div class="bg-error-container border border-error p-4 rounded-lg mb-6 flex gap-3">
        <span class="material-symbols-outlined text-error">report</span>
        <div>
            <p class="font-label-md text-label-md text-on-error-container font-bold mb-1">Terdapat kesalahan pada input Anda:</p>
            <ul class="list-disc list-inside text-error-text font-error-text text-on-error-container opacity-90">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    <!-- Main Form Card -->
    <div class="bg-surface-container-lowest border border-outline-variant rounded-lg shadow-sm p-6">
        <form action="{{ route('campaigns.store') }}" method="POST">
            @csrf
            <div class="space-y-6">
                <!-- Judul Kampanye -->
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-2" for="title">Judul Kampanye</label>
                    <input class="w-full border @error('title') border-error focus:ring-2 focus:ring-error focus:border-error @else border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary @enderror rounded-md px-3 py-2 outline-none transition-all text-body-base" id="title" name="title" placeholder="Contoh: Bantuan Sembako untuk Lansia" type="text" value="{{ old('title') }}"/>
                    @error('title')
                        <span class="text-error font-error-text mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Deskripsi -->
                <div>
                    <label class="block font-label-md text-label-md text-on-surface mb-2" for="description">Deskripsi</label>
                    <textarea class="w-full border @error('description') border-error focus:ring-2 focus:ring-error focus:border-error @else border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary @enderror rounded-md px-3 py-2 outline-none transition-all text-body-base resize-none" id="description" name="description" placeholder="Jelaskan tujuan dan detail kampanye Anda..." rows="5">{{ old('description') }}</textarea>
                    @error('description')
                        <span class="text-error font-error-text mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Target Dana -->
                <div class="max-w-xs">
                    <label class="block font-label-md text-label-md text-on-surface mb-2" for="target_amount">Target Dana (Rp)</label>
                    <div class="relative">
                        <span class="absolute left-3 top-2 text-secondary font-body-base">Rp</span>
                        <input class="w-full border @error('target_amount') border-error focus:ring-2 focus:ring-error focus:border-error @else border-outline-variant focus:ring-2 focus:ring-primary focus:border-primary @enderror rounded-md pl-10 pr-3 py-2 outline-none transition-all text-body-base" id="target_amount" name="target_amount" type="number" value="{{ old('target_amount') }}"/>
                    </div>
                    @error('target_amount')
                        <span class="text-error font-error-text mt-1 block">{{ $message }}</span>
                    @enderror
                </div>
                <!-- Status Aktif -->
                <div class="flex items-center gap-3 bg-surface-container-low p-4 rounded-md border border-outline-variant">
                    <div class="flex items-center h-5">
                        <input class="h-5 w-5 text-primary border-outline-variant rounded focus:ring-primary" id="is_active" name="is_active" type="checkbox" value="1" {{ old('is_active') ? 'checked' : '' }} />
                    </div>
                    <div class="text-sm">
                        <label class="font-label-md text-label-md text-on-surface cursor-pointer" for="is_active">Status Aktif</label>
                        <p class="text-body-sm text-secondary">Jika dicentang, kampanye akan terlihat oleh publik.</p>
                    </div>
                </div>
            </div>
            <!-- Form Footer Buttons -->
            <div class="flex items-center justify-end gap-3 mt-8 pt-6 border-t border-outline-variant">
                <a href="{{ route('campaigns.index') }}" class="bg-gray-200 text-on-secondary-fixed-variant px-6 py-2 rounded-md font-label-md text-label-md hover:bg-gray-300 transition-colors inline-flex items-center justify-center">
                    Batal
                </a>
                <button class="bg-primary text-on-primary px-6 py-2 rounded-md font-label-md text-label-md hover:brightness-110 shadow-sm transition-all active:scale-95" type="submit">
                    Buat Kampanye
                </button>
            </div>
        </form>
    </div>
</main>
<!-- Footer -->
<footer class="w-full py-8 mt-section-margin bg-surface-container-lowest border-t border-outline-variant">
    <div class="flex flex-col md:flex-row justify-between items-center px-page-padding max-w-screen-xl mx-auto gap-element-gap">
        <span class="font-headline-md text-headline-md font-semibold text-on-surface">CampaignManager</span>
        <div class="flex gap-6">
            <a class="text-secondary hover:underline font-label-md text-label-md transition-opacity" href="#">Documentation</a>
            <a class="text-secondary hover:underline font-label-md text-label-md transition-opacity" href="#">Privacy Policy</a>
            <a class="text-secondary hover:underline font-label-md text-label-md transition-opacity" href="#">Terms of Service</a>
        </div>
        <p class="font-body-sm text-body-sm text-secondary">© 2024 CampaignManager. All rights reserved.</p>
    </div>
</footer>
</body>
</html>
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
