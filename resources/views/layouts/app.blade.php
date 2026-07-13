<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Givespace Dashboard</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="bg-[#F7F3EE]">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-72 bg-gradient-to-b from-[#2C2825] via-[#4A3728] to-[#6F4A2E] text-white shadow-2xl relative">

        <div class="p-8 border-b border-white/10">

            <h1 class="text-3xl font-bold">
                Givespace
            </h1>

            <p class="text-sm text-gray-300 mt-2">
                Admin Dashboard
            </p>

        </div>

        <nav class="mt-8 space-y-2 px-4">

            <a href="/"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#D4A853] hover:text-black duration-300">

                🏠 Dashboard

            </a>

            <a href="/campaign"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#D4A853] hover:text-black duration-300">

                📁 Campaign

            </a>

            <a href="/donasi"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#D4A853] hover:text-black duration-300">

                ❤️ Donasi

            </a>

            <a href="/user"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#D4A853] hover:text-black duration-300">

                👥 User

            </a>

            <a href="/laporan"
               class="flex items-center gap-4 px-5 py-4 rounded-2xl hover:bg-[#D4A853] hover:text-black duration-300">

                📄 Laporan

            </a>

        </nav>

        <!-- Logout -->
        <div class="absolute bottom-8 left-4 right-4">

            <button
                class="w-full bg-red-500 hover:bg-red-600 py-4 rounded-2xl duration-300">

                🚪 Logout

            </button>

        </div>

    </aside>

    <!-- Main -->
    <main class="flex-1">

        <!-- Navbar -->
        <header class="bg-white shadow-md h-24 px-10 flex justify-between items-center">

            <div>

                <h2 class="text-3xl font-bold text-[#4A3728]">
                    Givespace Dashboard
                </h2>

                <p class="text-gray-500">
                    Selamat datang kembali Admin.
                </p>

            </div>

            <div class="flex items-center gap-6">

                <button class="text-xl">
                    🔔
                </button>

                <div class="flex items-center gap-3">

                    <img
                        src="https://ui-avatars.com/api/?name=Admin&background=D4A853&color=fff"
                        class="w-12 h-12 rounded-full">

                    <div>

                        <h4 class="font-semibold">
                            Admin
                        </h4>

                        <small class="text-gray-500">
                            Administrator
                        </small>

                    </div>

                </div>

            </div>

        </header>

        <!-- Isi Halaman -->
        <div class="p-10">

            @yield('content')

        </div>

    </main>

</div>

</body>
</html>
