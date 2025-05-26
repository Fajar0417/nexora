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

    <section class="bg-gray-50 px-4 pt-10 pb-6">
        <section class="bg-gray-50 px-4 pt-[80px] pb-6"> <!-- padding top agar tidak ketutup -->
            <!-- Judul PROMO -->
            <h1 class="text-3xl sm:text-4xl font-extrabold mb-6 text-center">
                <span class="text-[#2AB0F9]">Layanan</span>
                <span class="text-[#2AB0F9]">Jasa</span>
                <span class="text-[#0D7AC6]">Website</span>
                <span class="inline-block align-middle ml-1 text-[#2AB0F9] font-semibold text-lg border border-[#2AB0F9] rounded px-1">
                    PROMO
                </span>
            </h1>
            <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 pt-8 md:pt-12">

                <div class="max-w-5xl w-full rounded-xl border border-gray-300 bg-white p-6 md:p-10 font-sans text-black">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 md:gap-10">
                        <div class="flex flex-col gap-2 md:basis-1/3">
                            <h1 class="font-semibold text-lg md:text-xl">
                                Landing Page
                            </h1>
                            <p class="text-xl md:text-2xl font-normal">
                                Rp.
                                <span class="font-semibold">
                                    100,000 -
                                </span>
                                Rp.
                                    <span class="font-semibold">
                                    500,000
                                </span></Rp>
                            </p>
                            <p class="text-xs md:text-sm">
                                Landing Page halaman website tunggal yang dirancang khusus untuk kampanye promosi, pengenalan produk/jasa, atau pengumpulan leads. Cocok untuk UMKM, freelancer, atau promosi event.
                                <br>
                                Kami menawarkan:
                                Desain profesional yang responsif dan ringan diakses, lengkap dengan tombol Call to Action (CTA), informasi singkat, dan formulir kontak agar pengunjung bisa langsung menghubungi Anda.
                            </p>
                            <button class="mt-4 w-max bg-black text-white text-xs md:text-sm rounded-full px-6 py-2 btn-shadow" type="button">
                                Pesan Website Sekarang!
                            </button>
                        </div>
                        <div class="md:basis-2/3 bg-white rounded-lg p-2 flex gap-4 overflow-x-auto scrollbar-hide">

                            <img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/landing1c.jpg')}}" width="300" />
                            <img alt="Preview of a landing page with light theme, showing a white background with fashion sale banners and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/landing2.jpg')}}" width="300" />
                            <img alt="Preview of a landing page with light theme, showing a white background with fashion sale banners and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/landing3.jpg')}}" width="300" />
                            <img alt="Preview of a landing page with light theme, showing a white background with fashion sale banners and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/landing4.jpg')}}" width="300" />
                            <img alt="Preview of a landing page with light theme, showing a white background with fashion sale banners and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/landing5.jpg')}}" width="300" />
                        </div>
                    </div>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 text-xs md:text-sm text-gray-700">
                        <div>
                            <h3 class="font-semibold mb-2">
                                Spesifikasi :
                            </h3>
                            <ul class="space-y-1">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        1 halaman utama (single page)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Desain modern & ringan
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Desain responsif (mobile & desktop)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Waktu pengerjaan 3-5 hari kerja
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        3x revisi konten (teks/gambar/warna)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Animasi scroll & CTA interaktif
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">
                                Fitur :
                            </h3>
                            <ul class="space-y-1">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Call-to-Action (CTA) profesional
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Section produk/layanan
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Integrasi media sosial
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Galeri gambar
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Countdown Timer (untuk promo/event)
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 pt-8 md:pt-12">

                <div class="max-w-5xl w-full rounded-xl border border-gray-300 bg-white p-6 md:p-10 font-sans text-black">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 md:gap-10">
                        <div class="flex flex-col gap-2 md:basis-1/3">
                            <h1 class="font-semibold text-lg md:text-xl">
                                Company Profile
                            </h1>
                            <p class="text-xl md:text-2xl font-normal">
                                Rp.
                                <span class="font-semibold">
                                    500,000 -
                                </span>
                                Rp.
                                <span class="font-semibold">
                                    2,500,000
                                </span>
                            </p>
                            <p class="text-xs md:text-sm">
                                Website Company Profile menampilkan informasi lengkap tentang perusahaan atau organisasi: siapa Anda, apa layanan Anda, dan bagaimana klien bisa menghubungi Anda.
                            </p>
                            <button class="mt-4 w-max bg-black text-white text-xs md:text-sm rounded-full px-6 py-2 btn-shadow" type="button">
                                Pesan Website Sekarang!
                            </button>
                        </div>
                        <div class="md:basis-2/3 bg-white rounded-lg p-2 flex gap-4 overflow-x-auto scrollbar-hide">

                            <img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/cf1.jpg')}}" width="300" />
                            <img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/cf2.jpg')}}" width="300" />
                            <img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/cf3.jpg')}}" width="300" />
                            <img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/cf4.jpg')}}" width="300" />
                        </div>
                    </div>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 text-xs md:text-sm text-gray-700">
                        <div>
                            <h3 class="font-semibold mb-2">
                                Spesifikasi :
                            </h3>
                            <ul class="space-y-1">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        5-8 halaman (Beranda, Tentang, Layanan, Galeri, Kontak, Klien)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Desain UI custom & responsive
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Waktu pengerjaan 7–10 hari kerja
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        3x revisi desain
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Hosting aktif 1 tahun
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        SEO friendly
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Admin Panel sederhana (untuk update konten)
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">
                                Fitur :
                            </h3>
                            <ul class="space-y-1">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Form kontak & lokasi Google Maps
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Galeri portofolio/foto kegiatan
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Download profil perusahaan (PDF, opsional)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        SEO dasar
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Integrasi WhatsApp/Instagram
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 pt-8 md:pt-12">

                <div class="max-w-5xl w-full rounded-xl border border-gray-300 bg-white p-6 md:p-10 font-sans text-black">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 md:gap-10">
                        <div class="flex flex-col gap-2 md:basis-1/3">
                            <h1 class="font-semibold text-lg md:text-xl">
                                Toko (E-Commerce)
                            </h1>
                            <p class="text-xl md:text-2xl font-normal">
                                Rp.
                                <span class="font-semibold">
                                    1,000,000 -
                                </span> <br>
                                Rp.
                                <span class="font-semibold">
                                    2,500,000 
                                </span>
                            </p>
                           
                            <p class="text-xs md:text-sm">
                            Website toko online siap pakai untuk jualan produk fisik atau digital, lengkap dengan fitur keranjang, pembayaran otomatis, dan pengelolaan stok.
                           
                            </p>
                            <button class="mt-4 w-max bg-black text-white text-xs md:text-sm rounded-full px-6 py-2 btn-shadow" type="button">
                                Pesan Website Sekarang!
                            </button>
                        </div>
                        <div class="md:basis-2/3 bg-white rounded-lg p-2 flex gap-4 overflow-x-auto scrollbar-hide">

                            <img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/toko1.jpg')}}" width="300" />
                            <<img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/toko2.jpg')}}" width="300" />
                            <<img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/toko3.jpg')}}" width="300" />
                            <<img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/toko4.jpg')}}" width="300" />
                            <<img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="{{asset('images/toko5.jpg')}}" width="300" />
                        </div>
                    </div>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 text-xs md:text-sm text-gray-700">
                        <div>
                            <h3 class="font-semibold mb-2">
                                Spesifikasi :
                            </h3>
                            <ul class="space-y-1">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Hingga 10 halaman + halaman produk dinamis
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Sistem manajemen produk & transaksi
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Desain responsif & clean
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Admin panel lengkap (CRUD produk, pesanan, user)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Masa aktif 1 tahun
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Pengerjaan 14-20 hari kerja
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        3x revisi desain besar
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Hosting premium 1 tahun
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">
                                Fitur :
                            </h3>
                            <ul class="space-y-1">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Katalog produk & halaman checkout
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Payment gateway (manual/otomatis)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Lacak pesanan & manajemen stok
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Notifikasi email pelanggan
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Kupon diskon & promo
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Testimoni pelanggan


                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Chat WhatsApp & integrasi Instagram Shop
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-h-screen flex items-center justify-center bg-gray-50 px-4 pt-8 md:pt-12">

                <div class="max-w-5xl w-full rounded-xl border border-gray-300 bg-white p-6 md:p-10 font-sans text-black">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 md:gap-10">
                        <div class="flex flex-col gap-2 md:basis-1/3">
                            <h1 class="font-semibold text-lg md:text-xl">
                                Template Website
                            </h1>
                            <p class="text-xl md:text-2xl font-normal">
                                Rp.
                                <span class="font-semibold">
                                    250,000 -
                                </span>
                                Rp.
                                <span class="font-semibold">
                                    2,000,000
                                </span>
                            </p>
                           
                            <p class="text-xs md:text-sm">
                            Template website adalah paket source code siap pakai (HTML/CSS/JS atau Laravel) yang bisa Anda gunakan langsung atau modifikasi sendiri.
                           
                            </p>
                            <button class="mt-4 w-max bg-black text-white text-xs md:text-sm rounded-full px-6 py-2 btn-shadow" type="button">
                                Pesan Website Sekarang!
                            </button>
                        </div>
                        <div class="md:basis-2/3 bg-white rounded-lg p-2 flex gap-4 overflow-x-auto scrollbar-hide">

                            <img alt="Preview of a landing page with dark theme, showing a black background with green call-to-action buttons and product images" class="rounded-md flex-shrink-0" height="150" src="https://storage.googleapis.com/a1aa/image/f0e7d510-8736-466f-3021-4d66c1661334.jpg" width="300" />
                            <img alt="Preview of a landing page with light theme, showing a white background with fashion sale banners and product images" class="rounded-md flex-shrink-0" height="150" src="https://storage.googleapis.com/a1aa/image/a77c10ee-2081-434f-7d09-7f51ce25f311.jpg" width="300" />
                        </div>
                    </div>
                    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-6 text-xs md:text-sm text-gray-700">
                        <div>
                            <h3 class="font-semibold mb-2">
                                Spesifikasi :
                            </h3>
                            <ul class="space-y-1">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        File siap edit (Figma / HTML / WordPress Elementor)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Responsive dan SEO friendly
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>

                                        Bisa di-custom warna & font
                                    </span>
                                </li>

                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Waktu pengiriman instan / max 3 hari
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Cocok untuk pemula & developer
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-2">
                                Fitur :
                            </h3>
                            <ul class="space-y-1">
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Komponen reusable (card, CTA, header, footer)
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        UI modern dan bersih
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Struktur file rapi dan mudah diedit
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Dokumentasi penggunaan
                                    </span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="fas fa-check-circle text-green-500 mt-[3px]">
                                    </i>
                                    <span>
                                        Update versi jika ada bug minor
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      


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