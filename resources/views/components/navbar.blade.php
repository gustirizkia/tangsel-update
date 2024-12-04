<div class="md:flex py-4 shadow md:px-60 px-3 items-center">
    <div class="flex items-center md:mb-0 mb-3">
        <a href="/" class="text-red-700 ">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo Tangsel Update" class="w-20">
        </a>
        <div class="ml-auto md:hidden">
            <input type="text" placeholder="Cari " class="h-9 border-gray-400 rounded-full text-xs w-full">

        </div>
    </div>
    {{-- Navlink --}}
    <div class=" flex font-medium gap-6 md:ml-4 overflow-x-auto md:pb-0 pb-2">
        <a href="/"
            class=" flex items-center font-bold text-sm border-b-2 text-primary border-primary dark:text-white whitespace-nowrap uppercase h-full ">
            HOME
        </a>
        <a href="/"
            class="flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase h-full ">
            TANGERANG RAYA
        </a>
        <a href="/"
            class="flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase h-full ">
            Nasional
        </a>
        <a href="/"
            class="flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase h-full ">
            Metropolitan
        </a>
        <a href="/"
            class="flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase h-full ">
            Olahraga
        </a>
        <a href="/"
            class="flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase h-full ">
            Opini
        </a>
    </div>
    {{-- Navlink end --}}
    <div class="ml-auto md:block hidden">
        <input type="text" placeholder="Cari " class="h-9 border-gray-400 rounded-full text-xs">

    </div>
</div>
