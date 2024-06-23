<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div
            class="h-screen sticky top-0 left-0 bg-[#628F8E] text-white w-72 space-y-2 py-2 px-6 flex flex-col border-r-2 border-white">

            <img src="{{ asset('image/silaboe-Logo2 1.png') }}" class="pl-4 mb-6 mt-4 h-14 w-52" alt="Flowbite Logo" />
            <nav class="flex flex-col space-y-2">
                <a href="{{ Route('dashboard.admin') }}"
                    class="flex items-center text-md font-medium py-3 {{ Request::routeIs('dashboard.admin') ? ' text-white' : 'text-[#CBCBCB]' }} hover:text-white rounded transition duration-200">
                    <svg width="20" height="20" viewBox="0 0 32 32" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31.1404 13.9185C31.1397 13.9177 31.139 13.917 31.1382 13.9163L18.0834 0.863281C17.527 0.306641 16.7871 0 16.0002 0C15.2133 0 14.4734 0.306396 13.9167 0.863037L0.868774 13.9094C0.864379 13.9138 0.859984 13.9185 0.855589 13.9229C-0.287106 15.072 -0.285152 16.9365 0.861205 18.0828C1.38494 18.6067 2.07666 18.9102 2.81624 18.9419C2.84627 18.9448 2.87655 18.9463 2.90707 18.9463H3.42738V28.5525C3.42738 30.4534 4.97417 32 6.87573 32H11.9832C12.5008 32 12.9208 31.5803 12.9208 31.0625V23.5312C12.9208 22.6638 13.6264 21.9583 14.4939 21.9583H17.5065C18.374 21.9583 19.0796 22.6638 19.0796 23.5312V31.0625C19.0796 31.5803 19.4993 32 20.0172 32H25.1247C27.0262 32 28.573 30.4534 28.573 28.5525V18.9463H29.0555C29.8422 18.9463 30.582 18.6399 31.139 18.0833C32.2865 16.9351 32.287 15.0674 31.1404 13.9185Z"
                            fill="currentColor" />
                    </svg>
                    <span class="ml-4">Dashboard</span>
                </a>

                <a href="{{ Route('laboratorium.admin') }}"
                    class="flex items-center text-md font-medium py-3 {{ Request::is('admin/laboratorium*') ? ' text-white' : 'text-[#CBCBCB]' }} hover:text-white rounded transition duration-200">
                    <svg width="20" height="20" viewBox="0 0 28 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M26.4444 24.8889H24.8889V3.11111C24.8889 2.25556 24.1889 1.55556 23.3333 1.55556H17.1111C17.1111 0.7 16.4111 0 15.5556 0H4.66667C3.81111 0 3.11111 0.7 3.11111 1.55556V24.8889H1.55556C0.7 24.8889 0 25.5889 0 26.4444C0 27.3 0.7 28 1.55556 28H15.5556C16.4111 28 17.1111 27.3 17.1111 26.4444V4.66667H21.7778V26.4444C21.7778 27.3 22.4778 28 23.3333 28H26.4444C27.3 28 28 27.3 28 26.4444C28 25.5889 27.3 24.8889 26.4444 24.8889ZM12.4444 15.5556C11.5889 15.5556 10.8889 14.8556 10.8889 14C10.8889 13.1444 11.5889 12.4444 12.4444 12.4444C13.3 12.4444 14 13.1444 14 14C14 14.8556 13.3 15.5556 12.4444 15.5556Z"
                            fill="currentColor" />
                    </svg>
                    <span class="ml-4">Laboratorium</span>
                </a>
                <a href="{{ Route('jadwallab.admin') }}"
                    class="flex items-center text-md font-medium py-3 text-[#CBCBCB] {{ Request::is('admin/jadwallab*') ? ' text-white' : 'text-[#CBCBCB]' }} hover:text-white rounded transition duration-200">
                    <svg width="20" height="20" viewBox="0 0 33 33" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_853_7666" fill="white">
                            <path
                                d="M30.4219 6.1875H24.75V2.57812H22.6875V6.1875H10.3125V2.57812H8.25V6.1875H2.57812C2.16801 6.18798 1.77484 6.3511 1.48485 6.6411C1.19485 6.93109 1.03173 7.32427 1.03125 7.73438V29.3906C1.03173 29.8007 1.19485 30.1939 1.48485 30.4839C1.77484 30.7739 2.16801 30.937 2.57812 30.9375H30.4219C30.832 30.937 31.2252 30.7739 31.5152 30.4839C31.8051 30.1939 31.9683 29.8007 31.9688 29.3906V7.73438C31.9683 7.32427 31.8051 6.93109 31.5152 6.6411C31.2252 6.3511 30.832 6.18798 30.4219 6.1875ZM29.9062 28.875H3.09375V8.25H8.25V10.8281H10.3125V8.25H22.6875V10.8281H24.75V8.25H29.9062V28.875Z" />
                        </mask>
                        <path
                            d="M30.4219 6.1875H24.75V2.57812H22.6875V6.1875H10.3125V2.57812H8.25V6.1875H2.57812C2.16801 6.18798 1.77484 6.3511 1.48485 6.6411C1.19485 6.93109 1.03173 7.32427 1.03125 7.73438V29.3906C1.03173 29.8007 1.19485 30.1939 1.48485 30.4839C1.77484 30.7739 2.16801 30.937 2.57812 30.9375H30.4219C30.832 30.937 31.2252 30.7739 31.5152 30.4839C31.8051 30.1939 31.9683 29.8007 31.9688 29.3906V7.73438C31.9683 7.32427 31.8051 6.93109 31.5152 6.6411C31.2252 6.3511 30.832 6.18798 30.4219 6.1875ZM29.9062 28.875H3.09375V8.25H8.25V10.8281H10.3125V8.25H22.6875V10.8281H24.75V8.25H29.9062V28.875Z"
                            fill="currentColor" />
                        <path
                            d="M30.4219 6.1875L30.4254 3.1875H30.4219V6.1875ZM24.75 6.1875H21.75V9.1875H24.75V6.1875ZM24.75 2.57812H27.75V-0.421875H24.75V2.57812ZM22.6875 2.57812V-0.421875H19.6875V2.57812H22.6875ZM22.6875 6.1875V9.1875H25.6875V6.1875H22.6875ZM10.3125 6.1875H7.3125V9.1875H10.3125V6.1875ZM10.3125 2.57812H13.3125V-0.421875H10.3125V2.57812ZM8.25 2.57812V-0.421875H5.25V2.57812H8.25ZM8.25 6.1875V9.1875H11.25V6.1875H8.25ZM2.57812 6.1875V3.1875L2.57463 3.1875L2.57812 6.1875ZM1.03125 7.73438L-1.96875 7.73088V7.73438H1.03125ZM1.03125 29.3906H-1.96875L-1.96875 29.3941L1.03125 29.3906ZM2.57812 30.9375L2.57463 33.9375H2.57812V30.9375ZM30.4219 30.9375V33.9375L30.4254 33.9375L30.4219 30.9375ZM31.9688 29.3906L34.9688 29.3941V29.3906H31.9688ZM31.9688 7.73438H34.9688L34.9687 7.73088L31.9688 7.73438ZM29.9062 28.875V31.875H32.9062V28.875H29.9062ZM3.09375 28.875H0.09375V31.875H3.09375V28.875ZM3.09375 8.25V5.25H0.09375V8.25H3.09375ZM8.25 8.25H11.25V5.25H8.25V8.25ZM8.25 10.8281H5.25V13.8281H8.25V10.8281ZM10.3125 10.8281V13.8281H13.3125V10.8281H10.3125ZM10.3125 8.25V5.25H7.3125V8.25H10.3125ZM22.6875 8.25H25.6875V5.25H22.6875V8.25ZM22.6875 10.8281H19.6875V13.8281H22.6875V10.8281ZM24.75 10.8281V13.8281H27.75V10.8281H24.75ZM24.75 8.25V5.25H21.75V8.25H24.75ZM29.9062 8.25H32.9062V5.25H29.9062V8.25ZM30.4219 3.1875H24.75V9.1875H30.4219V3.1875ZM27.75 6.1875V2.57812H21.75V6.1875H27.75ZM24.75 -0.421875H22.6875V5.57812H24.75V-0.421875ZM19.6875 2.57812V6.1875H25.6875V2.57812H19.6875ZM22.6875 3.1875H10.3125V9.1875H22.6875V3.1875ZM13.3125 6.1875V2.57812H7.3125V6.1875H13.3125ZM10.3125 -0.421875H8.25V5.57812H10.3125V-0.421875ZM5.25 2.57812V6.1875H11.25V2.57812H5.25ZM8.25 3.1875H2.57812V9.1875H8.25V3.1875ZM2.57463 3.1875C1.37008 3.1889 0.215272 3.66803 -0.636474 4.51978L3.60617 8.76242C3.33441 9.03418 2.96595 9.18705 2.58162 9.1875L2.57463 3.1875ZM-0.636474 4.51978C-1.48822 5.37152 -1.96734 6.52633 -1.96875 7.73088L4.03125 7.73787C4.0308 8.1222 3.87793 8.49066 3.60617 8.76242L-0.636474 4.51978ZM-1.96875 7.73438V29.3906H4.03125V7.73438H-1.96875ZM-1.96875 29.3941C-1.96734 30.5987 -1.48822 31.7535 -0.636474 32.6052L3.60617 28.3626C3.87793 28.6343 4.0308 29.0028 4.03125 29.3871L-1.96875 29.3941ZM-0.636474 32.6052C0.21527 33.457 1.37008 33.9361 2.57463 33.9375L2.58162 27.9375C2.96595 27.938 3.33441 28.0908 3.60617 28.3626L-0.636474 32.6052ZM2.57812 33.9375H30.4219V27.9375H2.57812V33.9375ZM30.4254 33.9375C31.6299 33.9361 32.7847 33.457 33.6365 32.6052L29.3938 28.3626C29.6656 28.0908 30.034 27.938 30.4184 27.9375L30.4254 33.9375ZM33.6365 32.6052C34.4882 31.7535 34.9673 30.5987 34.9687 29.3941L28.9688 29.3871C28.9692 29.0028 29.1221 28.6343 29.3938 28.3626L33.6365 32.6052ZM34.9688 29.3906V7.73438H28.9688V29.3906H34.9688ZM34.9687 7.73088C34.9673 6.52633 34.4882 5.37152 33.6365 4.51978L29.3938 8.76242C29.1221 8.49066 28.9692 8.1222 28.9688 7.73787L34.9687 7.73088ZM33.6365 4.51978C32.7847 3.66803 31.6299 3.1889 30.4254 3.1875L30.4184 9.1875C30.0341 9.18705 29.6656 9.03418 29.3938 8.76242L33.6365 4.51978ZM29.9062 25.875H3.09375V31.875H29.9062V25.875ZM6.09375 28.875V8.25H0.09375V28.875H6.09375ZM3.09375 11.25H8.25V5.25H3.09375V11.25ZM5.25 8.25V10.8281H11.25V8.25H5.25ZM8.25 13.8281H10.3125V7.82812H8.25V13.8281ZM13.3125 10.8281V8.25H7.3125V10.8281H13.3125ZM10.3125 11.25H22.6875V5.25H10.3125V11.25ZM19.6875 8.25V10.8281H25.6875V8.25H19.6875ZM22.6875 13.8281H24.75V7.82812H22.6875V13.8281ZM27.75 10.8281V8.25H21.75V10.8281H27.75ZM24.75 11.25H29.9062V5.25H24.75V11.25ZM26.9062 8.25V28.875H32.9062V8.25H26.9062Z"
                            fill="currentColor" mask="url(#path-1-inside-1_853_7666)" />
                        <mask id="path-3-inside-2_853_7666" fill="white">
                            <path
                                d="M7.21875 14.4375H9.28125V16.5H7.21875V14.4375ZM12.8906 14.4375H14.9531V16.5H12.8906V14.4375ZM18.0469 14.4375H20.1094V16.5H18.0469V14.4375ZM23.7188 14.4375H25.7812V16.5H23.7188V14.4375ZM7.21875 19.0781H9.28125V21.1406H7.21875V19.0781ZM12.8906 19.0781H14.9531V21.1406H12.8906V19.0781ZM18.0469 19.0781H20.1094V21.1406H18.0469V19.0781ZM23.7188 19.0781H25.7812V21.1406H23.7188V19.0781ZM7.21875 23.7188H9.28125V25.7812H7.21875V23.7188ZM12.8906 23.7188H14.9531V25.7812H12.8906V23.7188ZM18.0469 23.7188H20.1094V25.7812H18.0469V23.7188ZM23.7188 23.7188H25.7812V25.7812H23.7188V23.7188Z" />
                        </mask>
                        <path
                            d="M7.21875 14.4375H9.28125V16.5H7.21875V14.4375ZM12.8906 14.4375H14.9531V16.5H12.8906V14.4375ZM18.0469 14.4375H20.1094V16.5H18.0469V14.4375ZM23.7188 14.4375H25.7812V16.5H23.7188V14.4375ZM7.21875 19.0781H9.28125V21.1406H7.21875V19.0781ZM12.8906 19.0781H14.9531V21.1406H12.8906V19.0781ZM18.0469 19.0781H20.1094V21.1406H18.0469V19.0781ZM23.7188 19.0781H25.7812V21.1406H23.7188V19.0781ZM7.21875 23.7188H9.28125V25.7812H7.21875V23.7188ZM12.8906 23.7188H14.9531V25.7812H12.8906V23.7188ZM18.0469 23.7188H20.1094V25.7812H18.0469V23.7188ZM23.7188 23.7188H25.7812V25.7812H23.7188V23.7188Z"
                            fill="currentColor" />
                        <path
                            d="M7.21875 14.4375V11.4375H4.21875V14.4375H7.21875ZM9.28125 14.4375H12.2812V11.4375H9.28125V14.4375ZM9.28125 16.5V19.5H12.2812V16.5H9.28125ZM7.21875 16.5H4.21875V19.5H7.21875V16.5ZM12.8906 14.4375V11.4375H9.89062V14.4375H12.8906ZM14.9531 14.4375H17.9531V11.4375H14.9531V14.4375ZM14.9531 16.5V19.5H17.9531V16.5H14.9531ZM12.8906 16.5H9.89062V19.5H12.8906V16.5ZM18.0469 14.4375V11.4375H15.0469V14.4375H18.0469ZM20.1094 14.4375H23.1094V11.4375H20.1094V14.4375ZM20.1094 16.5V19.5H23.1094V16.5H20.1094ZM18.0469 16.5H15.0469V19.5H18.0469V16.5ZM23.7188 14.4375V11.4375H20.7188V14.4375H23.7188ZM25.7812 14.4375H28.7812V11.4375H25.7812V14.4375ZM25.7812 16.5V19.5H28.7812V16.5H25.7812ZM23.7188 16.5H20.7188V19.5H23.7188V16.5ZM7.21875 19.0781V16.0781H4.21875V19.0781H7.21875ZM9.28125 19.0781H12.2812V16.0781H9.28125V19.0781ZM9.28125 21.1406V24.1406H12.2812V21.1406H9.28125ZM7.21875 21.1406H4.21875V24.1406H7.21875V21.1406ZM12.8906 19.0781V16.0781H9.89062V19.0781H12.8906ZM14.9531 19.0781H17.9531V16.0781H14.9531V19.0781ZM14.9531 21.1406V24.1406H17.9531V21.1406H14.9531ZM12.8906 21.1406H9.89062V24.1406H12.8906V21.1406ZM18.0469 19.0781V16.0781H15.0469V19.0781H18.0469ZM20.1094 19.0781H23.1094V16.0781H20.1094V19.0781ZM20.1094 21.1406V24.1406H23.1094V21.1406H20.1094ZM18.0469 21.1406H15.0469V24.1406H18.0469V21.1406ZM23.7188 19.0781V16.0781H20.7188V19.0781H23.7188ZM25.7812 19.0781H28.7812V16.0781H25.7812V19.0781ZM25.7812 21.1406V24.1406H28.7812V21.1406H25.7812ZM23.7188 21.1406H20.7188V24.1406H23.7188V21.1406ZM7.21875 23.7188V20.7188H4.21875V23.7188H7.21875ZM9.28125 23.7188H12.2812V20.7188H9.28125V23.7188ZM9.28125 25.7812V28.7812H12.2812V25.7812H9.28125ZM7.21875 25.7812H4.21875V28.7812H7.21875V25.7812ZM12.8906 23.7188V20.7188H9.89062V23.7188H12.8906ZM14.9531 23.7188H17.9531V20.7188H14.9531V23.7188ZM14.9531 25.7812V28.7812H17.9531V25.7812H14.9531ZM12.8906 25.7812H9.89062V28.7812H12.8906V25.7812ZM18.0469 23.7188V20.7188H15.0469V23.7188H18.0469ZM20.1094 23.7188H23.1094V20.7188H20.1094V23.7188ZM20.1094 25.7812V28.7812H23.1094V25.7812H20.1094ZM18.0469 25.7812H15.0469V28.7812H18.0469V25.7812ZM23.7188 23.7188V20.7188H20.7188V23.7188H23.7188ZM25.7812 23.7188H28.7812V20.7188H25.7812V23.7188ZM25.7812 25.7812V28.7812H28.7812V25.7812H25.7812ZM23.7188 25.7812H20.7188V28.7812H23.7188V25.7812ZM7.21875 17.4375H9.28125V11.4375H7.21875V17.4375ZM6.28125 14.4375V16.5H12.2812V14.4375H6.28125ZM9.28125 13.5H7.21875V19.5H9.28125V13.5ZM10.2188 16.5V14.4375H4.21875V16.5H10.2188ZM12.8906 17.4375H14.9531V11.4375H12.8906V17.4375ZM11.9531 14.4375V16.5H17.9531V14.4375H11.9531ZM14.9531 13.5H12.8906V19.5H14.9531V13.5ZM15.8906 16.5V14.4375H9.89062V16.5H15.8906ZM18.0469 17.4375H20.1094V11.4375H18.0469V17.4375ZM17.1094 14.4375V16.5H23.1094V14.4375H17.1094ZM20.1094 13.5H18.0469V19.5H20.1094V13.5ZM21.0469 16.5V14.4375H15.0469V16.5H21.0469ZM23.7188 17.4375H25.7812V11.4375H23.7188V17.4375ZM22.7812 14.4375V16.5H28.7812V14.4375H22.7812ZM25.7812 13.5H23.7188V19.5H25.7812V13.5ZM26.7188 16.5V14.4375H20.7188V16.5H26.7188ZM7.21875 22.0781H9.28125V16.0781H7.21875V22.0781ZM6.28125 19.0781V21.1406H12.2812V19.0781H6.28125ZM9.28125 18.1406H7.21875V24.1406H9.28125V18.1406ZM10.2188 21.1406V19.0781H4.21875V21.1406H10.2188ZM12.8906 22.0781H14.9531V16.0781H12.8906V22.0781ZM11.9531 19.0781V21.1406H17.9531V19.0781H11.9531ZM14.9531 18.1406H12.8906V24.1406H14.9531V18.1406ZM15.8906 21.1406V19.0781H9.89062V21.1406H15.8906ZM18.0469 22.0781H20.1094V16.0781H18.0469V22.0781ZM17.1094 19.0781V21.1406H23.1094V19.0781H17.1094ZM20.1094 18.1406H18.0469V24.1406H20.1094V18.1406ZM21.0469 21.1406V19.0781H15.0469V21.1406H21.0469ZM23.7188 22.0781H25.7812V16.0781H23.7188V22.0781ZM22.7812 19.0781V21.1406H28.7812V19.0781H22.7812ZM25.7812 18.1406H23.7188V24.1406H25.7812V18.1406ZM26.7188 21.1406V19.0781H20.7188V21.1406H26.7188ZM7.21875 26.7188H9.28125V20.7188H7.21875V26.7188ZM6.28125 23.7188V25.7812H12.2812V23.7188H6.28125ZM9.28125 22.7812H7.21875V28.7812H9.28125V22.7812ZM10.2188 25.7812V23.7188H4.21875V25.7812H10.2188ZM12.8906 26.7188H14.9531V20.7188H12.8906V26.7188ZM11.9531 23.7188V25.7812H17.9531V23.7188H11.9531ZM14.9531 22.7812H12.8906V28.7812H14.9531V22.7812ZM15.8906 25.7812V23.7188H9.89062V25.7812H15.8906ZM18.0469 26.7188H20.1094V20.7188H18.0469V26.7188ZM17.1094 23.7188V25.7812H23.1094V23.7188H17.1094ZM20.1094 22.7812H18.0469V28.7812H20.1094V22.7812ZM21.0469 25.7812V23.7188H15.0469V25.7812H21.0469ZM23.7188 26.7188H25.7812V20.7188H23.7188V26.7188ZM22.7812 23.7188V25.7812H28.7812V23.7188H22.7812ZM25.7812 22.7812H23.7188V28.7812H25.7812V22.7812ZM26.7188 25.7812V23.7188H20.7188V25.7812H26.7188Z"
                            fill="currentColor" mask="url(#path-3-inside-2_853_7666)" />
                    </svg>
                    <span class="ml-4">Jadwal Lab</span>
                </a>
                <a href="{{ route('peminjamanlabada.admin') }}"
                    class="flex items-center text-md text-[#CBCBCB] font-medium py-3 {{ Request::is('admin/peminjamanlab*') ? ' text-white' : 'text-[#CBCBCB]' }}  hover:text-white rounded transition duration-200">
                    <svg width="20" height="20" viewBox="0 0 37 27" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.0862 16.5669L31.123 13.4449C32.9219 12.7459 33.4499 12.9473 34.2893 13.5655C34.764 13.915 34.9375 14.3394 34.9806 14.8636C35.0703 15.9545 34.8579 16.6618 34.1463 17.1328C29.8318 19.9861 25.2329 22.1121 19.4672 24.4429C16.6647 25.5754 12.5203 24.8282 8.79717 23.5692L3.81077 23.55C3.57342 23.5505 3.33831 23.5049 3.11886 23.416C2.89941 23.3271 2.69991 23.1965 2.53176 23.0318C2.36362 22.8671 2.23011 22.6714 2.13887 22.4559C2.04763 22.2404 2.00044 22.0094 2 21.776V16.8149C2 15.828 2.80808 15.0342 3.81077 15.0342H9.16356C11.2003 12.5445 17.4 13.3741 21.7882 13.5206C22.9728 13.5605 23.4162 14.7596 23.0862 16.5669ZM23.0862 16.5669C21.9456 18.7196 19.0458 18.1496 16.317 18.247M25.2431 8.82914L24.1998 7.80315L23.1556 8.82997H22.3289M20.2406 8.82914L21.2847 7.80315L22.3281 8.82914M17.3637 4.61117H25.5858L27.8924 6.72057L25.5858 8.82997H25.2439M20.2414 8.82997H17.3645M17.3637 8.82914L15.2787 10.8795C14.5172 11.6284 13.292 11.6284 12.5313 10.8795L9.67464 8.07275C8.9131 7.32385 8.9131 6.11895 9.67464 5.37005L12.5304 2.56168C13.292 1.81277 14.5172 1.81277 15.2779 2.56168L17.3628 4.612M13.7218 6.72057C13.7218 7.43952 13.1295 8.02283 12.3976 8.02283C11.6665 8.02283 11.0725 7.44035 11.0725 6.72057C11.0725 6.00163 11.6648 5.41832 12.3967 5.41832C13.1278 5.41832 13.7218 6.00163 13.7218 6.72057Z"
                            stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="ml-4">Peminjaman Lab</span>
                </a>
                <a href="{{ Route('inventaris.admin') }}"
                    class="flex items-center text-md  text-[#CBCBCB] font-medium py-3 {{ Request::is('admin/inventaris*') ? ' text-white' : 'text-[#CBCBCB]' }}  hover:text-white rounded transition duration-200">
                    <svg width="21" height="22" viewBox="0 0 27 28" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_853_7677)">
                            <path
                                d="M14.0868 6.08631C13.2748 6.08631 12.4961 5.76574 11.9219 5.19513C11.3478 4.62452 11.0252 3.85061 11.0252 3.04364C11.0252 2.23668 11.3478 1.46276 11.9219 0.892153C12.4961 0.321542 13.2748 0.000976563 14.0868 0.000976562C14.8987 0.000976563 15.6775 0.321542 16.2516 0.892153C16.8258 1.46276 17.1483 2.23668 17.1483 3.04364C17.1483 3.85061 16.8258 4.62452 16.2516 5.19513C15.6775 5.76574 14.8987 6.08631 14.0868 6.08631ZM24.193 6.08631C23.381 6.08631 22.6023 5.76574 22.0281 5.19513C21.454 4.62452 21.1314 3.85061 21.1314 3.04364C21.1314 2.23668 21.454 1.46276 22.0281 0.892153C22.6023 0.321542 23.381 0.000976563 24.193 0.000976562C25.005 0.000976563 25.7837 0.321542 26.3578 0.892153C26.932 1.46276 27.2545 2.23668 27.2545 3.04364C27.2545 3.85061 26.932 4.62452 26.3578 5.19513C25.7837 5.76574 25.005 6.08631 24.193 6.08631ZM3.06254 6.08631C2.25056 6.08631 1.47184 5.76574 0.897688 5.19513C0.323533 4.62452 0.000976654 3.85061 0.000976654 3.04364C0.000976654 2.23668 0.323533 1.46276 0.897688 0.892153C1.47184 0.321542 2.25056 0.000976563 3.06254 0.000976562C3.87452 0.000976563 4.65324 0.321542 5.2274 0.892153C5.80155 1.46276 6.12411 2.23668 6.12411 3.04364C6.12411 3.85061 5.80155 4.62452 5.2274 5.19513C4.65324 5.76574 3.87452 6.08631 3.06254 6.08631ZM14.0868 17.0425C13.6847 17.0425 13.2866 16.9638 12.9151 16.8109C12.5437 16.658 12.2062 16.4338 11.9219 16.1513C11.6376 15.8688 11.4121 15.5333 11.2582 15.1642C11.1044 14.795 11.0252 14.3994 11.0252 13.9998C11.0252 13.6002 11.1044 13.2046 11.2582 12.8354C11.4121 12.4663 11.6376 12.1309 11.9219 11.8483C12.2062 11.5658 12.5437 11.3417 12.9151 11.1888C13.2866 11.0358 13.6847 10.9571 14.0868 10.9571C14.8987 10.9571 15.6775 11.2777 16.2516 11.8483C16.8258 12.4189 17.1483 13.1928 17.1483 13.9998C17.1483 14.8068 16.8258 15.5807 16.2516 16.1513C15.6775 16.7219 14.8987 17.0425 14.0868 17.0425ZM24.193 17.0425C23.7909 17.0425 23.3928 16.9638 23.0214 16.8109C22.6499 16.658 22.3124 16.4338 22.0281 16.1513C21.7438 15.8688 21.5183 15.5333 21.3645 15.1642C21.2106 14.795 21.1314 14.3994 21.1314 13.9998C21.1314 13.6002 21.2106 13.2046 21.3645 12.8354C21.5183 12.4663 21.7438 12.1309 22.0281 11.8483C22.3124 11.5658 22.6499 11.3417 23.0214 11.1888C23.3928 11.0358 23.7909 10.9571 24.193 10.9571C25.005 10.9571 25.7837 11.2777 26.3578 11.8483C26.932 12.4189 27.2545 13.1928 27.2545 13.9998C27.2545 14.8068 26.932 15.5807 26.3578 16.1513C25.7837 16.7219 25.005 17.0425 24.193 17.0425ZM3.06254 17.0425C2.66049 17.0425 2.26238 16.9638 1.89093 16.8109C1.51949 16.658 1.18198 16.4338 0.897688 16.1513C0.613396 15.8688 0.387882 15.5333 0.234024 15.1642C0.0801663 14.795 0.000976589 14.3994 0.000976589 13.9998C0.000976589 13.6002 0.0801663 13.2046 0.234024 12.8354C0.387882 12.4663 0.613396 12.1309 0.897688 11.8483C1.18198 11.5658 1.51949 11.3417 1.89093 11.1888C2.26238 11.0358 2.66049 10.9571 3.06254 10.9571C3.87452 10.9571 4.65324 11.2777 5.2274 11.8483C5.80155 12.4189 6.12411 13.1928 6.12411 13.9998C6.12411 14.8068 5.80155 15.5807 5.2274 16.1513C4.65324 16.7219 3.87452 17.0425 3.06254 17.0425ZM14.0868 27.9986C13.6847 27.9986 13.2866 27.9199 12.9151 27.767C12.5437 27.6141 12.2062 27.39 11.9219 27.1075C11.6376 26.8249 11.4121 26.4895 11.2582 26.1204C11.1044 25.7512 11.0252 25.3555 11.0252 24.956C11.0252 24.5564 11.1044 24.1608 11.2582 23.7916C11.4121 23.4224 11.6376 23.087 11.9219 22.8045C12.2062 22.5219 12.5437 22.2978 12.9151 22.1449C13.2866 21.992 13.6847 21.9133 14.0868 21.9133C14.8989 21.9133 15.6778 22.2339 16.252 22.8047C16.8263 23.3754 17.1489 24.1494 17.1489 24.9566C17.1489 25.7637 16.8263 26.5377 16.252 27.1085C15.6778 27.6792 14.8989 27.9986 14.0868 27.9986ZM24.193 27.9986C23.7909 27.9986 23.3928 27.9199 23.0214 27.767C22.6499 27.6141 22.3124 27.39 22.0281 27.1075C21.7438 26.8249 21.5183 26.4895 21.3645 26.1204C21.2106 25.7512 21.1314 25.3555 21.1314 24.956C21.1314 24.5564 21.2106 24.1608 21.3645 23.7916C21.5183 23.4224 21.7438 23.087 22.0281 22.8045C22.3124 22.5219 22.6499 22.2978 23.0214 22.1449C23.3928 21.992 23.7909 21.9133 24.193 21.9133C25.005 21.9133 25.7837 22.2339 26.3578 22.8045C26.932 23.3751 27.2545 24.149 27.2545 24.956C27.2545 25.7629 26.932 26.5369 26.3578 27.1075C25.7837 27.6781 25.005 27.9986 24.193 27.9986ZM3.06254 27.9986C2.66049 27.9986 2.26238 27.9199 1.89093 27.767C1.51949 27.6141 1.18198 27.39 0.897688 27.1075C0.613396 26.8249 0.387882 26.4895 0.234024 26.1204C0.0801663 25.7512 0.000976563 25.3555 0.000976562 24.956C0.000976563 24.5564 0.0801663 24.1608 0.234024 23.7916C0.387882 23.4224 0.613396 23.087 0.897688 22.8045C1.18198 22.5219 1.51949 22.2978 1.89093 22.1449C2.26238 21.992 2.66049 21.9133 3.06254 21.9133C3.87452 21.9133 4.65324 22.2339 5.2274 22.8045C5.80155 23.3751 6.12411 24.149 6.12411 24.956C6.12411 25.7629 5.80155 26.5369 5.2274 27.1075C4.65324 27.6781 3.87452 27.9986 3.06254 27.9986Z"
                                fill="currentColor" />
                        </g>
                        <defs>
                            <clipPath id="clip0_853_7677">
                                <rect width="27" height="28" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <span class="ml-4">Inventaris</span>
                </a>
                <a href="{{ Route('peminjamaninvenatrisada.admin') }}"
                    class="flex items-center text-md text-[#CBCBCB] font-medium py-3 {{ Request::is('admin/peminjamaninvenatris*') ? ' text-white' : 'text-[#CBCBCB]' }} hover:text-white rounded transition duration-200">
                    <svg width="25" height="20" viewBox="0 0 33 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.0345 7.79354H30.9655M2 10.6901L6.06531 6.11789C6.60881 5.50626 7.27572 5.0167 8.02211 4.68145C8.76849 4.3462 9.57743 4.17286 10.3957 4.17285H10.6897M2 23.0004H9.96552L15.7586 18.6556C15.7586 18.6556 16.9317 17.8634 18.6552 16.4832C22.2759 13.5866 18.6552 9.0014 15.0345 11.4142C12.0858 13.3795 9.24138 15.0349 9.24138 15.0349"
                            stroke="currentColor" stroke-width="2.925" stroke-linecap="round" stroke-linejoin="round" />
                        <path
                            d="M10.6895 14.3103V4.89655C10.6895 4.12834 10.9946 3.39159 11.5378 2.84838C12.081 2.30517 12.8178 2 13.586 2H28.0688C28.837 2 29.5737 2.30517 30.1169 2.84838C30.6601 3.39159 30.9653 4.12834 30.9653 4.89655V13.5862C30.9653 14.3544 30.6601 15.0912 30.1169 15.6344C29.5737 16.1776 28.837 16.4828 28.0688 16.4828H18.655"
                            stroke="currentColor" stroke-width="2.925" />
                    </svg>
                    <span class="ml-4">Peminjaman Inventaris</span>
                </a>
                <a href="{{ Route('profil.admin') }}"
                    class="flex items-center text-md text-[#CBCBCB] font-medium py-3 {{ Request::is('admin/profil*') ? ' text-white' : 'text-[#CBCBCB]' }}  hover:text-white rounded transition duration-200">
                    <svg width="20" height="20" viewBox="0 0 30 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8.33333 6.66764C8.33333 4.89953 9.03571 3.20384 10.286 1.9536C11.5362 0.703355 13.2319 0.000976563 15 0.000976562C16.7681 0.000976563 18.4638 0.703355 19.714 1.9536C20.9643 3.20384 21.6667 4.89953 21.6667 6.66764C21.6667 8.43575 20.9643 10.1314 19.714 11.3817C18.4638 12.6319 16.7681 13.3343 15 13.3343C13.2319 13.3343 11.5362 12.6319 10.286 11.3817C9.03571 10.1314 8.33333 8.43575 8.33333 6.66764ZM8.33333 16.6676C6.1232 16.6676 4.00358 17.5456 2.44078 19.1084C0.877974 20.6712 0 22.7908 0 25.001C0 26.3271 0.526784 27.5988 1.46447 28.5365C2.40215 29.4742 3.67392 30.001 5 30.001H25C26.3261 30.001 27.5979 29.4742 28.5355 28.5365C29.4732 27.5988 30 26.3271 30 25.001C30 22.7908 29.122 20.6712 27.5592 19.1084C25.9964 17.5456 23.8768 16.6676 21.6667 16.6676H8.33333Z"
                            fill="currentColor" />
                    </svg>
                    <span class="ml-4">Profil</span>
                </a>
                <a href="{{ Route('login') }}"
                    class="flex items-center text-md text-[#CBCBCB] font-medium py-3 {{ Request::is('admin/peminjamanlab*') ? ' text-white' : 'text-[#CBCBCB]' }}  hover:text-white rounded transition duration-200">
                    <svg width="23" height="20" viewBox="0 0 33 30" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19.6455 8.41764V5.20931C19.6455 4.35841 19.3075 3.54235 18.7058 2.94068C18.1041 2.339 17.2881 2.00098 16.4372 2.00098H5.20801C4.3571 2.00098 3.54105 2.339 2.93937 2.94068C2.33769 3.54235 1.99967 4.35841 1.99967 5.20931V24.4593C1.99967 25.3102 2.33769 26.1263 2.93937 26.7279C3.54105 27.3296 4.3571 27.6676 5.20801 27.6676H16.4372C17.2881 27.6676 18.1041 27.3296 18.7058 26.7279C19.3075 26.1263 19.6455 25.3102 19.6455 24.4593V21.251"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.625 14.834H30.875M30.875 14.834L26.0625 10.0215M30.875 14.834L26.0625 19.6465"
                            stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <span class="ml-4">Keluar</span>
                </a>
            </nav>
        </div>
        <!-- Main content -->
        <div class="flex-1 flex flex-col">
            <!-- Navbar -->

            <!-- Main content area -->
            <main class="">

                @yield('content')
                <!-- Main content can go here -->
            </main>
        </div>
    </div>

    <style>
        a:hover .icon {
            fill: white;
        }
    </style>
</body>
