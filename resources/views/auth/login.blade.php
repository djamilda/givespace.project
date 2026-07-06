<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Masuk ke akun GiveSpace Anda. Platform donasi online terpercaya untuk membantu sesama.">
    <title>Login — GiveSpace | Platform Donasi Terpercaya</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        /* ========== RESET & BASE ========== */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            min-height: 100vh;
            background: #0a0e1a;
            color: #e2e8f0;
            overflow-x: hidden;
        }

        /* ========== LAYOUT ========== */
        .login-wrapper {
            display: flex;
            min-height: 100vh;
        }

        /* ========== LEFT HERO PANEL ========== */
        .hero-panel {
            flex: 1;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #312e81 100%);
        }

        .hero-panel::before {
            content: '';
            position: absolute;
            inset: 0;
            background:
                radial-gradient(ellipse 600px 600px at 20% 30%, rgba(99, 102, 241, 0.15), transparent),
                radial-gradient(ellipse 400px 400px at 80% 70%, rgba(168, 85, 247, 0.12), transparent),
                radial-gradient(ellipse 300px 300px at 50% 50%, rgba(59, 130, 246, 0.08), transparent);
            z-index: 1;
        }

        /* Animated mesh gradient */
        .hero-mesh {
            position: absolute;
            inset: 0;
            z-index: 0;
        }

        .hero-mesh .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.4;
            animation: blobFloat 15s ease-in-out infinite alternate;
        }

        .hero-mesh .blob:nth-child(1) {
            width: 500px;
            height: 500px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            top: -10%;
            left: -5%;
            animation-delay: 0s;
        }

        .hero-mesh .blob:nth-child(2) {
            width: 350px;
            height: 350px;
            background: linear-gradient(135deg, #3b82f6, #06b6d4);
            bottom: -5%;
            right: -5%;
            animation-delay: -5s;
        }

        .hero-mesh .blob:nth-child(3) {
            width: 250px;
            height: 250px;
            background: linear-gradient(135deg, #a855f7, #ec4899);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: -10s;
        }

        @keyframes blobFloat {
            0% { transform: translate(0, 0) scale(1); }
            33% { transform: translate(30px, -40px) scale(1.05); }
            66% { transform: translate(-20px, 20px) scale(0.95); }
            100% { transform: translate(10px, -10px) scale(1.02); }
        }

        /* Floating particles */
        .particles {
            position: absolute;
            inset: 0;
            z-index: 2;
            overflow: hidden;
        }

        .particle {
            position: absolute;
            width: 4px;
            height: 4px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: particleRise linear infinite;
        }

        .particle:nth-child(1) { left: 10%; animation-duration: 12s; animation-delay: 0s; width: 3px; height: 3px; }
        .particle:nth-child(2) { left: 25%; animation-duration: 15s; animation-delay: -3s; width: 5px; height: 5px; }
        .particle:nth-child(3) { left: 40%; animation-duration: 10s; animation-delay: -5s; width: 2px; height: 2px; }
        .particle:nth-child(4) { left: 55%; animation-duration: 14s; animation-delay: -7s; width: 4px; height: 4px; }
        .particle:nth-child(5) { left: 70%; animation-duration: 11s; animation-delay: -2s; width: 3px; height: 3px; }
        .particle:nth-child(6) { left: 85%; animation-duration: 13s; animation-delay: -9s; width: 6px; height: 6px; }
        .particle:nth-child(7) { left: 15%; animation-duration: 16s; animation-delay: -4s; width: 2px; height: 2px; }
        .particle:nth-child(8) { left: 60%; animation-duration: 9s; animation-delay: -6s; width: 3px; height: 3px; }

        @keyframes particleRise {
            0% { bottom: -10px; opacity: 0; transform: translateX(0); }
            10% { opacity: 0.6; }
            90% { opacity: 0.2; }
            100% { bottom: 110%; opacity: 0; transform: translateX(40px); }
        }

        /* Hero content */
        .hero-content {
            position: relative;
            z-index: 3;
            padding: 3rem;
            max-width: 520px;
            animation: heroSlideIn 0.8s ease-out;
        }

        @keyframes heroSlideIn {
            from { opacity: 0; transform: translateX(-30px); }
            to { opacity: 1; transform: translateX(0); }
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            background: rgba(99, 102, 241, 0.15);
            border: 1px solid rgba(99, 102, 241, 0.25);
            border-radius: 100px;
            font-size: 0.8rem;
            font-weight: 500;
            color: #a5b4fc;
            margin-bottom: 1.5rem;
            backdrop-filter: blur(10px);
        }

        .hero-badge .pulse-dot {
            width: 8px;
            height: 8px;
            background: #22c55e;
            border-radius: 50%;
            animation: pulseDot 2s ease-in-out infinite;
        }

        @keyframes pulseDot {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.3); }
        }

        .hero-title {
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 1.25rem;
            background: linear-gradient(135deg, #ffffff 30%, #a5b4fc 70%, #c4b5fd 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-subtitle {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #94a3b8;
            margin-bottom: 2.5rem;
            font-weight: 400;
        }

        /* Stats row */
        .hero-stats {
            display: flex;
            gap: 2rem;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: #ffffff;
        }

        .stat-label {
            font-size: 0.8rem;
            color: #64748b;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* ========== RIGHT LOGIN PANEL ========== */
        .login-panel {
            flex: 0 0 520px;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            position: relative;
            background: #0f1424;
            overflow-y: auto;
        }

        .login-panel::before {
            content: '';
            position: absolute;
            left: 0;
            top: 10%;
            bottom: 10%;
            width: 1px;
            background: linear-gradient(to bottom, transparent, rgba(99, 102, 241, 0.3), transparent);
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            animation: cardFadeIn 0.6s ease-out 0.2s both;
        }

        @keyframes cardFadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Logo */
        .login-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 2rem;
        }

        .logo-icon {
            width: 44px;
            height: 44px;
            background: linear-gradient(135deg, #6366f1, #8b5cf6);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.3);
            position: relative;
            overflow: hidden;
        }

        .logo-icon::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, transparent 40%, rgba(255,255,255,0.15));
        }

        .logo-icon svg {
            position: relative;
            z-index: 1;
        }

        .logo-text {
            font-size: 1.35rem;
            font-weight: 700;
            background: linear-gradient(135deg, #e2e8f0, #a5b4fc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .login-heading {
            font-size: 1.65rem;
            font-weight: 700;
            color: #f1f5f9;
            margin-bottom: 0.4rem;
        }

        .login-subheading {
            font-size: 0.9rem;
            color: #64748b;
            margin-bottom: 2rem;
        }

        /* ========== SOCIAL LOGIN ========== */
        .social-login {
            display: flex;
            gap: 12px;
            margin-bottom: 1.75rem;
        }

        .social-btn {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 12px 16px;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.25s ease;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.08);
            background: rgba(255, 255, 255, 0.04);
            color: #cbd5e1;
            font-family: 'Inter', sans-serif;
        }

        .social-btn:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .social-btn:active {
            transform: translateY(0);
        }

        .social-btn svg {
            flex-shrink: 0;
        }

        /* Divider */
        .divider {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 1.75rem;
        }

        .divider-line {
            flex: 1;
            height: 1px;
            background: rgba(255, 255, 255, 0.06);
        }

        .divider-text {
            font-size: 0.75rem;
            color: #475569;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            font-weight: 500;
        }

        /* ========== FORM STYLES ========== */
        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-label {
            display: block;
            font-size: 0.8rem;
            font-weight: 500;
            color: #94a3b8;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 14px;
            top: 50%;
            transform: translateY(-50%);
            color: #475569;
            transition: color 0.2s ease;
            pointer-events: none;
        }

        .form-input {
            width: 100%;
            padding: 14px 14px 14px 44px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            color: #f1f5f9;
            font-size: 0.9rem;
            font-family: 'Inter', sans-serif;
            transition: all 0.25s ease;
            outline: none;
        }

        .form-input::placeholder {
            color: #3e4a63;
        }

        .form-input:hover {
            border-color: rgba(255, 255, 255, 0.12);
        }

        .form-input:focus {
            border-color: #6366f1;
            background: rgba(99, 102, 241, 0.05);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.12);
        }

        .form-input:focus ~ .input-icon,
        .input-wrapper:has(.form-input:focus) .input-icon {
            color: #818cf8;
        }

        /* Password toggle */
        .password-toggle {
            position: absolute;
            right: 14px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #475569;
            cursor: pointer;
            padding: 4px;
            transition: color 0.2s ease;
            display: flex;
            align-items: center;
        }

        .password-toggle:hover {
            color: #94a3b8;
        }

        /* Remember & Forgot */
        .form-options {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1.75rem;
        }

        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
        }

        .checkbox-wrapper input[type="checkbox"] {
            appearance: none;
            -webkit-appearance: none;
            width: 18px;
            height: 18px;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 5px;
            background: rgba(255, 255, 255, 0.04);
            cursor: pointer;
            transition: all 0.2s ease;
            position: relative;
        }

        .checkbox-wrapper input[type="checkbox"]:checked {
            background: #6366f1;
            border-color: #6366f1;
        }

        .checkbox-wrapper input[type="checkbox"]:checked::after {
            content: '';
            position: absolute;
            left: 5.5px;
            top: 2px;
            width: 5px;
            height: 9px;
            border: solid #fff;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }

        .checkbox-label {
            font-size: 0.8rem;
            color: #94a3b8;
            user-select: none;
        }

        .forgot-link {
            font-size: 0.8rem;
            color: #818cf8;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .forgot-link:hover {
            color: #a5b4fc;
        }

        /* Submit button */
        .submit-btn {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #6366f1, #7c3aed);
            border: none;
            border-radius: 12px;
            color: #ffffff;
            font-size: 0.95rem;
            font-weight: 600;
            font-family: 'Inter', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .submit-btn::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, #818cf8, #a78bfa);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .submit-btn:hover::before {
            opacity: 1;
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.35);
        }

        .submit-btn:active {
            transform: translateY(0);
            box-shadow: 0 4px 15px rgba(99, 102, 241, 0.25);
        }

        .submit-btn span {
            position: relative;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        /* Loading spinner */
        .btn-spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top-color: #fff;
            border-radius: 50%;
            animation: spin 0.6s linear infinite;
        }

        .submit-btn.loading .btn-spinner {
            display: block;
        }

        .submit-btn.loading .btn-text {
            display: none;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Register link */
        .register-prompt {
            text-align: center;
            margin-top: 1.75rem;
            font-size: 0.85rem;
            color: #64748b;
        }

        .register-prompt a {
            color: #818cf8;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .register-prompt a:hover {
            color: #a5b4fc;
        }

        /* ========== RESPONSIVE ========== */
        @media (max-width: 1024px) {
            .hero-panel {
                display: none;
            }

            .login-panel {
                flex: 1;
                background: linear-gradient(135deg, #0a0e1a 0%, #0f1424 100%);
            }

            .login-panel::before {
                display: none;
            }
        }

        @media (max-width: 480px) {
            .login-panel {
                padding: 1.25rem;
            }

            .social-login {
                flex-direction: column;
            }

            .hero-title {
                font-size: 2rem;
            }
        }

        /* ========== TRUST BADGES ========== */
        .trust-section {
            margin-top: 2rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(255, 255, 255, 0.05);
        }

        .trust-badges {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
        }

        .trust-badge {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 0.7rem;
            color: #475569;
        }

        .trust-badge svg {
            flex-shrink: 0;
        }

        /* ========== INPUT FLOATING LABEL ANIMATION ========== */
        .form-input:focus + .floating-highlight {
            opacity: 1;
        }

        /* ========== SUBTLE GLOW EFFECT ========== */
        .glow-ring {
            position: absolute;
            top: -150px;
            right: -150px;
            width: 300px;
            height: 300px;
            background: radial-gradient(circle, rgba(99, 102, 241, 0.08), transparent 70%);
            border-radius: 50%;
            pointer-events: none;
        }

        /* ========== ERROR STATES ========== */
        .form-input.error {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        .error-message {
            font-size: 0.75rem;
            color: #f87171;
            margin-top: 6px;
            display: none;
        }

        .form-group.has-error .error-message {
            display: block;
        }

        /* ========== SUCCESS TOAST ========== */
        .toast {
            position: fixed;
            top: 24px;
            right: 24px;
            padding: 14px 20px;
            border-radius: 12px;
            font-size: 0.85rem;
            font-weight: 500;
            z-index: 1000;
            transform: translateX(120%);
            transition: transform 0.4s cubic-bezier(0.22, 1, 0.36, 1);
        }

        .toast.show {
            transform: translateX(0);
        }

        .toast.error {
            background: rgba(239, 68, 68, 0.15);
            border: 1px solid rgba(239, 68, 68, 0.3);
            color: #fca5a5;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <!-- ===== LEFT HERO PANEL ===== -->
        <div class="hero-panel" aria-hidden="true">
            <!-- Animated blobs -->
            <div class="hero-mesh">
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
            </div>

            <!-- Floating particles -->
            <div class="particles">
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
                <div class="particle"></div>
            </div>

            <!-- Hero content -->
            <div class="hero-content">
                <div class="hero-badge">
                    <span class="pulse-dot"></span>
                    Platform Donasi #1 di Indonesia
                </div>

                <h1 class="hero-title">
                    Bersama Wujudkan<br>
                    Kebaikan Tanpa<br>
                    Batas
                </h1>

                <p class="hero-subtitle">
                    Bergabunglah dengan jutaan orang yang telah memberikan dampak nyata melalui donasi di GiveSpace. Setiap kontribusi membawa perubahan.
                </p>

                <div class="hero-stats">
                    <div class="stat-item">
                        <span class="stat-value">12.5K+</span>
                        <span class="stat-label">Kampanye</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">Rp 85M+</span>
                        <span class="stat-label">Terkumpul</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">250K+</span>
                        <span class="stat-label">Donatur</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ===== RIGHT LOGIN PANEL ===== -->
        <div class="login-panel">
            <div class="glow-ring"></div>

            <div class="login-card">
                <!-- Logo -->
                <div class="login-logo">
                    <div class="logo-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" fill="white"/>
                        </svg>
                    </div>
                    <span class="logo-text">GiveSpace</span>
                </div>

                <h2 class="login-heading">Selamat Datang Kembali</h2>
                <p class="login-subheading">Masuk untuk melanjutkan kebaikanmu</p>

                <!-- Social Login -->
                <div class="social-login">
                    <button type="button" class="social-btn" id="btn-google">
                        <svg width="18" height="18" viewBox="0 0 18 18">
                            <path d="M17.64 9.2c0-.637-.057-1.251-.164-1.84H9v3.481h4.844a4.14 4.14 0 01-1.796 2.716v2.259h2.908c1.702-1.567 2.684-3.875 2.684-6.615z" fill="#4285F4"/>
                            <path d="M9 18c2.43 0 4.467-.806 5.956-2.18l-2.908-2.259c-.806.54-1.837.86-3.048.86-2.344 0-4.328-1.584-5.036-3.711H.957v2.332A8.997 8.997 0 009 18z" fill="#34A853"/>
                            <path d="M3.964 10.71A5.41 5.41 0 013.682 9c0-.593.102-1.17.282-1.71V4.958H.957A8.996 8.996 0 000 9c0 1.452.348 2.827.957 4.042l3.007-2.332z" fill="#FBBC05"/>
                            <path d="M9 3.58c1.321 0 2.508.454 3.44 1.345l2.582-2.58C13.463.891 11.426 0 9 0A8.997 8.997 0 00.957 4.958L3.964 7.29C4.672 5.163 6.656 3.58 9 3.58z" fill="#EA4335"/>
                        </svg>
                        Google
                    </button>

                    <button type="button" class="social-btn" id="btn-facebook">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="#1877F2">
                            <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                        </svg>
                        Facebook
                    </button>
                </div>

                <!-- Divider -->
                <div class="divider">
                    <div class="divider-line"></div>
                    <span class="divider-text">atau masuk dengan email</span>
                    <div class="divider-line"></div>
                </div>

                <!-- Login Form -->
                <form method="POST" action="/login" id="loginForm" novalidate>
                    @csrf

                    <div class="form-group" id="email-group">
                        <label class="form-label" for="email">Alamat Email</label>
                        <div class="input-wrapper">
                            <input
                                type="email"
                                name="email"
                                id="email"
                                class="form-input"
                                placeholder="nama@email.com"
                                autocomplete="email"
                                required
                            >
                            <div class="input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="4" width="20" height="16" rx="2"/>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                </svg>
                            </div>
                        </div>
                        <div class="error-message" id="email-error">Masukkan alamat email yang valid</div>
                    </div>

                    <div class="form-group" id="password-group">
                        <label class="form-label" for="password">Kata Sandi</label>
                        <div class="input-wrapper">
                            <input
                                type="password"
                                name="password"
                                id="password"
                                class="form-input"
                                placeholder="Masukkan kata sandi"
                                autocomplete="current-password"
                                required
                            >
                            <div class="input-icon">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                            </div>
                            <button type="button" class="password-toggle" id="togglePassword" aria-label="Toggle password visibility">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="eyeIcon">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                    <circle cx="12" cy="12" r="3"/>
                                </svg>
                            </button>
                        </div>
                        <div class="error-message" id="password-error">Kata sandi minimal 6 karakter</div>
                    </div>

                    <div class="form-options">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="remember" id="remember">
                            <span class="checkbox-label">Ingat saya</span>
                        </label>
                        <a href="/forgot-password" class="forgot-link">Lupa kata sandi?</a>
                    </div>

                    <button type="submit" class="submit-btn" id="submitBtn">
                        <span>
                            <span class="btn-text">Masuk ke Akun</span>
                            <div class="btn-spinner"></div>
                        </span>
                    </button>
                </form>

                <p class="register-prompt">
                    Belum punya akun? <a href="/register">Daftar Sekarang</a>
                </p>

                <!-- Trust badges -->
                <div class="trust-section">
                    <div class="trust-badges">
                        <div class="trust-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#22c55e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                                <polyline points="9 12 11 14 15 10"/>
                            </svg>
                            SSL Encrypted
                        </div>
                        <div class="trust-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                                <polyline points="22 4 12 14.01 9 11.01"/>
                            </svg>
                            Terverifikasi OJK
                        </div>
                        <div class="trust-badge">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#a855f7" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                <circle cx="9" cy="7" r="4"/>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                            </svg>
                            250K+ Pengguna
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Toast notification -->
    <div class="toast error" id="toast"></div>

    <script>
        // ===== PASSWORD TOGGLE =====
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('password');
        const eyeIcon = document.getElementById('eyeIcon');

        togglePassword.addEventListener('click', () => {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';

            eyeIcon.innerHTML = isPassword
                ? '<path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"/><line x1="1" y1="1" x2="23" y2="23"/>'
                : '<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/>';
        });

        // ===== FORM VALIDATION =====
        const form = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const submitBtn = document.getElementById('submitBtn');

        function validateEmail(email) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
        }

        function showError(groupId, show) {
            const group = document.getElementById(groupId);
            const input = group.querySelector('.form-input');

            if (show) {
                group.classList.add('has-error');
                input.classList.add('error');
            } else {
                group.classList.remove('has-error');
                input.classList.remove('error');
            }
        }

        // Remove error on input
        emailInput.addEventListener('input', () => showError('email-group', false));
        passwordInput.addEventListener('input', () => showError('password-group', false));

        form.addEventListener('submit', (e) => {
            let hasError = false;

            if (!validateEmail(emailInput.value)) {
                showError('email-group', true);
                hasError = true;
            }

            if (passwordInput.value.length < 6) {
                showError('password-group', true);
                hasError = true;
            }

            if (hasError) {
                e.preventDefault();
                return;
            }

            // Show loading state
            submitBtn.classList.add('loading');
            submitBtn.disabled = true;
        });

        // ===== TOAST NOTIFICATION =====
        function showToast(message, type = 'error') {
            const toast = document.getElementById('toast');
            toast.textContent = message;
            toast.className = `toast ${type} show`;

            setTimeout(() => {
                toast.classList.remove('show');
            }, 4000);
        }

        // Show Laravel validation errors if any
        @if($errors->any())
            showToast('{{ $errors->first() }}');
        @endif

        // ===== SUBTLE INPUT ANIMATIONS =====
        document.querySelectorAll('.form-input').forEach(input => {
            input.addEventListener('focus', function() {
                this.closest('.form-group').style.transform = 'translateY(-1px)';
                this.closest('.form-group').style.transition = 'transform 0.2s ease';
            });

            input.addEventListener('blur', function() {
                this.closest('.form-group').style.transform = 'translateY(0)';
            });
        });
    </script>
</body>
</html>