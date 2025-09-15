<x-layout.app>
    {{-- section --}}
    <section class="w-[73%] mx-auto mt-10 flex gap-6 rounded-lg p-2">
        <!-- Aside -->
        <div class="w-1/4">
            <ul class="flex flex-col space-y-4 sticky top-5">
                {{-- laptop --}}
                <li
                    class="flex justify-center items-center p-4 bg-white rounded-lg shadow hover:bg-gray-50 transition duration-300">
                    <a href="#" class="flex gap-2 items-center justify-center hover:text-blue-400">
                        <img src="{{ asset('1.png') }}" class="object-cover" alt="Laptop">
                    </a>
                </li>

                <li
                    class="flex justify-center items-center p-4 bg-white rounded-lg shadow hover:bg-gray-50 transition duration-300">
                    <a href="#" class="flex gap-2 items-center justify-center hover:text-blue-400">
                        <img src="{{ asset('2.png') }}" class="object-cover" alt="PC">
                    </a>
                </li>

                <li
                    class="flex justify-center items-center p-4 bg-white rounded-lg shadow hover:bg-gray-50 transition duration-300">
                    <a href="#" class="flex gap-2 items-center justify-center hover:text-blue-400">
                        <img src="{{ asset('3.png') }}" class="object-cover" alt="Peripheral">
                    </a>
                </li>

                <li
                    class="flex justify-center items-center p-4 bg-white rounded-lg shadow hover:bg-gray-50 transition duration-300">
                    <a href="#" class="flex gap-2 items-center justify-center hover:text-blue-400">
                        <img src="{{ asset('3.png') }}" class="object-cover" alt="Icon">
                    </a>
                </li>

                <li
                    class="flex justify-center items-center p-4 bg-white rounded-lg shadow hover:bg-gray-50 transition duration-300">
                    <a href="#" class="flex gap-2 items-center justify-center hover:text-blue-400">
                        <img src="{{ asset('4.png') }}" class="object-cover" alt="Laptop Again">
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->

        <div class="w-full  rounded-lg">
            <div class="flex w-full">
                <img src="{{ asset('hard.jpg') }}" alt="">
            </div>
            <div class="mt-6 grid grid-cols-3 gap-6">

                @foreach ($hardwares as $hardware)
                    <div
                        class="bg-white border border-gray-300 rounded-lg shadow-md flex flex-col items-center justify-center p-3 hover:shadow-lg transition">
                        <a href="{{ url('peripherals/' . $hardware['id']) }}">
                            <img src="{{ $hardware['image'] }}" class="h-32 w-full object-cover mb-2 rounded-lg"
                                alt="{{ $hardware['name'] }}">
                        </a>
                        <h3 class="text-lg font-semibold">{{ $hardware['name'] }}</h3>
                        <p class="text-gray-600">${{ $hardware['price'] }}</p>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


</x-layout.app>
