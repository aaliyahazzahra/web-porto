<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The AL Intersection</title>


    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#F8FAFC] text-slate-900 antialiased font-sans">

    <nav class="bg-white/80 backdrop-blur-md border-b border-slate-100 sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between h-16 md:h-20 items-center">
                <div class="flex items-center gap-2">
                        <img src="{{ asset('images/logo.png') }}" alt="The AL Intersection" class="w-20 h-20 object-fit-cover rounded-custom" onerror="this.src=https://ui-avatars.com/api/?name=User&background=0D6EFD&color=fff&size=400">

                    {{-- <div class="w-8 h-8 md:w-10 md:h-10 bg-gradient-to-tr from-blue-600 to-indigo-600 rounded-lg md:rounded-xl flex items-center justify-center text-white shadow-lg">

                        <i data-lucide="layout-grid" class="w-4 h-4 md:w-5 md:h-5"></i>
                    </div> --}}
                    <span class="font-bold text-xl md:text-2xl tracking-tight">The AL Intersection.</span>
                </div>

                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-slate-600 hover:text-blue-600 font-medium">Home</a>
                    <a href="/projects" class="text-slate-600 hover:text-blue-600 font-medium">Proyek</a>
                    <a href="/about" class="text-slate-600 hover:text-blue-600 font-medium">Tentang</a>
                    <a href="/contact" class="bg-slate-900 text-white px-6 py-2.5 rounded-full hover:bg-blue-600 transition-all">Kontak</a>
                </div>

                <button id="menu-btn" class="md:hidden p-2 text-slate-600">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>

            <div id="mobile-menu" class="hidden md:hidden pb-6 space-y-4 border-t border-slate-50 pt-4">
                <a href="/" class="block text-slate-600 font-medium">Home</a>
                <a href="/projects" class="block text-slate-600 font-medium">Proyek</a>
                <a href="/contact" class="block bg-slate-900 text-white text-center py-3 rounded-xl">Kontak</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-white border-t border-slate-100 py-12">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <p class="text-slate-400 text-sm">© 2026 The AL Intersection. Built with Laravel & Tailwind.</p>
        </div>
    </footer>

    <script>
        lucide.createIcons();

        // Toggle Mobile Menu
        const btn = document.getElementById('menu-btn');
        const menu = document.getElementById('mobile-menu');
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>



</body>
</html>

{{-- <!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The AL Intersection - Bootstrap Version</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body { font-family: 'Inter', sans-serif; background-color: #f8fafc; }
        .navbar { backdrop-filter: blur(10px); background: rgba(255, 255, 255, 0.8); }
        .btn-primary { background-color: #0d6efd; border-radius: 12px; padding: 12px 24px; font-weight: bold; }
        .btn-outline-dark { border-radius: 12px; padding: 12px 24px; font-weight: bold; }
        .hero-glow {
            position: absolute; width: 300px; height: 300px;
            background: rgba(13, 110, 253, 0.1); filter: blur(80px);
            border-radius: 50%; z-index: -1;
        }
        .service-card {
            border: none; border-radius: 30px; transition: all 0.3s ease;
            padding: 40px; background: #fff; border: 1px solid #eee;
        }
        .service-card:hover { transform: translateY(-10px); border-color: #0d6efd; }
        .bg-dark-custom { background-color: #0f172a; color: white; }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg sticky-top border-bottom">
        <div class="container">
            <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="#">
                <div class="bg-primary text-white rounded-3 p-1 d-flex">
                    <i data-lucide="layout-grid" style="width: 20px; height: 20px;"></i>
                </div>
                The AL Intersection.
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-lg-4 align-items-center">
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-semibold" href="#">Proyek</a></li>
                    <li class="nav-item"><a class="btn btn-dark rounded-pill px-4" href="#">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="py-5 border-top bg-white mt-5">
        <div class="container text-center text-muted small">
            © 2024 The AL Intersection. Built with Laravel & Bootstrap 5.
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>lucide.createIcons();</script>
</body>
</html> --}}
