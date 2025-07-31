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

                        {{-- tombol edit --}}
                        <div class="space-x-2 ml-4">
                            <div class="text-blue-600"><a href="{{ route('moneyTrack.keluar-edit', $uangKeluar->id) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                        </div>

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

                <!-- Pagination -->
            <div class="mt-20 flex justify-center">
               {{ $uangKeluars->onEachSide(1)->links('components.custom-pagination') }}
            </div>
                
                 <a href="{{ route("moneyTrack.keluar-create") }}"><button class="mt-4 w-full py-2 text-red-600 font-medium rounded-lg hover:bg-blue-50 transition">
                    <i class="fas fa-plus mr-2"></i>Tambah Uang Keluar
                </button></a>
            </div>