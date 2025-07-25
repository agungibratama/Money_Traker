<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=menu" />

    <title>Money Track</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 font-sans">
    <!-- Navbar -->
    <nav class="bg-white/80 backdrop-blur-md shadow-lg sticky top-0 z-50"">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0 flex items-center">
                        <i class="fas fa-wallet text-indigo-600 text-2xl mr-2"></i>
                        <span class="text-xl font-bold text-indigo-600">MoneyTrack</span>
                    </div>
                </div>
                <div class="hidden sm:ml-6 sm:flex sm:items-center space-x-4">
                    <a href="#fitur" class="text-gray-700 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Fitur</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Harga</a>
                    <a href="#" class="text-gray-700 hover:text-indigo-600 px-3 py-2 text-sm font-medium">Tentang</a>
                    <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700">Masuk</a>
                </div>
                <div class="-mr-2 flex items-center sm:hidden">
                    <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-controls="mobile-menu" aria-expanded="false">
                        
                        <span class="material-symbols-outlined ">menu</span>
                        <i class="fas fa-bars "></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="sm:hidden hidden" id="mobile-menu">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="bg-indigo-50 border-indigo-500 text-indigo-700 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Fitur</a>
                <a href="#" class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Harga</a>
                <a href="#" class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Tentang</a>
                <a href="#" class="border-transparent text-gray-600 hover:bg-gray-50 hover:border-gray-300 hover:text-gray-800 block pl-3 pr-4 py-2 border-l-4 text-base font-medium">Masuk</a>
            </div>
        </div>
    </nav>


    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-500 to-purple-600 overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="container mx-auto px-6 py-24 relative z-10">
        <div class="flex flex-col lg:flex-row items-center">

            <!-- Kolom Kiri (Teks) -->

            <div class="lg:w-1/2 mb-16 lg:mb-0 lg:pr-12">

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white mb-6 leading-tight">
                            Kelola Keuangan
                            <span class="text-yellow-300">Dengan Mudah</span>
                        </h1>

                        <p class="text-lg text-white opacity-90 mb-8">
                            MoneyTrack membantu Anda mengatur pemasukan dan pengeluaran secara real-time, membuat anggaran, dan mencapai tujuan finansial Anda.
                        </p>

                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                    <a href="{{ route('MoneyTrack') }}">
                            <button class="px-8 py-3 bg-yellow-400 text-gray-900 font-semibold rounded-lg hover:bg-yellow-300 transition duration-300 transform hover:scale-105 shadow-lg">
                            Mulai Sekarang
                        </button>
                    </a>
                        
                        <button class="px-8 py-3 border-2 border-white text-white font-semibold rounded-lg hover:bg-white hover:text-purple-600 transition duration-300">
                            Pelajari Lebih Lanjut
                        </button>
                    </div>

            </div>

            <!-- Kolom Kanan (Gambar) -->
                <div class="lg:w-1/2 relative">
                    <div class="relative rounded-xl overflow-hidden shadow-2xl transform hover:scale-105 transition duration-500">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" alt="Finance dashboard" 
                             class="w-full h-auto object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-blue-500 to-transparent opacity-30"></div>
                    </div>
                    
                    <!-- Elemen Dekoratif -->
                    <div class="absolute -top-6 -left-6 w-24 h-24 bg-yellow-400 rounded-full opacity-20 z-0"></div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-purple-300 rounded-full opacity-20 z-0"></div>
                </div>



        </div>
                
          
            
    </div>

    <!-- Gelombang Dekoratif Bawah -->
        <div class="absolute bottom-0 left-0 right-0">
            <svg viewBox="0 0 1440 120" class="w-full">
                <path fill="#FFFFFF" fill-opacity="1" d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,85.3C672,75,768,85,864,106.7C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,120L1392,120C1344,120,1248,120,1152,120C1056,120,960,120,864,120C768,120,672,120,576,120C480,120,384,120,288,120C192,120,96,120,48,120L0,120Z"></path>
            </svg>
        </div>

    
    </section>

    <!-- Features Section -->
    <section id="fitur" class=" py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h2 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Fitur Unggulan</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Cara Lebih Baik Mengelola Uang Anda
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    MoneyTrack dilengkapi dengan segala yang Anda butuhkan untuk mengontrol keuangan pribadi atau bisnis.
                </p>
            </div>

            <div class="mt-10">
                <div class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-chart-line text-xl"></i>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Pelacakan Real-time</p>
                        <p class="mt-2 ml-16 text-base text-gray-500">
                            Pantau pemasukan dan pengeluaran Anda secara real-time dengan antarmuka yang intuitif.
                        </p>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-piggy-bank text-xl"></i>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Anggaran Pintar</p>
                        <p class="mt-2 ml-16 text-base text-gray-500">
                            Buat anggaran untuk berbagai kategori dan dapatkan notifikasi ketika mendekati batas.
                        </p>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-bullseye text-xl"></i>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Tujuan Finansial</p>
                        <p class="mt-2 ml-16 text-base text-gray-500">
                            Tetapkan tujuan tabungan dan lacak kemajuan Anda menuju mencapainya.
                        </p>
                    </div>

                    <div class="relative">
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <i class="fas fa-file-invoice-dollar text-xl"></i>
                        </div>
                        <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Laporan Detail</p>
                        <p class="mt-2 ml-16 text-base text-gray-500">
                            Hasilkan laporan keuangan mendetail dengan visualisasi yang mudah dipahami.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-gradient-to-r from-blue-500 to-purple-600">
        <div class="max-w-2xl mx-auto text-center py-16 px-4 sm:py-20 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                <span class="block">Siap mengontrol keuangan Anda?</span>
                <span class="block">Daftar sekarang gratis.</span>
            </h2>
            <p class="mt-4 text-lg leading-6 text-indigo-200">
                MoneyTrack membantu lebih dari 10.000 orang mengelola keuangan mereka dengan lebih baik.
            </p>
            <a href="#" class="mt-8 w-full inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 sm:w-auto">
                Daftar Gratis
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Produk</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Fitur</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Harga</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">API</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Perusahaan</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Tentang</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Karir</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Bantuan</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Pusat Bantuan</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Kontak</a></li>
                        <li><a href="#" class="text-base text-gray-300 hover:text-white">Privasi</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Ikuti Kami</h3>
                    <div class="mt-4 flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-facebook-f text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-twitter text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <i class="fab fa-linkedin-in text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="#" class="text-gray-400 hover:text-white">Privasi</a>
                    <a href="#" class="text-gray-400 hover:text-white">Syarat</a>
                    <a href="#" class="text-gray-400 hover:text-white">Cookie</a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                    &copy; 2023 MoneyTrack. All rights reserved.
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Simple mobile menu toggle
        document.querySelector('button[aria-controls="mobile-menu"]').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>

    
</html>