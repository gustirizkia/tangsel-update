<div class="md:flex py-4 shadow md:px-60 px-3 items-center z-20 relative">
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
            class="flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase h-full {{ request()->is('/') ? 'border-b-2 text-primary border-primary' : '' }}">
            HOME
        </a>
        @foreach ($kategori_artikel_navbar as $idxKategori => $item_kategori_artikel_nav)
            @if (!count($item_kategori_artikel_nav->child))
                <a href="{{ route('kategori-artikel', $item_kategori_artikel_nav->slug) }}"
                    class="flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase h-full {{ request()->is("kategori/$item_kategori_artikel_nav->slug") ? 'border-b-2 text-primary border-primary' : '' }}">
                    {{ $item_kategori_artikel_nav->nama }}
                </a>
            @else
                {{-- Dropdown --}}
                <button id="dropdownDefaultButton{{ $idxKategori }}" data-dropdown-toggle="dropdown"
                    class="text-center inline-flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase h-full"
                    type="button">{{ $item_kategori_artikel_nav->nama }}
                    <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>

                <div id="dropdown"
                    class="z-50 relative hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200 z-50 relative"
                        aria-labelledby="dropdownDefaultButton{{ $idxKategori }}">
                        @foreach ($item_kategori_artikel_nav->child as $item)
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">{{ $item->nama }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                {{-- Dropdownend --}}
            @endif
        @endforeach


    </div>
    {{-- Navlink end --}}
    <div class="ml-auto md:block hidden">
        <input type="text" placeholder="Cari " class="h-9 border-gray-400 rounded-full text-xs">

    </div>
</div>
