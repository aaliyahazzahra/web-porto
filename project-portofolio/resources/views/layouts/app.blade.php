<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Saya</title>
    <!-- Tailwind CSS via CDN -->
    <script src="[https://cdn.tailwindcss.com](https://cdn.tailwindcss.com)"></script>
    <!-- Lucide Icons -->
    <script src="[https://unpkg.com/lucide@latest](https://unpkg.com/lucide@latest)"></script>
</head>
<body class="bg-slate-50 text-slate-900 font-sans">

    <!-- Navbar (Seperti AppBar di Flutter) -->
    <nav class="bg-white border-b border-slate-200 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16 items-center">
                <div class="flex-shrink-0 flex items-center gap-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white">
                        <i data-lucide="code"></i>
                    </div>
                    <span class="font-bold text-xl tracking-tight">DevFolio</span>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <a href="/" class="text-slate-600 hover:text-blue-600 px-3 py-2 font-medium">Home</a>
                        <a href="/projects" class="text-slate-600 hover:text-blue-600 px-3 py-2 font-medium">Proyek</a>
                        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-full hover:bg-blue-700 transition">Kontak</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content Area (Seperti Body di Flutter) -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200 py-12">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-slate-500">© 2024 Portofolio Saya. Dibuat dengan Laravel & Tailwind.</p>
        </div>
    </footer>

    <script>
        // Inisialisasi Icon Lucide
        lucide.createIcons();
    </script>
</body>
</html>

