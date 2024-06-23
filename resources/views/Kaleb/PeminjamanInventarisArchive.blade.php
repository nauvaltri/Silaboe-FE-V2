@extends('layouts.Adminlayouts')
@section('content')
<header class="bg-[#628F8E] text-white flex items-center justify-between px-8 py-6 sticky w-full top-0">
    <h2 class="text-2xl font-semibold">Jadwal Lab</h2>
    <div class="flex items-center space-x-4">
        <button class="text-white hover:text-gray-300 focus:outline-none">
            <img src="{{ asset('image/Notification.png') }}" class="  h-10 w-10" alt="Flowbite Logo" />
        </button>
        <div class="relative">
            <button
                class="flex items-center text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
                <img src="{{ asset('image/Profile.png') }}" class=" h-10 w-10 " alt="Flowbite Logo" />
            </button>
        </div>
    </div>
</header>
    <section class="flex-1 lg:mx-20 mx-6 my-8 flex-col flex lg:gap-6 md:gap-4 gap-4">


        <h2 class="lg:text-2xl text-xl font-bold mb-4 mt-6">Persetujuan Peminjaman Inventaris</h2>

        <div class="flex flex-row gap-4  md:w-auto">
            <div
                class="flex flex-row gap-3 items-center bg-[#F5CD51] px-8 py-2 hover:bg-[#608B8A] justify-center  md:w-auto rounded-xl">
                <button class="font-medium text-md lg:text-lg text-white flex items-center">
                    Publish
                </button>
                <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="path-1-inside-1_853_9284" fill="white">
                        <path
                            d="M17.43 18.4146H19.95V20.5251H13.65V14.1935H15.75V17.0744C17.6715 15.5231 18.9 13.1593 18.9 10.5C18.9 6.20502 15.687 2.64874 11.55 2.13166V0C16.8525 0.527638 21 5.02312 21 10.5C21 13.6553 19.614 16.4834 17.43 18.4146ZM2.1 10.5C2.1 7.8407 3.3285 5.46633 5.25 3.92563V6.80653H7.35V0.474874H1.05V2.58543H3.57C2.44819 3.57284 1.54931 4.78981 0.933605 6.15481C0.317901 7.5198 -0.000410612 9.00129 3.97521e-07 10.5C3.97521e-07 15.9769 4.1475 20.4724 9.45 21V18.8683C5.313 18.3513 2.1 14.795 2.1 10.5ZM14.952 6.39497L9.009 12.3678L6.0375 9.38141L4.557 10.8693L9.009 15.3437L16.4325 7.88291L14.952 6.39497Z" />
                    </mask>
                    <path
                        d="M17.43 18.4146H19.95V20.5251H13.65V14.1935H15.75V17.0744C17.6715 15.5231 18.9 13.1593 18.9 10.5C18.9 6.20502 15.687 2.64874 11.55 2.13166V0C16.8525 0.527638 21 5.02312 21 10.5C21 13.6553 19.614 16.4834 17.43 18.4146ZM2.1 10.5C2.1 7.8407 3.3285 5.46633 5.25 3.92563V6.80653H7.35V0.474874H1.05V2.58543H3.57C2.44819 3.57284 1.54931 4.78981 0.933605 6.15481C0.317901 7.5198 -0.000410612 9.00129 3.97521e-07 10.5C3.97521e-07 15.9769 4.1475 20.4724 9.45 21V18.8683C5.313 18.3513 2.1 14.795 2.1 10.5ZM14.952 6.39497L9.009 12.3678L6.0375 9.38141L4.557 10.8693L9.009 15.3437L16.4325 7.88291L14.952 6.39497Z"
                        fill="white" />
                    <path
                        d="M17.43 18.4146L13.4555 13.9197L1.58661 24.4146H17.43V18.4146ZM19.95 18.4146H25.95V12.4146H19.95V18.4146ZM19.95 20.5251V26.5251H25.95V20.5251H19.95ZM13.65 20.5251H7.65V26.5251H13.65V20.5251ZM13.65 14.1935V8.19347H7.65V14.1935H13.65ZM15.75 14.1935H21.75V8.19347H15.75V14.1935ZM15.75 17.0744H9.75V29.6295L19.519 21.7429L15.75 17.0744ZM11.55 2.13166H5.55V7.4284L10.8058 8.08533L11.55 2.13166ZM11.55 0L12.1441 -5.97051L5.55 -6.62668V0H11.55ZM5.25 3.92563H11.25V-8.5759L1.49663 -0.755419L5.25 3.92563ZM5.25 6.80653H-0.749999V12.8065H5.25V6.80653ZM7.35 6.80653V12.8065H13.35V6.80653H7.35ZM7.35 0.474874H13.35V-5.52513H7.35V0.474874ZM1.05 0.474874V-5.52513H-4.95V0.474874H1.05ZM1.05 2.58543H-4.95V8.58543H1.05V2.58543ZM3.57 2.58543L7.53425 7.08929L19.4679 -3.41457H3.57V2.58543ZM3.97521e-07 10.5H6L6 10.4984L3.97521e-07 10.5ZM9.45 21L8.85589 26.9705L15.45 27.6267V21H9.45ZM9.45 18.8683H15.45V13.5716L10.1942 12.9147L9.45 18.8683ZM14.952 6.39497L19.2053 2.16298L14.952 -2.11166L10.6987 2.16298L14.952 6.39497ZM9.009 12.3678L4.75574 16.5998L9.009 20.8745L13.2623 16.5998L9.009 12.3678ZM6.0375 9.38141L10.2908 5.14941L6.0375 0.874775L1.78424 5.14941L6.0375 9.38141ZM4.557 10.8693L0.303739 6.63735L-3.90709 10.8693L0.30374 15.1013L4.557 10.8693ZM9.009 15.3437L4.75574 19.5757L9.009 23.8503L13.2623 19.5757L9.009 15.3437ZM16.4325 7.88291L20.6858 12.1149L24.8966 7.88292L20.6858 3.65092L16.4325 7.88291ZM17.43 24.4146H19.95V12.4146H17.43V24.4146ZM13.95 18.4146V20.5251H25.95V18.4146H13.95ZM19.95 14.5251H13.65V26.5251H19.95V14.5251ZM19.65 20.5251V14.1935H7.65V20.5251H19.65ZM13.65 20.1935H15.75V8.19347H13.65V20.1935ZM9.75 14.1935V17.0744H21.75V14.1935H9.75ZM19.519 21.7429C22.7838 19.1071 24.9 15.0578 24.9 10.5H12.9C12.9 11.2608 12.5592 11.9391 11.981 12.4059L19.519 21.7429ZM24.9 10.5C24.9 3.16097 19.4158 -2.93188 12.2942 -3.82202L10.8058 8.08533C11.9582 8.22937 12.9 9.24908 12.9 10.5H24.9ZM17.55 2.13166V0H5.55V2.13166H17.55ZM10.9559 5.97051C13.1978 6.1936 15 8.1147 15 10.5H27C27 1.93154 20.5072 -5.13833 12.1441 -5.97051L10.9559 5.97051ZM15 10.5C15 11.859 14.4104 13.0755 13.4555 13.9197L21.4045 22.9094C24.8176 19.8914 27 15.4515 27 10.5H15ZM8.1 10.5C8.1 9.72769 8.44927 9.05097 9.00337 8.60668L1.49663 -0.755419C-1.79227 1.8817 -3.9 5.95371 -3.9 10.5H8.1ZM-0.749999 3.92563V6.80653H11.25V3.92563H-0.749999ZM5.25 12.8065H7.35V0.806532H5.25V12.8065ZM13.35 6.80653V0.474874H1.35V6.80653H13.35ZM7.35 -5.52513H1.05V6.47487H7.35V-5.52513ZM-4.95 0.474874V2.58543H7.05V0.474874H-4.95ZM1.05 8.58543H3.57V-3.41457H1.05V8.58543ZM-0.394244 -1.91843C-2.15828 -0.365752 -3.56969 1.54607 -4.53574 3.68777L6.40295 8.62185C6.66831 8.03355 7.05465 7.51142 7.53425 7.08929L-0.394244 -1.91843ZM-4.53574 3.68777C-5.50175 5.82938 -6.00064 8.15247 -6 10.5016L6 10.4984C5.99982 9.85012 6.13755 9.21022 6.40295 8.62185L-4.53574 3.68777ZM-6 10.5C-6 19.0685 0.492832 26.1383 8.85589 26.9705L10.0441 15.0295C7.80217 14.8064 6 12.8853 6 10.5H-6ZM15.45 21V18.8683H3.45V21H15.45ZM10.1942 12.9147C9.04177 12.7706 8.1 11.7509 8.1 10.5H-3.9C-3.9 17.839 1.58423 23.9319 8.70585 24.822L10.1942 12.9147ZM10.6987 2.16298L4.75574 8.13584L13.2623 16.5998L19.2053 10.627L10.6987 2.16298ZM13.2623 8.13585L10.2908 5.14941L1.78424 13.6134L4.75574 16.5998L13.2623 8.13585ZM1.78424 5.14941L0.303739 6.63735L8.81026 15.1013L10.2908 13.6134L1.78424 5.14941ZM0.30374 15.1013L4.75574 19.5757L13.2623 11.1117L8.81026 6.63735L0.30374 15.1013ZM13.2623 19.5757L20.6858 12.1149L12.1792 3.65092L4.75574 11.1117L13.2623 19.5757ZM20.6858 3.65092L19.2053 2.16298L10.6987 10.627L12.1792 12.1149L20.6858 3.65092Z"
                        fill="white" mask="url(#path-1-inside-1_853_9284)" />
                </svg>

            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-2xl shadow-lg">
                <label class="block text-xl font-semibold text-black">Email</label>
                <p class="mt-2 text-lg text-black">tamarashsis@mail.ugm.ac.id</p>
            </div>
            <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-2xl shadow-lg">
                <label class="block text-xl font-semibold text-black">Tanggal Peminjaman</label>
                <p class="mt-2 text-lg text-black">14/02/2024 - 16/02/2024</p>
            </div>
            <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-2xl shadow-lg">
                <label class="block text-xl font-semibold text-black">Nama</label>
                <p class="mt-2 text-lg text-black">Tamara Sashikirana</p>
            </div>
            <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-2xl shadow-lg">
                <label class="block text-xl font-semibold text-black">Jam Peminjaman</label>
                <p class="mt-2 text-lg text-black">07.15 - 16.00</p>
            </div>
            <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-2xl shadow-lg">
                <label class="block text-xl font-semibold text-black">No Whatsapp</label>
                <p class="mt-2 text-lg text-black">08756721973</p>
            </div>
            <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-2xl shadow-lg">
                <label class="block text-xl font-semibold text-black">Keperluan Peminjaman</label>
                <p class="mt-2 text-lg text-black">Sekolah Kepelatihan Design Graphic</p>
            </div>
            <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-2xl shadow-lg">
                <label class="block text-xl font-semibold text-black">Inventaris</label>
                <div class="mt-2 p-4 rounded-lg">


                    <div class="flex justify-between items-center py-2 border-b ">
                        <div class="flex items-center">
                            <input type="checkbox" checked class="form-checkbox text-[#4C8F8B] h-5 w-5">
                            <span class="ml-2 text-sm text-gray-900">Meja PC Server</span>
                        </div>
                        <div class="flex ">
                            <span class="text-sm text-gray-900">16</span>

                        </div>
                        <div class="flex">
                            <span class=" text-sm text-gray-900">___</span>
                        </div>
                    </div>


                    <div class="flex justify-between items-center py-2 border-b ">
                        <div class="flex items-center">
                            <input type="checkbox" checked class="form-checkbox text-green-500 h-5 w-5">
                            <span class="ml-2 text-sm text-gray-900">Speaker</span>
                        </div>
                        <div class="flex ">
                            <span class="text-sm pl-6 text-gray-900">3</span>

                        </div>
                        <div class="flex">
                            <span class=" text-sm text-gray-900">2</span>
                        </div>
                    </div>



                    <div class="flex justify-between items-center py-2 border-b ">
                        <div class="flex items-center">
                            <input type="checkbox" checked class="form-checkbox text-[#4C8F8B]0 h-5 w-5">
                            <span class="ml-2 text-sm text-gray-900">Mouse</span>
                        </div>
                        <div class="flex ">
                            <span class="text-sm pl-14 text-gray-900">16</span>

                        </div>
                        <div class="flex">
                            <span class="ml-4 text-sm text-gray-900">___</span>
                        </div>
                    </div>


                    <div class="flex justify-between items-center py-2">
                        <div class="flex items-center">
                            <input type="checkbox" checked class="form-checkbox text-green-500 h-5 w-5">
                            <span class="ml-2 text-sm text-gray-900">LCD</span>
                        </div>
                        <div class="flex items-center">
                            <span class="text-sm pl-16 text-gray-900">1</span>

                        </div>
                        <div class="flex">
                            <span class="ml-4 text-sm text-gray-900">___</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="bg-[rgba(98,143,142,0.2)] p-6 rounded-2xl shadow-lg">
                    <label class="block text-xl font-semibold text-black">Foto Identitas</label>
                    <a href="#" class="text-blue-500 hover:underline mt-2 block">Fotoidentitas.png</a>
                </div>
            </div>
        </div>
        <div class="flex justify-start mt-12 mb-24">
            <button class="mt-6 bg-[#4C8F8B] text-white px-8 py-2 rounded-xl font-medium flex items-center">
                <svg width="9" height="17" viewBox="0 0 9 17" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="mr-2">
                    <path
                        d="M8.27669 15.6804L1.74475 9.04361C1.60149 8.8988 1.52114 8.70333 1.52114 8.49964C1.52114 8.29594 1.60149 8.10047 1.74475 7.95566L8.27527 1.31889C8.41846 1.17319 8.49869 0.977077 8.49869 0.772795C8.49869 0.568512 8.41846 0.3724 8.27527 0.226696C8.20532 0.154947 8.12172 0.0979252 8.02939 0.0589924C7.93706 0.0200596 7.83787 0 7.73767 0C7.63747 0 7.53828 0.0200596 7.44595 0.0589924C7.35362 0.0979252 7.27002 0.154947 7.20007 0.226696L0.669549 6.86205C0.240424 7.2991 0 7.88713 0 8.49964C0 9.11214 0.240424 9.70017 0.669549 10.1372L7.20007 16.7726C7.27004 16.8445 7.35373 16.9017 7.44619 16.9408C7.53865 16.9799 7.63801 17 7.73838 17C7.83875 17 7.93811 16.9799 8.03057 16.9408C8.12303 16.9017 8.20672 16.8445 8.27669 16.7726C8.41987 16.6269 8.5001 16.4308 8.5001 16.2265C8.5001 16.0222 8.41987 15.8261 8.27669 15.6804Z"
                        fill="#FCFCFC" />
                </svg>
                Kembali
            </button>
        </div>


    </section>
@endsection
