<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Givespace — Platform donasi dan berbagi kebaikan untuk Indonesia." />
    <title>Masuk — Givespace</title>

    <!-- Google Fonts: Playfair Display + Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <style>
        /* === GIVESPACE DESIGN SYSTEM === */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --brown-50:  #fdf8f4;
            --brown-100: #f5ede3;
            --brown-200: #ede0d4;
            --brown-300: #d4b896;
            --brown-400: #c89b7b;
            --brown-500: #a0724a;
            --brown-600: #8b5e3c;
            --brown-700: #6f4a2e;
            --brown-800: #543824;
            --brown-900: #3a271a;

            --grey-50:  #faf9f8;
            --grey-100: #f2efec;
            --grey-200: #e8e4df;
            --grey-300: #d9d3ce;
            --grey-400: #c4bdb6;
            --grey-500: #8c857f;
            --grey-600: #6e6560;
            --grey-700: #4e4540;
            --grey-800: #3d3530;
            --grey-900: #2c2825;

            --gold-400: #e8c47a;
            --gold-500: #d4a853;
            --gold-600: #b8893a;

            --success: #5e8b5e;
            --danger: #8b3a3a;

            --font-serif: 'Playfair Display', Georgia, serif;
            --font-sans: 'Inter', system-ui, sans-serif;
        }

        html { scroll-behavior: smooth; }
        body {
            font-family: var(--font-sans);
            -webkit-font-smoothing: antialiased;
            line-height: 1.6;
            color: var(--grey-900);
            background-color: #faf9f8;
            min-height: 100vh;
        }
        h1,h2,h3,h4,h5 { font-family: var(--font-serif); line-height: 1.2; }
        a, button, input, textarea, select { transition: all 0.2s ease; }
        input:focus, textarea:focus, select:focus { outline: none; box-shadow: 0 0 0 3px rgba(139,94,60,0.15); border-color: var(--brown-500) !important; }
        ::selection { background: var(--brown-200); color: var(--brown-800); }

        @keyframes fadeInUp { from { opacity:0; transform:translateY(20px); } to { opacity:1; transform:translateY(0); } }

        /* ===== LOGIN PAGE STYLES ===== */
        .login-page {
            min-height: 100vh;
            display: flex;
            background: #fdf8f4;
            font-family: 'Inter', system-ui, sans-serif;
        }

        /* LEFT PANEL (User Version) */
        .login-left {
            width: 55%;
            /* Warm, vibrant gradient for public users */
            background: linear-gradient(145deg, #8b5e3c 0%, #a0724a 30%, #c89b7b 70%, #d4a853 100%);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 48px 52px;
            overflow: hidden;
        }

        .login-left::before {
            content: '';
            position: absolute;
            top: -80px; right: -80px;
            width: 400px; height: 400px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.15) 0%, transparent 70%);
            pointer-events: none;
        }

        .login-left::after {
            content: '';
            position: absolute;
            bottom: -100px; left: -60px;
            width: 360px; height: 360px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(255,255,255,0.10) 0%, transparent 70%);
            pointer-events: none;
        }

        .login-left-pattern {
            position: absolute;
            inset: 0;
            opacity: 0.05;
            background-image: radial-gradient(circle, #fff 1px, transparent 1px);
            background-size: 40px 40px;
            pointer-events: none;
        }

        .login-brand {
            display: flex;
            align-items: center;
            gap: 14px;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.5s ease both;
        }

        .login-brand-logo {
            width: 48px; height: 48px;
            border-radius: 14px;
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.3);
            display: flex; align-items: center; justify-content: center;
            font-size: 22px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
        }

        .login-brand-name {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 22px;
            font-weight: 600;
            color: #fff;
            letter-spacing: -0.01em;
        }

        .login-brand-tagline {
            font-size: 11px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            color: rgba(255,255,255,0.8);
            font-weight: 500;
        }

        .login-hero {
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.55s ease 0.1s both;
        }

        .login-hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255,255,255,0.2);
            border: 1px solid rgba(255,255,255,0.3);
            backdrop-filter: blur(4px);
            padding: 6px 14px;
            border-radius: 999px;
            font-size: 11px;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: #fff;
            font-weight: 600;
            margin-bottom: 24px;
        }

        .login-hero-badge::before {
            content: '❤️';
            font-size: 12px;
        }

        .login-hero h1 {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: clamp(32px, 3.5vw, 48px);
            font-weight: 600;
            color: #fff;
            line-height: 1.15;
            margin-bottom: 16px;
        }

        .login-hero h1 em {
            font-style: italic;
            color: #f5ede3;
        }

        .login-hero-desc {
            font-size: 15px;
            line-height: 1.75;
            color: rgba(255,255,255,0.9);
            max-width: 400px;
        }

        .login-features {
            display: flex;
            flex-direction: column;
            gap: 12px;
            position: relative;
            z-index: 1;
            animation: fadeInUp 0.55s ease 0.2s both;
        }

        .login-feature-card {
            display: flex;
            align-items: center;
            gap: 14px;
            background: rgba(255,255,255,0.1);
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 16px;
            padding: 14px 18px;
            backdrop-filter: blur(8px);
            transition: all 0.25s ease;
        }

        .login-feature-card:hover {
            background: rgba(255,255,255,0.15);
            border-color: rgba(255,255,255,0.3);
            transform: translateX(4px);
        }

        .login-feature-icon {
            width: 40px; height: 40px;
            border-radius: 12px;
            background: #fff;
            display: flex; align-items: center; justify-content: center;
            font-size: 18px;
            flex-shrink: 0;
            color: #a0724a;
        }

        .login-feature-title {
            font-size: 13px;
            font-weight: 600;
            color: #fff;
            margin-bottom: 2px;
        }

        .login-feature-desc {
            font-size: 12px;
            color: rgba(255,255,255,0.8);
            line-height: 1.5;
        }

        .login-stats {
            display: flex;
            gap: 32px;
            position: relative;
            z-index: 1;
            padding-top: 24px;
            border-top: 1px solid rgba(255,255,255,0.2);
            animation: fadeInUp 0.55s ease 0.3s both;
        }

        .login-stat {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .login-stat-num {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 22px;
            font-weight: 700;
            color: #fff;
        }

        .login-stat-label {
            font-size: 11px;
            color: rgba(255,255,255,0.8);
            letter-spacing: 0.05em;
        }

        /* RIGHT PANEL */
        .login-right {
            width: 45%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 48px 40px;
            background: #fdf8f4;
        }

        .login-form-container {
            width: 100%;
            max-width: 420px;
            animation: fadeInUp 0.5s ease 0.15s both;
        }

        .login-form-header {
            margin-bottom: 36px;
        }

        .login-form-label {
            font-size: 11px;
            letter-spacing: 0.2em;
            text-transform: uppercase;
            font-weight: 600;
            color: #a0724a;
            margin-bottom: 10px;
            display: block;
        }

        .login-form-title {
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 32px;
            font-weight: 600;
            color: #2c2825;
            line-height: 1.15;
            margin-bottom: 8px;
        }

        .login-form-subtitle {
            font-size: 13px;
            color: #8c857f;
            line-height: 1.6;
        }

        .login-alert-error {
            background: #fdf3f3;
            border: 1px solid #e8c0c0;
            border-left: 3px solid #8b3a3a;
            border-radius: 12px;
            padding: 12px 16px;
            margin-bottom: 20px;
            font-size: 13px;
            color: #8b3a3a;
            line-height: 1.5;
            display: none;
        }

        .login-alert-success {
            background: #f3fdf3;
            border: 1px solid #c0e8c0;
            border-left: 3px solid #5e8b5e;
            border-radius: 12px;
            padding: 12px 16px;
            margin-bottom: 20px;
            font-size: 13px;
            color: #3a5e3a;
            display: none;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #3d3530;
            margin-bottom: 8px;
        }

        .form-input {
            width: 100%;
            padding: 13px 18px;
            font-size: 14px;
            font-family: 'Inter', system-ui, sans-serif;
            color: #2c2825;
            background: #fff;
            border: 1.5px solid #e8e4df;
            border-radius: 12px;
            outline: none;
            transition: all 0.2s ease;
        }

        .form-input:hover {
            border-color: #d4b896;
        }

        .form-input:focus {
            border-color: #a0724a;
            box-shadow: 0 0 0 3px rgba(139,94,60,0.10);
            background: #fefcfa;
        }

        .form-input::placeholder {
            color: #c4bdb6;
        }

        .form-input-wrapper {
            position: relative;
        }

        .form-input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #c4bdb6;
            font-size: 16px;
            pointer-events: none;
            transition: color 0.2s;
        }

        .form-input-wrapper .form-input {
            padding-left: 46px;
        }

        .form-input-wrapper:focus-within .form-input-icon {
            color: #a0724a;
        }

        .form-input-wrapper.has-toggle .form-input {
            padding-right: 48px;
        }

        .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            cursor: pointer;
            color: #c4bdb6;
            font-size: 16px;
            padding: 4px;
            display: flex;
            align-items: center;
            transition: color 0.2s;
        }

        .password-toggle:hover { color: #8b5e3c; }

        .form-row-check {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
        }

        .form-check-label {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 13px;
            color: #6e6560;
            cursor: pointer;
            user-select: none;
        }

        .form-check {
            width: 17px; height: 17px;
            accent-color: #8b5e3c;
            border-radius: 4px;
            cursor: pointer;
            flex-shrink: 0;
        }

        .form-link {
            font-size: 13px;
            font-weight: 600;
            color: #8b5e3c;
            text-decoration: none;
        }

        .form-link:hover { color: #6f4a2e; }

        .btn-login {
            width: 100%;
            padding: 14px 24px;
            font-size: 14px;
            font-weight: 600;
            font-family: 'Inter', system-ui, sans-serif;
            letter-spacing: 0.02em;
            color: #fff;
            background: linear-gradient(135deg, #a0724a 0%, #8b5e3c 100%);
            border: none;
            border-radius: 12px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: all 0.25s ease;
            box-shadow: 0 4px 16px rgba(111,74,46,0.30);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #c89b7b 0%, #a0724a 100%);
            opacity: 0;
            transition: opacity 0.25s ease;
        }

        .btn-login:hover {
            transform: translateY(-1px);
            box-shadow: 0 8px 24px rgba(111,74,46,0.35);
        }

        .btn-login:hover::before { opacity: 1; }

        .btn-login:active {
            transform: translateY(0);
            box-shadow: 0 4px 12px rgba(111,74,46,0.25);
        }

        .btn-login span { position: relative; z-index: 1; }

        .login-divider {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 24px 0;
            color: #c4bdb6;
            font-size: 12px;
        }

        .login-divider::before,
        .login-divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e8e4df;
        }

        .btn-public {
            width: 100%;
            padding: 13px 24px;
            font-size: 14px;
            font-weight: 500;
            font-family: 'Inter', system-ui, sans-serif;
            color: #6e6560;
            background: transparent;
            border: 1.5px solid #e8e4df;
            border-radius: 12px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.2s ease;
        }

        .btn-public:hover {
            color: #3d3530;
            border-color: #d4b896;
            background: #fdf8f4;
        }

        .login-form-footer {
            margin-top: 32px;
            text-align: center;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .login-footer-text {
            font-size: 11px;
            color: #c4bdb6;
            line-height: 1.6;
        }

        .admin-link {
            font-size: 12px;
            color: #a0724a;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 6px;
        }

        .admin-link:hover {
            color: #6f4a2e;
            text-decoration: underline;
        }

        @media (max-width: 900px) {
            .login-page { flex-direction: column; }
            .login-left { width: 100%; padding: 36px 28px; min-height: 280px; }
            .login-right { width: 100%; padding: 36px 24px; }
            .login-stats { gap: 20px; }
            .login-hero h1 { font-size: 28px; }
        }
    </style>
</head>
<body>

<div class="login-page">
    <!-- LEFT: Brand Panel -->
    <div class="login-left">
        <div class="login-left-pattern"></div>

        <!-- Brand -->
        <div class="login-brand">
            <div class="login-brand-logo">🤝</div>
            <div>
                <div class="login-brand-name">GiveSpace</div>
                <div class="login-brand-tagline">Platform Berbagi</div>
            </div>
        </div>

        <!-- Hero -->
        <div class="login-hero">
            <div class="login-hero-badge">Orang Baik</div>
            <h1>Mari sebarkan <em>kebaikan</em> bersama</h1>
            <p class="login-hero-desc">
                Satu langkah kecil Anda dapat membawa perubahan besar bagi mereka yang membutuhkan. Mulai berdonasi sekarang.
            </p>

            <div class="login-features" style="margin-top:32px;">
                <div class="login-feature-card">
                    <div class="login-feature-icon">✨</div>
                    <div>
                        <div class="login-feature-title">Donasi Mudah</div>
                        <div class="login-feature-desc">Beragam metode pembayaran yang aman</div>
                    </div>
                </div>
                <div class="login-feature-card">
                    <div class="login-feature-icon">شف</div>
                    <div>
                        <div class="login-feature-title">100% Transparan</div>
                        <div class="login-feature-desc">Laporan penyaluran dana yang jelas</div>
                    </div>
                </div>
                <div class="login-feature-card">
                    <div class="login-feature-icon">🌱</div>
                    <div>
                        <div class="login-feature-title">Dampak Nyata</div>
                        <div class="login-feature-desc">Lihat langsung perkembangan kampanye</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="login-stats">
            <div class="login-stat">
                <div class="login-stat-num">500+</div>
                <div class="login-stat-label">Donatur</div>
            </div>
            <div class="login-stat">
                <div class="login-stat-num">Rp 1M+</div>
                <div class="login-stat-label">Tersalurkan</div>
            </div>
            <div class="login-stat">
                <div class="login-stat-num">50+</div>
                <div class="login-stat-label">Kampanye Sukses</div>
            </div>
        </div>
    </div>

    <!-- RIGHT: Login Form -->
    <div class="login-right">
        <div class="login-form-container">
            <!-- Header -->
            <div class="login-form-header">
                <span class="login-form-label">✦ Selamat Datang</span>
                <h2 class="login-form-title">Masuk ke Akun<br>Anda</h2>
                <p class="login-form-subtitle">Lanjutkan langkah kebaikan Anda dengan masuk ke akun GiveSpace.</p>
            </div>

            <!-- Session Status -->
            @if (session('status'))
                <div class="login-alert-success" id="successAlert" style="display: block;">
                    ✓ {{ session('status') }}
                </div>
            @endif

            <!-- Error Alert -->
            @if ($errors->any())
                <div class="login-alert-error" id="errorAlert" style="display: block;">
                    <strong>⚠ Login Gagal:</strong>
                    <div id="errorMessage">
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- Form -->
            <form id="loginForm" method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email -->
                <div class="form-group">
                    <label for="email" class="form-label">Alamat Email</label>
                    <div class="form-input-wrapper">
                        <span class="form-input-icon">✉</span>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                            autocomplete="username"
                            placeholder="nama@email.com"
                            class="form-input"
                        />
                    </div>
                </div>

                <!-- Password -->
                <div class="form-group">
                    <label for="password" class="form-label">Kata Sandi</label>
                    <div class="form-input-wrapper has-toggle">
                        <span class="form-input-icon">🔑</span>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            autocomplete="current-password"
                            placeholder="••••••••"
                            class="form-input"
                        />
                        <button type="button" class="password-toggle" id="togglePassword" title="Tampilkan/Sembunyikan sandi">
                            👁
                        </button>
                    </div>
                </div>

                <!-- Remember & Link -->
                <div class="form-row-check">
                    <label class="form-check-label">
                        <input type="checkbox" name="remember" class="form-check" id="remember" />
                        Ingat saya
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="form-link">Lupa sandi?</a>
                    @else
                        <a href="/" class="form-link">← Halaman Utama</a>
                    @endif
                </div>

                <!-- Submit -->
                <button type="submit" class="btn-login" id="submitBtn">
                    <span>Masuk Sekarang</span>
                    <span>→</span>
                </button>
            </form>

            <!-- Divider -->
            <div class="login-divider">Belum punya akun?</div>

            <!-- Back to register / public -->
            <a href="{{ route('register') }}" class="btn-public">
                ✨ Daftar Akun Baru
            </a>

            <!-- Footer -->
            <div class="login-form-footer">
                <a href="{{ route('admin.login') }}" class="admin-link">
                    💼 Masuk sebagai Administrator
                </a>
                <p class="login-footer-text">
                    GiveSpace &bull; © <span id="year"></span> &bull; Terpercaya & Transparan
                </p>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('year').textContent = new Date().getFullYear();

// Password toggle
const toggleBtn = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');
if (toggleBtn && passwordInput) {
    toggleBtn.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.textContent = type === 'password' ? '👁' : '🙈';
    });
}

// Disable form after submit to prevent double click
const loginForm = document.getElementById('loginForm');
const submitBtn = document.getElementById('submitBtn');

if (loginForm && submitBtn) {
    loginForm.addEventListener('submit', function () {
        submitBtn.innerHTML = '<span>Memproses...</span>';
        submitBtn.style.opacity = '0.8';
        submitBtn.style.cursor = 'not-allowed';
    });
}
</script>

</body>
</html>
