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
                        <i class="fas fa-arrow-down mr-1"></i>Rp {{ number_format($totalMasuk,'2',',','.') }}
                    </span>
                </div>
                
                <div class="space-y-4">
                    @foreach ($uangMasuks as $uangMasuk)

                    <!-- Transaction Item 1 -->
                    <div class="flex items-start p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-green-100 p-3 rounded-full mr-4">
                            <i class="fas fa-money-bill-wave text-green-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-800">{{ $uangMasuk->deskripsi}}</h3>
                            <p class="text-sm text-gray-500">{{date_format($uangMasuk->tanggal,"Y/m/d")  }}</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-green-600">+ Rp {{ number_format($uangMasuk->jumlah,2,",",".") }}</p>
                            <p class="text-xs text-gray-500">{{ $uangMasuk->kategori }}</p>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="display: block space-x-2 ml-4">
                            <div class="text-blue-600"><a href=""><i class="fa-regular fa-pen-to-square"></i></a></div>
                            
                            {{-- tombol hapus --}}
                        <div class="text-red-600 hover:opacity-75">
                            {{-- Form untuk menghapus uang masuk --}}   
                            <form action="{{ route('moneyTrack.masuk-destroy', $uangMasuk->id) }}" method="POST" class="inline">
                              @csrf
                              @method('DELETE')  
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')"> <i class="fas fa-trash"></i>
                            </button>
                        </form>
                        </div>                     
                    </div>
                        
                    @endforeach
                    
                </div>
                <a href="{{ route('moneyTrack.masuk-create') }}"><button class="mt-4 w-full py-2 text-blue-600 font-medium rounded-lg hover:bg-blue-50 transition">
                    <i class="fas fa-plus mr-2"></i>Tambah Uang Masuk
                </button></a>
                
            </div>
            </div>


            <!-- Uang Keluar -->
            <div class="bg-white rounded-lg shadow-md p-6 ">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">Uang Keluar</h2>
                    <span class="bg-red-100 text-red-800 text-sm font-medium px-2.5 py-0.5 rounded">
                        <i class="fas fa-arrow-up mr-1"></i>Rp {{ number_format($totalKeluar,'2',',','.') }}
                    </span>
                </div>
                
                <div class="space-y-4">

                    @foreach ($uangKeluars as $uangKeluar)
                      <!-- Transaction Item 1 -->
                    <div class="flex items-start p-3 hover:bg-gray-50 rounded-lg transition">
                        <div class="bg-red-100 p-3 rounded-full mr-4">
                            <i class="fas fa-shopping-cart text-red-600"></i>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-medium text-gray-800">{{ $uangKeluar->deskripsi }}</h3>
                            <p class="text-sm text-gray-500">{{date_format($uangKeluar->tanggal,"Y/m/d")  }}</p>
                        </div>
                        <div class="text-right">
                            <p class="font-semibold text-red-600">- Rp {{ number_format($uangKeluar->jumlah,2,",",".") }}</p>
                            <p class="text-xs text-gray-500">{{ $uangKeluar->kategori }}</p>
                            <p class="text-xs text-gray-500">Metode Pembayaran: {{ $uangKeluar->metode_pembayaran }}</p>
                        </div>

                        {{-- Action Buttons --}}
                        <div class="display: block space-x-2 ml-4">
                            <div class="text-blue-600"><a href=""><i class="fa-regular fa-pen-to-square"></i></a></div>
                            {{-- tombol hapus --}}
                        <div class="text-red-600 hover:opacity-75">
                            {{-- Form untuk menghapus uang masuk --}}   
                            <form action="{{ route('moneyTrack.keluar-destroy', $uangKeluar->id) }}" method="POST" class="inline">
                              @csrf
                                @method('DELETE')  
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
                        

                        </div>
                        
                    </div>  
                    @endforeach
                    
                </div>
                
                 <a href="{{ route("moneyTrack.keluar-create") }}"><button class="mt-4 w-full py-2 text-red-600 font-medium rounded-lg hover:bg-blue-50 transition">
                    <i class="fas fa-plus mr-2"></i>Tambah Uang Keluar
                </button></a>
            </div>
        </div>
        
        <!-- Add Floating Button for Mobile -->
        <div class="fixed bottom-6 right-6 hidden">
            <button class="bg-blue-600 text-white p-4 rounded-full shadow-lg hover:bg-blue-700 transition">
                <i class="fas fa-plus text-xl"></i>
            </button>
        </div>
    </div>
</body>
</html>