<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-gray-100">
    {{-- navbar --}}
    <nav class="w-full  m-auto p-2">
        <div class="flex items-center justify-between w-[73%]  h-auto mt-1 m-auto">
            <ul class="flex gap-4  font-bold text-gray-600  text-lg">
                <li>
                    <a href="#" class="hover:text-gray-400 duration-300 transition "> About </a>
                </li>
                <li>
                    <a href="#" class="hover:text-gray-400 duration-300 transition "> Contact </a>
                </li>
                <li>
                    <a href="#" class="hover:text-gray-400 duration-300 transition "> Follow </a>
                </li>
                <li>
                    <a href="#" class="hover:text-gray-400 duration-300 transition "></a>
                </li>
                {{-- icons --}}
                <li>
                    <a href="#">
                        <span class="hover:text-gray-400 duration-300 transition ">
                            <i class="fa-brands fa-facebook"></i>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="hover:text-gray-400 duration-300 transition ">
                            <i class="fa-brands fa-square-twitter"></i>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="hover:text-gray-400 duration-300 transition">
                            <i class="fa-brands fa-tiktok"></i>
                        </span>
                    </a>
                </li>
            </ul>
            <div>
                <select name="language" id="language" class="py-1 rounded-xl px-5 outline-1 ">
                    <option value="kh">
                        KH
                    </option>
                    <option value="en">
                        EN
                    </option>
                </select>
            </div>
        </div>
        {{-- brain --}}
        <div class="flex items-center justify-between w-[73%]  h-auto mt-6 m-auto">
            <div>
                {{-- logo --}}
                <img src="{{ asset('php.png') }}" class="h-12 w-12 object-cover" alt="logo">
            </div>

            <div>
                {{-- register, login --}}
                <ul class="flex gap-5">
                    <li>
                        <a href="#" class="">
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="relative flex items-center justify-center transition duration-300 hover:text-gray-400">
                            <!-- Icon -->
                            <span class="text-lg">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </span>
                            <!-- Badge -->
                            <p
                                class="absolute -top-2 -right-2 flex items-center justify-center h-5 w-5 rounded-full bg-blue-600 text-white text-xs font-bold">
                                0
                            </p>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-gray-400 outline-gray-400 duration-300 transition ">
                            <span>
                                <i class="fa-solid fa-user"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-400 duration-300 transition ">
                            Register
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:text-gray-400 duration-300 transition ">
                            Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        {{--  --}}
        <div class="w-[73%] h-auto mt-6 m-auto">


            <div class="flex items-center justify-center">
                {{-- register, login --}}
                <ul class="flex bg-gray-200 divide-x divide-gray-500 border border-gray-500">
                    <li class="inline-flex p-6 w-56 justify-center items-center">
                        <a href="{{ url('/') }}"
                            class="flex gap-2 items-center justify-center duration-300 transition 
                  {{ Request::is('/') ? 'text-blue-600 font-bold ' : 'hover:text-blue-400' }}">
                            <img src="{{ asset('storage/assets/laptop.png') }}" class="h-12 w-12 object-cover"
                                alt="Laptop">
                            <span>Laptop</span>
                        </a>
                    </li>

                    <li class="inline-flex p-6 w-56 justify-center items-center">
                        <a href="{{ url('/hardware') }}"
                            class="flex gap-2 items-center justify-center duration-300 transition 
                  {{ Request::is('hardware') ? 'text-blue-600 font-bold ' : 'hover:text-blue-400' }}">
                            <img src="{{ asset('storage/assets/pc.png') }}" class="h-12 w-12 object-cover"
                                alt="PC Hardware">
                            <span>PC Hardware</span>
                        </a>
                    </li>

                    <li class="inline-flex p-6 w-56 justify-center items-center">
                        <a href="{{ url('/peripherals') }}"
                            class="flex gap-2 items-center justify-center duration-300 transition 
                  {{ Request::is('peripherals') ? 'text-blue-600 font-bold ' : 'hover:text-blue-400' }}">
                            <img src="{{ asset('storage/assets/perail.png') }}" class="h-12 w-12 object-cover"
                                alt="Peripherals">
                            <span>Peripherals</span>
                        </a>
                    </li>

                    <li class="inline-flex p-6 w-56 justify-center items-center">
                        <a href="{{ url('/accessories') }}"
                            class="flex gap-2 items-center justify-center duration-300 transition 
                  {{ Request::is('accessories') ? 'text-blue-600 font-bold ' : 'hover:text-blue-400' }}">
                            <img src="{{ asset('storage/assets/12.svg') }}" class="h-12 w-12 object-cover"
                                alt="Accessories">
                            <span>Accessories</span>
                        </a>
                    </li>

                    <li class="inline-flex p-6 w-56 justify-center items-center">
                        <a href="{{ url('/pcset') }}"
                            class="flex gap-2 items-center justify-center duration-300 transition 
                  {{ Request::is('pcset') ? 'text-blue-600 font-bold bg-white' : 'hover:text-blue-400' }}">
                            <img src="{{ asset('storage/assets/laptop.png') }}" class="h-12 w-12 object-cover"
                                alt="PC Set">
                            <span>PC Set</span>
                        </a>
                    </li>
                </ul>


            </div>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>
</body>

</html>
