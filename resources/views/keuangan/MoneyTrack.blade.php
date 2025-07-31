<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Money Tracker</title>
      @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">

    <!-- Notifikasi Sukses -->
   @if(session('success'))
<div id="notification" class="fixed top-4 right-4 bg-green-500 text-white px-4 py-3 rounded shadow-md flex">
    <span class="mr-4">{{ session('success') }}</span>
    <button onclick="this.parentElement.remove()" class="font-bold">&times;</button>
</div>

<script>
    setTimeout(() => {
        const notif = document.getElementById('notification');
        if (notif) notif.remove();
    }, 5000);
</script>
@endif

    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Header -->
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-indigo-600">Money Tracker</h1>
            <p class="text-gray-600">Kelola keuangan Anda dengan mudah</p>
        </header>

        <!-- Saldo Card -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Saldo Anda</h2>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Total Saldo</p>
                    <p class="text-xl  md:text-3xl font-bold text-green-600">Rp {{ number_format($totalSaldo,'2',',','.') }}</p>
                </div>
                <div class="flex space-x-4">
                    <div class="text-center ">
                        <p class="text-gray-500">Uang Masuk</p>
                        <p class=" text-md md:text-xl font-semibold text-green-500">Rp {{ number_format($totalMasuk,'2',',','.') }}</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-500">Uang Keluar</p>
                        <p class="text-md md:text-xl font-semibold text-red-500">Rp {{ number_format($totalKeluar,'2',',','.') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transaction Tabs -->
        <div class="mb-6">
            <div class="flex border-b border-gray-200" id="tabs">

                {{-- tab semua transaksi --}}
                <button class="tab-button py-2 px-4 font-medium text-blue-600 border-b-2 border-blue-600" data-tab-target="semua">
                    <i class="fas fa-list mr-2"></i>Semua Transaksi
                </button>

                {{-- tab semua uang masuk --}}
                <button class="tab-button py-2 px-4 font-medium text-gray-500  hover:text-blue-600" data-tab-target="masuk">
                    <i class="fas fa-arrow-down mr-2 text-green-500"></i>Uang Masuk
                </button>

                {{-- tab semua uang keluar --}}
                <button class="tab-button py-2 px-4 font-medium text-gray-500 hover:text-blue-600" data-tab-target="keluar">
                    <i class="fas fa-arrow-up mr-2 text-red-500"></i>Uang Keluar
                </button>
            </div>
        </div>

        <!-- Transaction Content -->

        <!-- All Transaction List -->
        <div id="tab-semua" class="tab-content block">          
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Uang Masuk -->
                @include('keuangan.uangMasuk')         
    
                <!-- Uang Keluar -->
                @include('keuangan.uangKeluar')
            </div>
        </div>
        <!-- Uang Masuk List -->
        <div id="tab-masuk" class="tab-content hidden">
            @include('keuangan.uangMasuk')
        </div>
        <!-- Uang Keluar List -->
        <div id="tab-keluar" class="tab-content hidden">
            @include('keuangan.uangKeluar')
        </div>

        
        <!-- Add Floating Button for Mobile -->
        <div class="fixed bottom-6 right-6 hidden">
            <button class="bg-blue-600 text-white p-4 rounded-full shadow-lg hover:bg-blue-700 transition">
                <i class="fas fa-plus text-xl"></i>
            </button>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-white mt-12">
  <div class="max-w-4xl mx-auto px-4 py-4 text-gray-600 text-sm">
    <div class="flex flex-col md:flex-row justify-between items-center">
      <!-- Brand -->
      <div class="mb-4 md:mb-0 flex items-center space-x-2">
        <i class="fas fa-coins text-indigo-600 text-xl"></i>
        <span class="font-semibold text-indigo-600">Money Tracker</span>
      </div>

      <!-- Links -->
      <div class="flex space-x-6">
        <a href="#" class="hover:text-indigo-600 transition">Tentang</a>
        <a href="#" class="hover:text-indigo-600 transition">Kontak</a>
        <a href="#" class="hover:text-indigo-600 transition">Privasi</a>
      </div>
    </div>

    <div class="mt-4 text-center text-xs text-gray-400">
      &copy; {{ date('Y') }} Money Tracker. All rights reserved.
    </div>
  </div>
</footer>
  
    <script src="{{ asset('js/money.js') }}"></script>
</body>
</html>