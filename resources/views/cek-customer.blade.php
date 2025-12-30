<x-app-layout>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gray-50">
        
        <h1 class="text-4xl font-bold text-[#7FB3D5] mb-8">Cek Data Customer</h1>

        <div class="w-full max-w-md bg-white p-8 rounded-2xl shadow-xl">    
            <form action="{{ route('order.check') }}" method="POST">
                @csrf
                
                <div class="mb-6">
                    <label class="block text-gray-700 font-bold mb-2">Nomor WhatsApp Customer</label>
                    
                    <input type="number" name="no_hp" placeholder="Contoh: 08123456789" required
                        class="w-full p-4 bg-gray-100 border border-gray-200 rounded-xl focus:ring-2 focus:ring-blue-400 focus:bg-white transition
                        @error('no_hp') border-red-500 @enderror">
                    
                    @error('no_hp')
                        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-[#3b66ff] text-white py-4 rounded-xl font-bold text-lg hover:bg-blue-700 shadow-lg transition transform hover:-translate-y-1">
                    CARI CUSTOMER
                </button>
            </form>
        </div>
        
    </div>
</x-app-layout>