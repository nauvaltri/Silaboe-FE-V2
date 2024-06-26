@extends('layouts.homelayouts')
@section('content')
    {{-- <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Full Calendar js</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head> --}}

    {{-- <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center mt-5">FullCalendar js Laravel series with Career Development Lab</h3>
                <div class="col-md-11 offset-1 mt-5 mb-5">

                    <div id="calendar">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({})
        });
    </script> --}}

    <sectio n class="lg:mx-24 md:mx-6 mx-4 bg-white flex flex-col">
        <div class="border-b-2 border-yellow-500 w-[100%] mb-2 mt-12"></div>
        <div class="py-4">

            <div class=" lg:text-3xl text-xl font-bold text-[#628F8E] mb-4">RESERVASI LABORATORIUM HU104</div>
            <div class="flex flex-row item-center gap-4">
                <svg class="" width="16" height="16" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.5 7.5C6.46875 7.5 5.58594 7.13281 4.85156 6.39844C4.11719 5.66406 3.75 4.78125 3.75 3.75C3.75 2.71875 4.11719 1.83594 4.85156 1.10156C5.58594 0.367188 6.46875 0 7.5 0C8.53125 0 9.41406 0.367188 10.1484 1.10156C10.8828 1.83594 11.25 2.71875 11.25 3.75C11.25 4.78125 10.8828 5.66406 10.1484 6.39844C9.41406 7.13281 8.53125 7.5 7.5 7.5ZM0 15V12.375C0 11.8438 0.136875 11.3556 0.410625 10.9106C0.684375 10.4656 1.0475 10.1256 1.5 9.89062C2.46875 9.40625 3.45312 9.04312 4.45312 8.80125C5.45312 8.55937 6.46875 8.43812 7.5 8.4375C8.53125 8.4375 9.54687 8.55875 10.5469 8.80125C11.5469 9.04375 12.5312 9.40688 13.5 9.89062C13.9531 10.125 14.3166 10.465 14.5903 10.9106C14.8641 11.3562 15.0006 11.8444 15 12.375V15H0Z"
                        fill="#F5CD51" />
                </svg>

                <div class=" text-sm lg:text-xl font-semibold  text-black">Oleh : trpl.sv</div>
            </div>
        </div>

        <body>
            <div class="container mx-auto py-6">
                <div class="bg-white p-6 rounded shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h1 class="text-3xl font-bold text-gray-700">Form Reservasi Laboratorium HU104</h1>
                        <p class="text-gray-500">Oleh: trpl.sv</p>
                    </div>
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/3 lg:w-1/4">
                            <div class="mb-4">
                                <div id="calendar" class="overflow-auto max-h-96"></div>
                            </div>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded">Riwayat Reservasi</button>
                        </div>
                        <div class="w-full md:w-2/3 lg:w-3/4">
                            <div class="bg-white p-4 rounded shadow">
                                <div id="event-list" class="text-gray-700"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>
            <script src="https://apis.google.com/js/api.js"></script>

        </body>














  

        <div class="bg-[#e9f8f7]  border-[#4C8F8B] border-2 rounded-lg  min-h-24   px-8 py-4 my-12">
            <div class="flex flex-col text-justify ">
                <div class="lg:text-2xl text-md pb-4 font-semibold flex justify-start">Aturan /Syarat Pemesanan oleh
                    Pengguna</div>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">1. Hari reservsi minimal kurang dari 3 hari </h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">2. Hari reservsi minimal kurang dari 3 hari </h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">3. Hari reservsi minimal kurang dari 3 hari </h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">4. Hari reservsi minimal kurang dari 3 hari </h1>
                <h1 class="lg:text-xl text-md text-[#4C8F8B] ">5. Hari reservsi minimal kurang dari 3 hari </h1>
            </div>

        </div>

        <div class="bg-gray-20 border-2 border-[#DADADA] lg:px-8 lg:py-6 lg:mb-24 p-6 w-full ">

            <h1 class="text-black font-bold lg:text-2xl text-xl  mb-8 ">Form Peminjaman</h1>
            <div class=" lg:mx-16 mx-2 bg-white rounded-xl border-[#DADADA] border-2">
                <div class="bg-[#628F8E] w-full px-12   py-2 rounded-t-xl border-[#DADADA] border-b-2">
                    <div class="text-white font-medium text-xl ">Identitas</div>
                </div>
                <form class="lg:px-12 px-4 py-6">
                    <div class=" lg:gap-32 ">
                        <div class=" w-full">
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 lg:text-xl text-md font-medium text-gray-900">Email</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border text-sm border-[#DADADA] text-gray-200 lg:text-lg  rounded-lg  block w-full p-2 lg:p-4 dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white "
                                    placeholder="Masukkan Nama Email Peminjam" required />
                            </div>
                            <div class="mb-5">
                                <label for="email"
                                    class="block mb-2 lg:text-xl text-md font-medium text-gray-900">Nama</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border text-sm border-[#DADADA] text-gray-200 lg:text-lg  rounded-lg  block w-full p-2 lg:p-4 dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white "
                                    placeholder="Masukkan Nama Peminjam" required />
                            </div>
                            <div class="mb-8">
                                <label for="email" class="block mb-2 lg:text-xl text-md font-medium text-gray-900">No
                                    Whatsap</label>
                                <input type="email" id="email"
                                    class="bg-gray-50 border text-sm border-[#DADADA] text-gray-200 lg:text-lg  rounded-lg  block w-full p-2 lg:p-4 dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white "
                                    placeholder="Masukkan No Whatsapp Peminjam" required />
                            </div>
                            <div class="mb-5">
                                <label for="email" class="block mb-2 lg:text-xl text-md font-medium text-gray-900">Foto
                                    Identitas (KTP/KTM) </label>
                                <button type="submit"
                                    class="text-white bg-[#628F8E] hover:scale-105 hover:text-yellow-200 focus:ring-4 focus:outline-none  font-semibold text-lg rounded-lg mt-4 w-full sm:w-auto px-8 py-2.5 text-center  dark:hover:bg-blue-70 ">Pilih
                                    File
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class=" lg:mx-16 lg:my-24 mx-2 my-16 bg-white rounded-xl border-[#DADADA] border-2">
                <div class="bg-[#628F8E] w-full px-12 py-2 rounded-t-xl border-[#DADADA] border-b-2">
                    <div class="text-white font-medium text-xl ">Waktu dan Keterangan</div>
                </div>
                <div class="flex lg:flex-row flex-col  lg:m-8 gap-4 lg:gap-12 ">
                    <div date-rangepicker class=" ">
                        <div class="flex flex-col md:gap-6 lg:gap-6 gap-4 max-w-max lg:px-8 px-4 py-6">
                            <div class="mb-5">


                                <label for="email" class="block mb-4 text-md lg:text-xl font-medium text-black">Tanggal
                                    Mulai</label>
                                <div class="relative gap-2">
                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="start" type="text"
                                        class="bg-gray-50 border text-center  border-[#DADADA] text-gray-900 lg:text-lg text-md rounded-lg block w-full pl-12 lg:p-4 p-2  dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white "
                                        placeholder="10/02/2024">
                                </div>


                            </div>
                            <div class="mb-5">
                                <label for="email" class="block mb-4 lg:text-xl text-md font-medium text-black">Tanggal
                                    Selesai</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="gray-500" viewBox="0 0 20 20">
                                            <path
                                                d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                        </svg>
                                    </div>
                                    <input name="start" type="text"
                                        class="bg-gray-50 border text-center border-[#DADADA] text-gray-900 lg:text-lg text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-12 lg:p-4 p-2  dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="12/02/2024">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col md:gap-6 lg:gap-8 max-w-max p-4">
                        <div class="mb-6 ">
                            <label for="email" class="block mb-4 lg:text-xl text-md font-medium text-black">Jam
                                Mulai</label>
                            <div class="relative ">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">

                                </div>
                                <input type="time" id="time"
                                    class="bg-gray-50 border lg:px-8 leading-none border-gray-300 text-gray-50 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-4 dark:bg-gray-20 dark:border-gray-20 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-gray-400 dark:focus:border-gray-500"
                                    min="09:00" max="18:00" value="00:00" required />
                            </div>
                        </div>

                        <div class="mb-5">
                            <label for="email" class="block mb-4 lg:text-xl text-md font-medium text-black">Jam
                                Selesai</label>
                            <div class="relative ">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">

                                </div>
                                <input type="time" id="time"
                                    class="bg-gray-50 border lg:px-8 leading-none border-gray-300 text-gray-50 text-xl rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-4 py-4 dark:bg-gray-20 dark:border-gray-20 dark:placeholder-gray-400 dark:text-gray-400 dark:focus:ring-gray-400 dark:focus:border-gray-500"
                                    min="09:00" max="18:00" value="00:00" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-5 lg:py-8 lg:px-16 px-6">
                    <label for="email"
                        class="block mb-4 lg:text-xl text-md font-medium text-gray-900">Keterangan</label>
                    <input type="email" id="email"
                        class="bg-gray-50 border  border-[#DADADA] text-gray-200 lg:text-xl text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full px-8 pb-32 pt-4 dark:bg-gray-20 dark:border-[#DADADA] dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Masukkan keterangan  reservasi" required />
                </div>

            </div>

            <div class="flex flex-row gap-4 lg:my-16  justify-end lg:mx-16">
                <a href="{{ route('reservasilab.login') }}" type="submit"
                    class="text-white bg-[#499DBC] hover:scale-105   font-medium rounded-lg lg:text-xl md:text-md text-sm w-max-xl   lg:w-max-auto md:w-max-auto lg:px-8 lg:py-4 px-4 py-4 text-center dark:bg-[#499DBC]  ">Ajukan
                    Reservasi</a>
                <button type="submit"
                    class="text-white bg-[#D46857] hover:scale-105 font-medium rounded-lg lg:text-xl md:text-md text-sm w-max-xl lg:w-max-auto md:w-max-auto lg:px-8 lg:py-4 px-4 py-4 text-center dark:bg-[#D46857] ">cancel</button>
            </div>



        </div>
        </section>
        {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>
    <script src="../path/to/flowbite/dist/datepicker.js"></script> --}}
    @endsection
