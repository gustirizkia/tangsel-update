<div class="md:flex py-4 shadow md:px-60 px-3 items-center z-20 relative">
    <div class="flex items-center md:mb-0 mb-3">
        <a href="/" class="text-red-700 ">
            <img src="{{ asset('assets/images/logo.jpg') }}" alt="Logo Tangsel Update" class="w-20">
        </a>
        <div class="ml-auto md:hidden w-[70%]">
            <form action="{{ route('search') }}" method="get">
                <label for="search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">

                    <input type="search" id="search"
                        class="block w-full p-2  text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                        placeholder="Cari . . ." name="q" value="{{ request()->q }}" />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-1 dark:bg-primary dark:hover:bg-blue-700 dark:focus:ring-primary">
                        <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </button>
                </div>
            </form>
        </div>
    </div>
    {{-- Navlink --}}
    <div class=" flex font-medium gap-6 md:ml-4 overflow-x-scroll scrollbar-hide no-scrollbar md:pb-0 pb-2 pr-4">
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
                    class="text-center inline-flex items-center font-bold text-sm  text-black dark:text-white whitespace-nowrap uppercase 
                    h-full
                    {{ request()->is("kategori/$item_kategori_artikel_nav->slug*") ? 'border-b-2 text-primary border-primary' : '' }}"
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
                                <a href="/kategori/{{ $item_kategori_artikel_nav->slug }}/{{ $item->slug }}"
                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white {{ request()->is("kategori/$item_kategori_artikel_nav->slug/$item->slug") ? 'text-primary' : '' }}">{{ $item->nama }}</a>
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

        <form action="{{ route('search') }}" method="get">
            <label for="search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">

                <input type="search" id="search"
                    class="block w-full p-3  text-sm text-gray-900 border border-gray-300 rounded-full bg-gray-50 focus:ring-primary focus:border-primary dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary dark:focus:border-primary"
                    placeholder="Cari . . ." name="q" value="{{ request()->q }}" />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2 dark:bg-primary dark:hover:bg-blue-700 dark:focus:ring-primary">
                    <svg class="w-3 h-3 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </button>
            </div>
        </form>

    </div>
</div>


@push('addScript')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Cari elemen dengan class yang menunjukkan elemen aktif
            const activeElement = document.querySelector('.border-b-2');
            if (activeElement) {
                // Scroll elemen aktif ke tengah tampilan horizontal
                activeElement.scrollIntoView({
                    behavior: 'smooth',
                    inline: 'center'
                });
            }
        });
    </script>
@endpush
