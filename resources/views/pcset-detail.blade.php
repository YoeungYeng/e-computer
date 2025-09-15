<x-layout.app>
    {{-- page detail --}}
    <section class="container mx-auto p-6 space-y-6 w-[73%] mt-10">
        {{-- back --}}


        <div class="bg-white border border-gray-300 rounded-lg shadow-md p-6">
            <div class="flex flex-col md:flex-row gap-6">
                <div class="md:w-1/3">
                    <img src="{{ asset($computer['image']) }}" alt="{{ $computer['name'] }}"
                        class="w-full h-auto object-cover rounded-lg">
                </div>
                <div class="md:w-2/3">
                    <h2 class="text-2xl font-bold mb-4">{{ $computer['name'] }}</h2>
                    <p class="text-gray-700 mb-4">Brand: {{ $computer['brand'] }}</p>
                    <p class="text-gray-700 mb-4">Price: ${{ $computer['price'] }}</p>
                    <h3 class="text-xl font-semibold mb-2">Specifications:</h3>
                    
                    <div class="flex  items-center gap-4 mt-6">
                        {{-- quantity --}}
                        {{-- button increase --}}
                        {{-- value --}}
                        {{-- button deincrease --}}
                        <button
                            class="cursor-pointer px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition duration-300">
                            1
                        </button>
                        <span class="text-2xl shadow w-[100px] text-center">2</span>
                        <button
                            class="cursor-pointer px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300 transition duration-300">
                            2
                        </button>
                        <button
                            class="cursor-pointer px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500 transition duration-300">
                            Add to Cart
                        </button>
                    </div>
                    {{-- add to cart --}}


                </div>
            </div>
        </div>
</x-layout.app>
