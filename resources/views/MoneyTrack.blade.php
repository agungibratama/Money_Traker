<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Document</title>
      @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <!-- Header -->
        <header class="mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Money Tracker</h1>
            <p class="text-gray-600">Kelola keuangan Anda dengan mudah</p>
        </header>

        <!-- Saldo Card -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-700 mb-4">Saldo Anda</h2>
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-500">Total Saldo</p>
                    <p class="text-xl  md:text-3xl font-bold text-green-600">Rp 5.250.000</p>
                </div>
                <div class="flex space-x-4">
                    <div class="text-center ">
                        <p class="text-gray-500">Uang Masuk</p>
                        <p class=" text-md md:text-xl font-semibold text-green-500">Rp 7.500.000</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-500">Uang Keluar</p>
                        <p class="text-md md:text-xl font-semibold text-red-500">Rp 2.250.000</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Transaction Tabs -->
        <div class="mb-6">
            <div class="flex border-b border-gray-200">
                <button class="py-2 px-4 font-medium text-blue-600 border-b-2 border-blue-600">
                    <i class="fas fa-list mr-2"></i>Semua Transaksi
                </button>
                <button class="py-2 px-4 font-medium text-gray-500  hover:text-blue-600">
                    <i class="fas fa-arrow-down mr-2 text-green-500"></i>Uang Masuk
                </button>
                <button class="py-2 px-4 font-medium text-gray-500 hover:text-blue-600">
                    <i class="fas fa-arrow-up mr-2 text-red-500"></i>Uang Keluar
                </button>
            </div>
        </div>

        <!-- Transaction List -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Uang Masuk -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Uang Masuk</h2>
                    <span class="bg-green-100 text-green-800 text-sm font-medium px-2.5 py-0.5 rounded">
                        <i class="fas fa-arrow-down mr-1"></i>Rp 7.500.000
                    </span>
                </div>
                
                <div class="space-y-4">
                    <!-- Transaction Item 1 -->
                    <div class="flex items-start p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-money-bill-wave text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-800">Gaji Bulanan</h3>
                            <p class="text-sm text-gray-500">5 Juli 2023</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-green-600">+ Rp 5.000.000</p>
                            <p class="text-xs text-gray-500">Gaji</p>
                        </div>
                    </div>
                    
                    <!-- Transaction Item 2 -->
                    <div class="flex items-start p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-gift text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-800">Hadiah Ulang Tahun</h3>
                            <p class="text-sm text-gray-500">10 Juli 2023</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-green-600">+ Rp 1.000.000</p>
                            <p class="text-xs text-gray-500">Hadiah</p>
                        </div>
                    </div>
                    
                    <!-- Transaction Item 3 -->
                    <div class="flex items-start p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-hand-holding-usd text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-800">Freelance Project</h3>
                            <p class="text-sm text-gray-500">15 Juli 2023</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-green-600">+ Rp 1.500.000</p>
                            <p class="text-xs text-gray-500">Project</p>
                        </div>
                    </div>
                </div>
                <a href="/tambahMasuk"><button class="mt-4 w-full py-2 text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition">
                    <i class="fas fa-plus mr-2"></i>Tambah Uang Masuk
                </button></a>
                
            </div>
            
            <!-- Uang Keluar -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Uang Keluar</h2>
                    <span class="bg-red-100 text-red-800 text-sm font-medium px-2.5 py-0.5 rounded">
                        <i class="fas fa-arrow-up mr-1"></i>Rp 2.250.000
                    </span>
                </div>
                
                <div class="space-y-4">
                    <!-- Transaction Item 1 -->
                    <div class="flex items-start p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-red-100 p-3 rounded-full mr-4">
                            <i class="fas fa-shopping-cart text-red-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-800">Belanja Bulanan</h3>
                            <p class="text-sm text-gray-500">7 Juli 2023</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-red-600">- Rp 1.200.000</p>
                            <p class="text-xs text-gray-500">Belanja</p>
                        </div>
                    </div>
                    
                    <!-- Transaction Item 2 -->
                    <div class="flex items-start p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-red-100 p-3 rounded-full mr-4">
                            <i class="fas fa-utensils text-red-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-800">Makan di Restoran</h3>
                            <p class="text-sm text-gray-500">12 Juli 2023</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-red-600">- Rp 350.000</p>
                            <p class="text-xs text-gray-500">Makanan</p>
                        </div>
                    </div>
                    
                    <!-- Transaction Item 3 -->
                    <div class="flex items-start p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-red-100 p-3 rounded-full mr-4">
                            <i class="fas fa-bolt text-red-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-800">Bayar Listrik</h3>
                            <p class="text-sm text-gray-500">14 Juli 2023</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-red-600">- Rp 700.000</p>
                            <p class="text-xs text-gray-500">Tagihan</p>
                        </div>
                    </div>
                </div>
                
                 <a href="/tambahKeluar"><button class="mt-4 w-full py-2 text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition">
                    <i class="fas fa-plus mr-2"></i>Tambah Uang Masuk
                </button></a>
            </div>
        </div>
        
        <!-- Add Floating Button for Mobile -->
        <div class="fixed bottom-6 right-6 md:hidden">
            <button class="bg-blue-600 text-white p-4 rounded-full shadow-lg hover:bg-blue-700 transition">
                <i class="fas fa-plus text-xl"></i>
            </button>
        </div>
    </div>
</body>
</html>