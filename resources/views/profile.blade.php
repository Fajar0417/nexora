<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta charset="UTF-8" />
    <title>Laravel + Tailwind</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .card {
            background-color: white;
            border: 1px solid transparent;
            box-shadow: 0 0 10px rgb(0 0 0 / 0.05);
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            border-color: #4B2E1E;
            box-shadow: 0 0 10px rgb(0 0 0 / 0.1);
        }

        @keyframes slideFadeIn {
            0% {
                opacity: 0;
                transform: translateX(100px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-slide-fade-in {
            animation: slideFadeIn 1s ease forwards;
        }

        /* Animasi fade-in naik untuk teks dan tombol */
        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }

            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fade-in-up {
            animation: fadeInUp 1s ease forwards;
        }

        /* Animasi untuk card */
        .fade-in-up {
            animation: fadeInUp 1s ease-out both;
        }

        .delay-1 {
            animation-delay: 0.2s;
        }

        .delay-2 {
            animation-delay: 0.4s;
        }

        .delay-3 {
            animation-delay: 0.6s;
        }

        .w-full.overflow-hidden.leading-none {
            margin-bottom: 0;
            padding-bottom: 0;
        }

        @keyframes fadeInLeft {
            0% {
                opacity: 0;
                transform: translateX(-50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInRight {
            0% {
                opacity: 0;
                transform: translateX(50px);
            }

            100% {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeSlideLeft {
            from {
                opacity: 0;
                transform: translateX(50px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .animate-fade-in-left {
            animation: fadeInLeft 1s ease-out both;
        }

        .animate-fade-in-right {
            animation: fadeInRight 1s ease-out both;
        }
    </style>
</head>

<body class="bg-[#f7f9fc] min-h-screen flex items-center justify-center p-4">
<header class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="max-w-7xl mx-auto px-6 sm:px-10 md:px-20 py-4 flex justify-between items-center">
            <!-- Logo / Brand -->
            <a href="#" class="font-extrabold text-2xl tracking-wide bg-gradient-to-r from-blue-900 to-blue-400 bg-clip-text text-transparent">
                NEXORA<span>ID</span>
            </a>

            <!-- Menu Desktop -->
            <nav class="hidden md:flex gap-8 text-[#4B2E1E] text-lg items-center">
                <a href="{{ url('/') }}" class="hover:text-blue-900 transition">Beranda</a>
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" class="hover:text-blue-900 transition flex items-center gap-1">
                        Layanan
                        <svg class="w-4 h-4 transform" :class="{ 'rotate-180': open }" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.08 1.04l-4.25 4.66a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-52 bg-white shadow-lg rounded-md py-2 z-50">
                        <a href="{{ route('layanan.jasaweb') }}" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">Jasa Website</a>
                        <a href="{{ route('layanan.jasadesain') }}" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">Jasa Desain</a>
                        <a href="#Pemasaran Digital" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">Pemasaran Digital</a>
                        <a href="#SEO Advisory" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">SEO Advisory</a>
                        <a href="#Google Workspace" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">Google Workspace</a>
                    </div>
                </div>

                <a href="{{ route('profile') }}" class="hover:text-blue-900 transition">Profile</a>
                <a href="https://wa.me/6285761748595" target="_blank" class="block mt-3 text-center bg-gradient-to-r from-blue-900 to-blue-400 text-white px-4 py-2 rounded-md">
                    Hubungi Kami
                </a>

            </nav>

            <!-- Menu Mobile Button -->
            <button id="menu-toggle" class="md:hidden focus:outline-none">
                <svg class="w-6 h-6 text-[#4B2E1E]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white px-6 pt-4 pb-6">
            <a href="{{ url('/') }}" class="hover:text-blue-900 transition">Beranda</a>
            <div x-data="{ open: false }" class="relative">
                <button @click="open = !open" class="hover:text-blue-900 transition flex items-center gap-1">
                    Layanan
                    <svg class="w-4 h-4 transform" :class="{ 'rotate-180': open }" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.08 1.04l-4.25 4.66a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-52 bg-white shadow-lg rounded-md py-2 z-50">
                    <a href="{{ route('layanan.jasaweb') }}" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">Jasa Website</a>
                    <a href="{{ route('layanan.jasadesain') }}" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">Jasa Desain</a>
                    <a href="#Pemasaran Digital" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">Pemasaran Digital</a>
                    <a href="#SEO Advisory" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">SEO Advisory</a>
                    <a href="#Google Workspace" class="block px-4 py-2 text-[#4B2E1E] hover:bg-blue-50 hover:text-blue-900 transition">Google Workspace</a>
                </div>
            </div>

            <a href="{{ route('profile') }}" class="hover:text-blue-900 transition">Profile</a>
            <a href="https://wa.me/6285761748595" target="_blank" class="block mt-3 text-center bg-gradient-to-r from-blue-900 to-blue-400 text-white px-4 py-2 rounded-md">
                Hubungi Kami
            </a>

        </div>
    </header>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-7xl mx-auto mt-10 px-4">
        <!-- KIRI: Profil Perusahaan -->
        <div class="max-w-4xl w-full bg-white rounded-2xl overflow-hidden shadow-md mt-12 mx-auto">

            <!-- Cover Image -->
            <div class="relative">
                <img alt="Cover Image" class="w-full h-44 object-cover rounded-t-2xl" src="https://storage.googleapis.com/a1aa/image/3f7f8eef-8628-4cf1-14a8-6285e99a694a.jpg" />
                <button class="absolute top-3 right-3 bg-[#4f46e5] text-white text-xs px-3 py-1 rounded-md hover:bg-[#4338ca] transition" type="button">
                    Upload Cover
                </button>
            </div>
            <div class="px-6 pt-6 pb-10">
                <!-- Profile and Name Section -->
                <div class="flex items-center space-x-4 mb-8">
                    <div class="relative">
                        <img alt="Logo" class="w-24 h-24 rounded-lg object-cover border border-gray-200" src="{{asset('images/logoo.png')}}" />
                    </div>
                    <div>
                        <h2 class="text-gray-900 font-semibold text-lg leading-tight">
                            NEXORA INCODEON
                        </h2>
                        <p class="text-gray-600 text-xs mt-1">
                            Pengembangan Website
                            <span class="text-gray-400"> • </span>
                            <span class="text-gray-500">Kawali, Ciamis</span>
                        </p>
                    </div>
                </div>
                <!-- Info -->
                <div class="space-y-6 text-sm text-gray-700 max-w-3xl">
                    <div class="font-semibold text-gray-900 text-lg">INFORMASI UMUM</div>
                    <div class="flex items-center justify-between">
                        <div class="font-normal text-gray-700 w-40 sm:w-48">Bidang</div>
                        <div class="text-gray-500 text-xs flex-1">Pengembangan Website</div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-normal text-gray-700 w-40 sm:w-48">Tahun Berdiri</div>
                        <div class="text-gray-500 text-xs flex-1">2023</div>
                    </div>

                    <div class="font-semibold text-gray-900 text-lg pt-4">KONTAK</div>
                    <div class="flex items-center justify-between">
                        <div class="font-normal text-gray-700 w-40 sm:w-48">Email Perusahaan</div>
                        <div class="text-gray-500 text-xs flex-1">fajarferdiansyah3009@gmail.com</div>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="font-normal text-gray-700 w-40 sm:w-48">No.Hp Perusahaan</div>
                        <div class="text-gray-500 text-xs flex-1">085761748595</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- KANAN: Penjelasan Perusahaan -->
        <div class="bg-white rounded-2xl shadow-md p-6 text-gray-700 mt-12">

            <h2 class="text-2xl font-bold text-gray-800 mb-4">Tentang NEXORA INCODEON</h2>
            <p class="mb-4 text-sm leading-relaxed">
                <strong>NEXORA INCODEON</strong> adalah perusahaan yang bergerak di bidang teknologi digital, khususnya dalam <strong>jasa pembuatan website</strong> dan <strong>desain digital</strong>. Berlokasi di Kawali, Ciamis, kami melayani berbagai kebutuhan digital baik untuk personal, bisnis, UMKM, maupun lembaga pendidikan.
            </p>
            <h3 class="text-lg font-semibold text-gray-800 mb-2">Layanan Kami:</h3>
            <ul class="list-disc pl-5 text-sm space-y-2">
                <li><strong>Pembuatan Website Profesional</strong> — Mulai dari website profil perusahaan, toko online (e-commerce), hingga sistem informasi khusus sesuai kebutuhan klien.</li>
                <li><strong>Desain UI/UX & Branding</strong> — Desain antarmuka pengguna yang modern dan responsif, lengkap dengan identitas visual seperti logo, kartu nama, dan lain-lain.</li>
                <li><strong>Website Sekolah / PKL / Lembaga</strong> — Solusi digital untuk lembaga pendidikan termasuk sistem pengelolaan data siswa dan kerjasama IDUKA.</li>
                <li><strong>Konsultasi Digital</strong> — Pendampingan teknis untuk UMKM dan pelaku usaha agar siap go digital secara efisien dan efektif.</li>
            </ul>
            <p class="mt-4 text-sm">
                Dengan pengalaman sejak 2023 dan tim yang profesional, kami siap membantu mewujudkan solusi digital yang tepat guna dan terjangkau.
            </p>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        // Toggle menu on mobile
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        AOS.init({
            duration: 1000, // durasi animasi
            once: true // hanya sekali animasi saat masuk viewport
        });
        document.getElementById('mobile-dropdown-btn').addEventListener('click', function() {
            const dropdown = document.getElementById('mobile-dropdown');
            const icon = document.getElementById('dropdown-icon');
            dropdown.classList.toggle('hidden');
            icon.classList.toggle('rotate-180');
        });
    </script>
</body>

</html>