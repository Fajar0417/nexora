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

        html {
            scroll-behavior: smooth;
        }

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

<body class="bg-[#ffffff] text-[#0f1e40]">
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

    <!-- Hero Section -->
    <section class="pt-[100px] min-h-[100vh] bg-[#0B1B2B] text-white px-6 sm:px-10 md:px-20 py-12 md:py-20 flex flex-col md:flex-row items-center justify-between gap-10 relative overflow-visible">

        <!-- Konten kiri -->
        <div class="max-w-xl z-10 animate-fade-in-up" style="animation-delay: 0.1s;">
            <div class="flex items-center mb-4 animate-fade-in-up" style="animation-delay: 0.2s;">
                <img alt="Logo" class="w-32 h-32 mr-2 -mt-5" src="{{ asset('images/logo2.png') }}" />
                <h1 class="text-3xl sm:text-4xl font-semibold leading-tight max-w-md">
                    Bangun Website Profesional Untuk Bisnismu!
                </h1>
            </div>
            <p class="text-sm sm:text-base max-w-md mb-6 animate-fade-in-up" style="animation-delay: 0.3s;">
                Nexora adalah software house yang berfokus pada pengembangan Website solusi profesional, cepat, dan efisien untuk bisnis masa kini. Nexora membuka Jasa Pembuatan berbagai macam Website.
            </p>
            <div class="flex gap-4 animate-fade-in-up" style="animation-delay: 0.4s;">
                <a href="mailto:fajarferdiansyah3009@gmail.com" class="bg-white text-[#2563eb] border border-[#2563eb] hover:bg-[#f0f9ff] transition-colors text-sm sm:text-base font-semibold py-2 px-5 rounded">
                    Konsultasi Gratis
                </a>
                <a href="#portofolio" class="bg-[#2563eb] text-white border border-[#2563eb] hover:bg-[#1e40af] transition-colors text-sm sm:text-base font-semibold py-2 px-5 rounded">
                    Lihat Portofolio
                </a>
            </div>
        </div>

        <!-- Gambar kanan (tengah di HP) -->
        <div class="max-w-[900px] w-full md:w-auto flex justify-center"
            style="opacity: 0; animation: fadeSlideLeft 1s ease-out forwards;">
            <img alt="Man in blue shirt"
                class="rounded-md w-full md:w-auto max-w-full h-auto object-cover"
                src="{{ asset('images/oranggg.svg') }}" />
        </div>

    </section>

    <!-- Gelombang pembatas bawah section biru -->
    <div class="relative pb-16 md:pb-40">
        <div class="w-full overflow-hidden leading-none" style="margin-top: -1px;">

            <svg class="w-full h-auto" viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%" color-interpolation-filters="sRGB">
                        <feDropShadow dx="0" dy="4" stdDeviation="4" flood-color="#000000" flood-opacity="0.25" />
                    </filter>
                </defs>
                <path fill="#0B1B2B" fill-opacity="1" filter="url(#shadow)"
                    d="M0,0 C360,100 1080,0 1440,100 L1440,0 L0,0 Z" />
            </svg>
        </div>

        <!-- Card naik ke dalam SVG -->
        <div class="relative md:absolute md:top-0 w-full z-10">
            <div class="max-w-7xl mx-auto px-4 -mt-10 py-10 flex flex-col sm:flex-row justify-center gap-6">
                <!-- Card 1 -->
                <!-- Card 1 -->
                <div class="bg-white rounded-md shadow-md w-full sm:w-72 p-6 flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="100">

                    <i class="fas fa-stopwatch text-[#f59e0b] text-3xl mb-4"></i>
                    <h3 class="text-[#0a1f5a] font-bold text-lg mb-2">Proses Cepat</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Proses pengerjaan cepat oleh tim yang handal dalam bidangnya.
                    </p>
                </div>

                <!-- Card 2 -->
                <!-- Card 1 -->
                <div class="bg-white rounded-md shadow-md w-full sm:w-72 p-6 flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="100">

                    <i class="fas fa-tag text-3xl mb-4"></i>
                    <h3 class="font-bold text-lg mb-2">Harga Terjangkau</h3>
                    <p class="text-xs leading-relaxed">
                        Harga di Nexora relatif murah dan terjangkau untuk semua kalangan.
                    </p>
                </div>

                <!-- Card 3 -->
                <!-- Card 1 -->
                <div class="bg-white rounded-md shadow-md w-full sm:w-72 p-6 flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="100">

                    <i class="fas fa-desktop text-[#f59e0b] text-3xl mb-4"></i>
                    <h3 class="text-[#0a1f5a] font-bold text-lg mb-2">Website Profesional</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Website profesional di hasilkan oleh tim yang profesional juga.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="mb-16">

        <div class="max-w-7xl mx-auto px-4 py-10">
            <div class="flex flex-col md:flex-row items-center md:items-start justify-between gap-8">

                <div class="md:w-1/2" data-aos="fade-right">
                    <h2 class="text-[18px] font-semibold text-[#00296B] leading-tight">
                        Wujudkan Website Impian Anda Tanpa Perlu Repot, Pusing Memikirkan Bentuk Layout Desain, Konten Kata - Kata dsb. Cukup Kirim Info Usaha, Kontak dan Foto Produk / Jasa Anda, Sisanya Biarkan Kami Yang Bereskan
                    </h2>
                    <ul class="mt-6 space-y-3 text-[15px] text-[#4B4B4B] max-w-md">
                        <li class="flex items-start gap-2">
                            <span class="text-[#FF9F00] mt-[3px]">
                                <i class="fas fa-check-circle">
                                </i>
                            </span>
                            <p>
                                Video introduction usaha anda durasi 1 menit yang bisa diupload ke youtube, status wa / instagram sehingga anda dengan mudah memperkenalkan produk / jasa anda kepada calon customer
                            </p>
                        </li>
                    </ul>
                    <div class="mt-6 bg-white rounded-lg shadow-md border-l-4 border-orange-400 p-4 text-sm sm:text-base text-[#333333]">
                        Di
                        <span class="font-semibold text-orange-500">
                            Jasa Website Nexora
                        </span>
                        , klien-klien kami arahkan mulai dari pemilihan nama domain, foto apa saja yang perlu tampil kemudian kami ramu menjadi susunan website yang layak dan menarik seperti layaknya magnet penjualan.
                    </div>
                </div>
                <div class="md:w-1/2 flex justify-center" data-aos="fade-left">
                    <img
                        src="{{ asset('images/orangg.svg') }}"
                        alt="Ilustrasi orang di depan layar kode"
                        class="w-full max-w-md h-auto -mt-5" />
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white w-full">
        <section class="max-w-6xl mx-auto px-4 py-10 text-gray-900 mb-16 sm:mb-24">

            <header class="text-center mb-8">
                <h1 class="text-3xl sm:text-4xl font-extrabold mb-3">
                    <span class="text-[#2AB0F9]">
                        Layanan
                    </span>
                    <span class="text-[#2AB0F9]">
                        Nexora
                    </span>
                    <span class="text-[#0D7AC6]">
                        Incodeon
                    </span>

                    <span class="inline-block align-middle ml-1 text-[#2AB0F9] font-semibold text-lg border border-[#2AB0F9] rounded px-1">
                        New
                    </span>
                </h1>
                <p class="mt-2 text-sm sm:text-base text-gray-700 font-normal">
                    Tingkatkan Performa Bisnismu Dengan Berbagai Layanan Pembuatan Website dari Nexora
                </p>
            </header>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <article data-aos="fade-up" class="border border-gray-200 rounded-lg p-5 bg-sky-50 shadow-sm">
                    <div class="flex items-center mb-2 space-x-2">
                        <img alt="MakeWebEasy logo icon in blue and white representing Jasa Desain" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/06214163-4d72-44b1-575f-64ff6df76bca.jpg" width="24" />
                        <h3 class="font-semibold text-gray-800 text-base">
                            Jasa Desain
                        </h3>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-700 mb-3">
                        Visualisasi pesan brand Anda bersama kami.
                    </p>
                    <a class="text-sky-500 text-xs sm:text-sm font-normal inline-flex items-center" href="{{ route('layanan.jasadesain') }}">
                        Detail layanan
                        <i class="fas fa-arrow-right ml-1">
                        </i>
                    </a>
                </article>
                <article data-aos="fade-up" class="border border-gray-200 rounded-lg p-5 bg-sky-50 shadow-sm">
                    <div class="flex items-center mb-2 space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                        </svg>
                        <h3 class="font-semibold text-gray-800 text-base">
                            Jasa Website
                        </h3>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-700 mb-3">
                        Pengembangan Website solusi profesional, cepat, dan efisien untuk bisnis masa kini.
                    </p>
                    <a class="text-sky-500 text-xs sm:text-sm font-normal inline-flex items-center" href="{{ route('layanan.jasaweb') }}">
                        Detail layanan
                        <i class="fas fa-arrow-right ml-1">
                        </i>
                    </a>
                </article>
                <article data-aos="fade-up" class="border border-gray-200 rounded-lg p-5 bg-sky-50 shadow-sm">
                    <div class="flex items-center mb-2 space-x-2">
                        <img alt="MakeWebEasy logo icon in blue and white representing Konsultasi Strategi Pemasaran Digital" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/6dc00466-1c03-47d4-7028-7ea8f9cb4fbf.jpg" width="24" />
                        <h3 class="font-semibold text-gray-800 text-base">
                            Konsultasi Strategi Pemasaran Digital
                        </h3>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-700 mb-3">
                        Kelola strategi pemasaran digital dengan efektif.
                    </p>
                    <a class="text-sky-500 text-xs sm:text-sm font-normal inline-flex items-center" href="#">
                        Detail layanan
                        <i class="fas fa-arrow-right ml-1">
                        </i>
                    </a>
                </article>
                <!-- <article data-aos="fade-up" class="border border-gray-200 rounded-lg p-5 bg-sky-50 shadow-sm">
                    <div class="flex items-center mb-2 space-x-2">
                        <img alt="Google Ads logo icon in blue, yellow, green, and red representing Google Ads service" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/5b2ea414-6934-4a96-e95e-1f4853687a03.jpg" width="24" />
                        <h3 class="font-semibold text-gray-800 text-base">
                            Google Ads
                        </h3>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-700 mb-3">
                        Raih posisi di halaman pertama pencarian Google.
                    </p>
                    <a class="text-sky-500 text-xs sm:text-sm font-normal inline-flex items-center" href="#">
                        Detail layanan
                        <i class="fas fa-arrow-right ml-1">
                        </i>
                    </a>
                </article> -->
                <article data-aos="fade-up" class="border border-gray-200 rounded-lg p-5 bg-sky-50 shadow-sm">
                    <div class="flex items-center mb-2 space-x-2">
                        <img alt="Google logo icon in blue, red, yellow, and green representing SEO Advisory service" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/a1d479dd-b974-4461-52aa-55277859b5fd.jpg" width="24" />
                        <h3 class="font-semibold text-gray-800 text-base">
                            SEO Advisory
                        </h3>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-700 mb-3">
                        Tempati posisi di halaman pertama pencarian Google secara organik dan berkelanjutan.
                    </p>
                    <a class="text-sky-500 text-xs sm:text-sm font-normal inline-flex items-center" href="#">
                        Detail layanan
                        <i class="fas fa-arrow-right ml-1">
                        </i>
                    </a>
                </article>
                <article data-aos="fade-up" class="border border-gray-200 rounded-lg p-5 bg-sky-50 shadow-sm">
                    <div class="flex items-center mb-2 space-x-2">
                        <img alt="Google Workspace logo icon with multi-color M representing Google Workspace service" class="w-6 h-6" height="24" src="https://storage.googleapis.com/a1aa/image/ee6f88a1-9f67-479f-2f52-9ee2af87a5d7.jpg" width="24" />
                        <h3 class="font-semibold text-gray-800 text-base">
                            Google Workspace
                        </h3>
                    </div>
                    <p class="text-xs sm:text-sm text-gray-700 mb-3">
                        Proses kerja yang aman dan mudah demi kelancaran proses bisnis.
                    </p>
                    <a class="text-sky-500 text-xs sm:text-sm font-normal inline-flex items-center" href="#">
                        Detail layanan
                        <i class="fas fa-arrow-right ml-1">
                        </i>
                    </a>
                </article>
            </div>
        </section>
    </div>

    <div class="relative pb-16 md:pb-40 bg-white mt-10 sm:mt-16">

        <!-- SVG Gelombang -->
        <div class="w-full overflow-hidden leading-none" style="margin-top: -1px;">
            <svg class="w-full h-auto" viewBox="0 0 1440 100" xmlns="http://www.w3.org/2000/svg">
                <defs>
                    <filter id="shadow" x="-20%" y="-20%" width="140%" height="140%" color-interpolation-filters="sRGB">
                        <feDropShadow dx="0" dy="4" stdDeviation="4" flood-color="#000000" flood-opacity="0.25" />
                    </filter>
                </defs>
                <path fill="#ffffff" fill-opacity="1" filter="url(#shadow)"
                    d="M0,0 C360,100 1080,0 1440,100 L1440,0 L0,0 Z" />
            </svg>
        </div>

        <!-- Kontainer Kartu (Naik ke SVG) -->
        <div class="relative md:absolute md:top-0 w-full z-10">
            <div class="max-w-7xl mx-auto px-4 -mt-12 py-10 flex flex-col sm:flex-row justify-center gap-6">

                <!-- Card 1 -->
                <div class="bg-white rounded-md shadow-md w-full sm:w-72 p-6 flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <i class="fas fa-feather-alt text-indigo-600 text-3xl mb-4"></i>
                    <h3 class="text-indigo-600 font-bold text-lg mb-2">Free Logo & Banner</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Desain logo dan banner kreatif yang mempresentasikan bisnis Anda dengan maksimal.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-md shadow-md w-full sm:w-72 p-6 flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="150">
                    <i class="fas fa-code text-indigo-600 text-3xl mb-4"></i>
                    <h3 class="text-indigo-600 font-bold text-lg mb-2">Free Maintenance</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Kami menjamin keamanan website tanpa malware & berjalan secara optimal.
                    </p>
                </div>

                <!-- Card 3 (Opsional) -->
                <div class="bg-white rounded-md shadow-md w-full sm:w-72 p-6 flex flex-col items-center text-center"
                    data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-desktop text-indigo-600 text-3xl mb-4"></i>
                    <h3 class="text-indigo-600 font-bold text-lg mb-2">Free Video Intro</h3>
                    <p class="text-gray-500 text-sm leading-relaxed">
                        Video profesional yang memperkenalkan website selama 1 menit
                    </p>
                </div>

            </div>
        </div>
    </div>


    <main class="w-full bg-white px-6 py-8 text-center">
        <h1 class="text-[#00426b] font-extrabold text-3xl mb-8" data-aos="fade-up">
            Mengapa Kami?
        </h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
            <section data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('images/creative.svg')}}" alt="Cloud Save Icon" class="mx-auto mb-4" height="100" width="100" />
                <h2 class="text-gray-900 font-semibold text-xl mb-2">
                    Kreatif
                </h2>
                <p class="text-gray-600 text-base max-w-xs mx-auto">
                    Tim yang berpengalaman dan kreatif siap membantu segala kebutuhan anda.
                </p>
            </section>

            <section data-aos="fade-up" data-aos-delay="200">
                <img src="{{asset('images/css.svg')}}" alt="Cloud Save Icon" class="mx-auto mb-4" height="100" width="100" />
                <h2 class="text-gray-900 font-semibold text-xl mb-2">
                    CS Responsif
                </h2>
                <p class="text-gray-600 text-base max-w-xs mx-auto">
                    Customer Service yang cepat tanggap dan ramah siap membantu anda.
                </p>
            </section>

            <section data-aos="fade-up" data-aos-delay="300">
                <img src="{{asset('images/wakty.svg')}}" alt="Cloud Save Icon" class="mx-auto mb-4" height="100" width="100" />
                <h2 class="text-gray-900 font-semibold text-xl mb-2">
                    Tepat Waktu
                </h2>
                <p class="text-gray-600 text-base max-w-xs mx-auto">
                    Kami selalu menjaga komitmen dan menyelesaikan tepat waktu.
                </p>
            </section>

            <section data-aos="fade-up" data-aos-delay="400">
                <img src="{{asset('images/cloud.svg')}}" alt="Cloud Save Icon" class="mx-auto mb-4" height="100" width="100" />
                <h2 class="text-gray-900 font-semibold text-xl mb-2">
                    Cloud Save
                </h2>
                <p class="text-gray-600 text-base max-w-xs mx-auto">
                    Data anda aman tersimpan di cloud dan bisa diakses kapan saja.
                </p>
            </section>

            <section data-aos="fade-up" data-aos-delay="500">
                <img src="{{asset('images/diskon.svg')}}" alt="Cloud Save Icon" class="mx-auto mb-4" height="100" width="100" />
                <h2 class="text-gray-900 font-semibold text-xl mb-2">
                    Diskon
                </h2>
                <p class="text-gray-600 text-base max-w-xs mx-auto">
                    Nikmati berbagai promo dan diskon menarik khusus untuk Anda.
                </p>
            </section>
        </div>
    </main>

    <!-- Portofolio Section -->
    <section id="portofolio" class="px-6 sm:px-10 md:px-20 pt-1 pb-12 md:pb-20 text-center bg-[#ffffff]">
        <h3 class="mt-32 text-2xl font-semibold mb-8">

            Portofolio
        </h3>
        <div class="flex overflow-x-auto space-x-8 max-w-5xl mx-auto py-4">
            <!-- Kartu 1 -->
            <div class="min-w-[320px] max-w-xs flex-shrink-0 bg-[#001f4d] rounded-md p-4">
                <div class="w-full h-[280px] overflow-hidden rounded-md mb-2">
                    <img src="{{asset('images/por1.png')}}" alt="Website Company Profile" class="w-full h-full object-cover" />
                </div>
                <p class="font-semibold text-sm sm:text-base text-white">Web Kasir DIFFY</p>
            </div>

            <!-- Kartu 2 -->
            <div class="min-w-[320px] max-w-xs flex-shrink-0 bg-[#001f4d] rounded-md p-4">
                <div class="w-full h-[280px] overflow-hidden rounded-md mb-2">
                    <img src="{{asset('images/por2.png')}}" alt="E-Commerce" class="w-full h-full object-cover" />
                </div>
                <p class="font-semibold text-sm sm:text-base text-white">Web PKL</p>
            </div>

            <!-- Kartu 3 -->
            <div class="min-w-[320px] max-w-xs flex-shrink-0 bg-[#001f4d] rounded-md p-4">
                <div class="w-full h-[280px] overflow-hidden rounded-md mb-2">
                    <img src="{{asset('images/por3.png')}}" alt="Custom Web App" class="w-full h-full object-cover" />
                </div>
                <p class="font-semibold text-sm sm:text-base text-white">Web E-Commerce</p>
            </div>

            <!-- Kartu 4
            <div class="min-w-[320px] max-w-xs flex-shrink-0 bg-[#001f4d] rounded-md p-4">
                <div class="w-full h-[180px] overflow-hidden rounded-md mb-2">
                    <img src="https://storage.googleapis.com/a1aa/image/7b059605-0aeb-496e-e80b-d2a0eb3ae627.jpg" alt="Custom Web App" class="w-full h-full object-cover" />
                </div>
                <p class="font-semibold text-sm sm:text-base text-white">Website Kustom / Web App</p>
            </div> -->
        </div>


    </section>

    <section class="bg-[#0B1B2B] text-white">
        <div class="max-w-7xl mx-auto px-6 py-12 text-center">
            <h1 class="text-3xl sm:text-4xl font-extrabold mb-3">
                <span class="text-[#2AB0F9]">
                    Make
                </span>
                <span class="text-[#0D7AC6]">
                    Web
                </span>

                <img alt="MakeWebEasy logo black and white circular icon" class="inline-block mx-2 align-middle" height="24" src="https://storage.googleapis.com/a1aa/image/431b5371-f815-4809-3a41-e71c7c97a3b9.jpg" width="24" />
                <span class="font-semibold text-white text-lg align-middle">
                    NEXORA
                </span>
                <span class="inline-block align-middle ml-1 text-[#2AB0F9] font-semibold text-lg border border-[#2AB0F9] rounded px-1">
                    INCODEON
                </span>
            </h1>
            <h2 class="text-white font-semibold text-lg sm:text-xl max-w-3xl mx-auto mb-10 leading-snug">
                Tingkatkan Pembuatan Webiste Anda dengan Berbagai Fitur Lengkap &amp;
                Terintegrasi
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-10 max-w-5xl mx-auto"
                x-data="{
        current: 0,
        images: [
            '{{ asset('images/1.svg') }}',
            '{{ asset('images/2.svg') }}',
            '{{ asset('images/3.svg') }}'
        ],
        prev() {
            this.current = (this.current === 0) ? this.images.length - 1 : this.current - 1;
        },
        next() {
            this.current = (this.current === this.images.length - 1) ? 0 : this.current + 1;
        }
     }">

                <!-- Desain Tanpa Batas -->
                <div>
                    <hr
                        :class="current === 0 ? '' : 'border-t border-gray-300'"
                        class="mb-4"
                        :style="current === 0 ? 'height: 2px; background: linear-gradient(to right, #0052D4, #4364F7, #6FB1FC); border: none;' : ''" />

                    <!-- Badge dengan gradasi biru -->
                    <div
                        :class="current === 0
    ? 'inline-flex items-center text-white'
    : 'inline-flex items-center bg-white text-black border border-gray-300'"
                        :style="current === 0
    ? 'background: linear-gradient(to right, #0052D4, #4364F7, #6FB1FC);'
    : ''"
                        class="rounded-full px-3 py-1 mb-3 font-semibold text-sm transition-colors duration-300">
                        <i class="fas fa-tools mr-2"></i>
                        Desain Tanpa Batas
                    </div>
                    <p
                        class="text-xs leading-relaxed max-w-xs mx-auto"
                        :class="current === 0 ? 'text-white' : 'text-gray-500'">
                        Buat tampilan website secara profesional dengan ratusan template siap pakai dan mobile friendly
                    </p>
                </div>

                <!-- Sistem E-commerce -->
                <div>
                    <!-- Garis atas dengan gradasi -->
                    <hr
                        :class="current === 1 ? '' : 'border-t border-gray-300'"
                        class="mb-4"
                        :style="current === 1 ? 'height: 2px; background: linear-gradient(to right, #2AB0F9, #8e44ad,rgb(243, 18, 18)); border: none;' : ''" />

                    <!-- Badge dengan gradasi -->
                    <div
                        :class="current === 1
    ? 'inline-flex items-center text-white'
    : 'inline-flex items-center bg-white text-black border border-gray-300'"
                        :style="current === 1
    ? 'background: linear-gradient(to right, #2AB0F9, #8e44ad,rgb(243, 18, 52));'
    : ''"
                        class="rounded-full px-3 py-1 mb-3 font-semibold text-sm transition-colors duration-300">
                        <i class="fas fa-store mr-2"></i>
                        Sistem E-commerce
                    </div>

                    <p
                        class="text-xs leading-relaxed max-w-xs mx-auto"
                        :class="current === 1 ? 'text-white' : 'text-gray-500'">
                        One stop solution e-commerce dengan berbagai kemudahan metode pembayaran dan fitur promosi lengkap.
                    </p>
                </div>

                <!-- SEO Friendly -->
                <div>
                    <!-- Garis atas dengan gradasi putih ke biru muda -->
                    <hr
                        :class="current === 2 ? '' : 'border-t border-gray-300'"
                        class="mb-4"
                        :style="current === 2
    ? 'height: 2px; background: linear-gradient(to right, #ffffff, #e0f7ff, #a0dfff); border: none;'
    : ''" />

                    <!-- Badge dengan gradasi putih ke biru muda -->
                    <div
                        :class="current === 2
    ? 'inline-flex items-center text-black'
    : 'inline-flex items-center bg-white text-black border border-gray-300'"
                        :style="current === 2
    ? 'background: linear-gradient(to right, #ffffff, #e0f7ff, #a0dfff);'
    : ''"
                        class="rounded-full px-3 py-1 mb-3 font-semibold text-sm transition-colors duration-300">
                        <i class="fas fa-search mr-2"></i>
                        SEO Friendly
                    </div>

                    <p
                        class="text-xs leading-relaxed max-w-xs mx-auto"
                        :class="current === 2 ? 'text-white' : 'text-gray-500'">
                        Fitur SEO bawaan MakeWebEasy pada artikel dan produk sangat mendukung kemunculan situs pada halaman pertama pencarian Google.
                    </p>
                </div>

                <!-- Carousel Gambar dengan tombol panah -->
                <div class="relative col-span-1 sm:col-span-3 w-full max-w-5xl mx-auto overflow-hidden mt-10">


                    <!-- Tombol kiri -->
                    <button @click="prev()"
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-[#2AB0F9] text-white px-3 py-2 rounded-full select-none">
                        &larr;
                    </button>

                    <!-- Container gambar -->
                    <div class="flex transition-transform duration-500 ease-in-out"
                        :style="`transform: translateX(-${current * (100 / images.length)}%); width: ${images.length * 100}%`">

                        <template x-for="img in images" :key="img">
                            <div
                                class="flex justify-center items-center flex-shrink-0 min-h-[250px]"
                                :style="`width: ${100 / images.length}%`">
                                <img :src="img" class="rounded-md w-full sm:max-w-md md:max-w-lg lg:max-w-xl object-contain" />


                            </div>
                        </template>


                    </div>

                    <!-- Tombol kanan -->
                    <button @click="next()"
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-[#2AB0F9] text-white px-3 py-2 rounded-full select-none">
                        &rarr;
                    </button>
                </div>
            </div>

        </div>
    </section>

    <div class="bg-[#0B1B2B] text-white">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-16">
            <header class="text-center max-w-3xl mx-auto mb-10">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white leading-tight">
                    Dilengkapi semua fitur yang dibutuhkan pada pembuatan website.
                </h2>
                <p class="mt-2 text-sm sm:text-base text-gray-300 font-normal">
                    Memudahkan pembuatan website bisnis maupun toko online secara profesional.
                </p>
            </header>

            <!-- Grid container replicating the layout exactly -->
            <div class="grid grid-cols-1 md:grid-cols-6 gap-6 md:gap-8">
                <!-- Left big box (spans 4 columns) -->
                <div class="md:col-span-4">
                    <img
                        src="{{asset('images/lay2.svg')}}"
                        alt="Box gambar Mendukung Integrasi Marketing dengan background gradasi biru dan ikon kode program serta HTTPS"
                        class="rounded-2xl w-full h-auto object-cover"
                        width="640"
                        height="240" />
                </div>

                <!-- Right top box (spans 2 columns) -->
                <div class="md:col-span-2">
                    <img
                        src="{{asset('images/lay4.svg')}}"
                        alt="Box gambar Konfigurasi SEO dengan background gradasi biru muda dan gambar tampilan halaman pencarian Google"
                        class="rounded-2xl w-full h-auto object-cover"
                        width="320"
                        height="240" />
                </div>

                <!-- Bottom left box -->
                <div class="md:col-span-1">
                    <img
                        src="{{asset('images/lay5.svg')}}"
                        alt="Box gambar Payment Gateway dengan background gradasi biru dan logo payment gateway"
                        class="rounded-2xl w-full h-auto object-cover"
                        width="200"
                        height="240" />
                </div>


                <!-- Bottom middle left box (spans 3 columns) -->
                <div class="md:col-span-3">
                    <img
                        src="{{asset('images/lay6.svg')}}"
                        alt="Box gambar Desain yang Memukau dengan background putih dan gambar mini pod serta elemen desain UI website"
                        class="rounded-2xl w-full h-auto object-cover"
                        width="420"
                        height="240" />
                </div>

                <!-- Bottom right box -->
                <div class="md:col-span-2">
                    <video
                        controls
                        class="rounded-2xl w-full h-auto object-cover"
                        width="200"
                        height="240">
                        <source src="{{ asset('images/we.mp4') }}" type="video/mp4">
                        Browser Anda tidak mendukung pemutar video.
                    </video>
                </div>
            </div>
        </section>
    </div>




    <!-- Kontak Kami Section -->
    <footer class="w-full px-6 py-6 md:px-12 md:py-8 flex flex-col md:flex-row justify-between items-start text-black text-sm">
        <div class="flex flex-col space-y-2 md:space-y-3 max-w-xs items-start">
            <div class="flex justify-start items-start w-full"> <!-- full width supaya 'justify-start' maksimal -->
                <img
                    alt="Nuhawweb logo with green icon and black text"
                    class="w-[280px] h-[70px] object-contain"
                    height="70"
                    width="280"
                    src="{{ asset('images/logo2.png') }}" />
            </div>

            <p class="text-xs md:text-sm font-normal">
                NEXORA INCODEON
            </p>
            <div class="flex flex-col space-y-1 text-xs md:text-sm font-normal text-gray-900">
                <p class="flex items-start gap-2">
                    <i class="fas fa-map-marker-alt mt-[2px] text-[14px]">
                    </i>
                    <span>
                        Jln. Cikatomas Dsn. Nanggela Ds. Linggapura Kec. Kawali Kab. Ciamis Prov. Jawa Barat
                    </span>
                </p>
                <p class="flex items-center gap-2">
                    <i class="far fa-envelope mt-[1px] text-[14px]">
                    </i>
                    <span>
                        fajarferdiansyah3009@gmail.com
                    </span>
                </p>
                <p class="flex items-center gap-2">
                    <i class="fab fa-whatsapp mt-[1px] text-[14px]">
                    </i>
                    <span>
                        085761748595
                    </span>
                </p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row md:space-x-20 mt-6 md:mt-0 text-xs md:text-sm font-normal text-gray-900">
            <div class="flex flex-col space-y-2 md:space-y-3 min-w-[120px]">
                <h3 class="font-normal text-black">
                    Informasi
                </h3>
                <ul class="flex flex-col space-y-1">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]">
                        </i>
                        <span>
                            Ketentuan Layanan
                        </span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]">
                        </i>
                        <span>
                            Kebijakan Privasi
                        </span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]">
                        </i>
                        <span>
                            FAQ
                        </span>
                    </li>
                </ul>
            </div>
            <div class="flex flex-col space-y-2 md:space-y-3 min-w-[140px] mt-6 md:mt-0">
                <h3 class="font-normal text-black">
                    Konten
                </h3>
                <ul class="flex flex-col space-y-1">
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]">
                        </i>
                        <span>
                            Home
                        </span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]">
                        </i>
                        <span>
                            Harga Website
                        </span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]">
                        </i>
                        <span>
                            Tentang Kami
                        </span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]">
                        </i>
                        <span>
                            Pilihan Desain
                        </span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]">
                        </i>
                        <span>
                            Blog
                        </span>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]"></i>
                        <a href="{{ route('layanan.jasadesain') }}" class="hover:text-blue-800 transition">
                            Jasa Pembuatan Desain
                        </a>
                    </li>
                    <li class="flex items-center gap-2">
                        <i class="fas fa-chevron-right text-[12px]"></i>
                        <a href="{{ route('layanan.jasaweb') }}" class="hover:text-blue-800 transition">
                            Jasa Pembuatan Website
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="flex flex-col space-y-4 mt-6 md:mt-0 min-w-[140px]">
            <button class="bg-black text-white text-xs md:text-sm font-semibold rounded-full px-5 py-2 flex items-center justify-center gap-2 w-max" type="button">
                <i class="fab fa-whatsapp text-[14px]">
                </i>
                Bantuan Teknis
            </button>
            <button class="border border-black text-black text-xs md:text-sm font-semibold rounded-full px-5 py-2 flex items-center justify-center gap-2 w-max" type="button">
                <i class="far fa-comment-alt text-[14px]">
                </i>
                Chat Admin
            </button>
            <div class="flex items-center gap-3 text-black text-xs md:text-sm font-normal">
                <i class="fab fa-facebook-f">
                </i>
                <i class="fab fa-instagram">
                </i>
                <span>
                    nexora
                </span>
            </div>
        </div>
    </footer>
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