<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.15/dist/tailwind.min.css" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


    <div class="flex items-center justify-center min-h-screen max-h-screen">
        {{-- style="background-image: url('{{ asset('image/Sign In.png') }}'); background-size: cover; "> --}}

        <div
            class="relative flex flex-col m-6  space-y-4 bg-white shadow-2xl rounded-2xl md:flex-row md:space-y-0 lg:max-w-screen">

            <div class="relative bg-[#628F8E] rounded-l-2xl w-full md:w-[500px] flex justify-center items-center">
                <div class="hidden md:block text-white text-center">
                    <h1 class="lg:text-2xl text font-bold">Selamat Datang di</h1>
                    <h1 class="text-3xl font-extrabold">SILABOE</h1>
                    <h1 class="text-lg">Masuk untuk akses lebih banyak</h1>
                </div>
                {{-- <img class="hidden md:block absolute bottom-0 rounded-b-2xl" src="{{ asset('image/gambarauth.png') }}"> --}}
            </div>

            <!-- left side -->
            <div class="flex flex-col justify-center p-8 md:p-14 w-[500px] lg:w-[520px]  ">
                <div class="flex flex-col justify-center items-center lg:mb-8">
                    <img src="{{ asset('image/logo.png') }}" alt="Welcome back"
                        class="h-12 w-12 item-center justify-center" />
                    <span class="font-semibold text-black text-lg">
                        SILABOE
                    </span>
                    <span class="font-semibold text-black">
                        Sistem Informasi Laboratorium TRPL
                    </span>
                </div>

                <form action="" class="flex flex-col gap-4">
                    <div class="text-[#4C8F8B] text-xl font-semibold ">Email</div>
                    <input class="p-2  mb-4 rounded-xl border" type="email" name="email" placeholder="Email">
                    <div class="text-[#4C8F8B] text-xl font-semibold ">Password</div>
                    <div class="relative">
                        <input class="p-2 rounded-xl border w-full" type="password" name="password"
                            placeholder="Password">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#628F8E"
                            class="bi bi-eye absolute top-1/2 right-3 -translate-y-1/2" viewBox="0 0 16 16">
                            <path
                                d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                            <path
                                d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                        </svg>
                    </div>

                </form>
                <div class="flex justify-between w-full py-4">
                    <div class="mr-24">
                        <input type="checkbox" name="ch" id="ch" class="mr-2" />
                        <span class="text-md text-gray-400 ">Remember Me </span>
                    </div>
                    <button class="text-md text-gray-400 ">Lupa password ?</button>
                </div>
                <button
                    class="bg-[#628F8E] mt-8 rounded-md font-semibold text-white py-2 mx-24 hover:scale-105 duration-300">Masuk</button>

                <div class="text-center text-gray-400 mt-4">
                    Belum Punya Akun ?
                    <a href="/register" class="font-bold text-[#F5CD51]">Daftar </a>
                </div>
            </div>
            <!-- {/* right side */} -->




        </div>
    </div>
    </img>

</body>

</html>
