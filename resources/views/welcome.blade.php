@extends('layouts.app')

@section('content')
    <div class="md:px-60 px-3 mt-4 pb-20">
        <div class="grid grid-flow-row grid-cols-12 gap-6">
            <div class="md:col-span-7 col-span-12">
                {{-- Carousel --}}
                <div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-full">
                        <!-- Item 1 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>

                            <img src="https://storage.nu.or.id/storage/post/16_9/mid/nasaruddin-tegaskan-komitmen-bersihkan-kemenag-dari-korupsi_1733147394.webp"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="Tangsel Update">
                            <div
                                class="md:text-2xl text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-10 px-3 text-white font-medium rounded-b-lg">
                                Benyamin: 16 Tahun Kota Tangsel, Refleksi dan Optimisme untuk Masa Depan
                            </div>

                        </div>
                        <!-- Item 2 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://tangerangupdate.com/wp-content/uploads/2024/11/Foto-website_20241125_131904_0000.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="Tangsel Update">

                            <div
                                class="md:text-2xl text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-10 px-3 text-white font-medium rounded-b-lg">
                                PN Tangerang Gelar Sidang Praperadilan SP3 Kasus Dugaan Korupsi Pengadaan Lahan RSUD
                                Tigaraksa
                            </div>
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://tangerangupdate.com/wp-content/uploads/2024/11/IMG-20241114-WA0009-1080x570.jpg"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="Tangsel Update">

                            <div
                                class="md:text-2xl text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-10 px-3 text-white font-medium rounded-b-lg">
                                Kentang Berulah Lagi di Pamulang : Pentingnya Netralitas ASN dan Perangkat Kelurahan pada
                                Pilkada 2024
                            </div>

                        </div>
                        <!-- Item 4 -->
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="https://tangerangupdate.com/wp-content/uploads/2024/11/Foto-website_20241128_140901_0000.png"
                                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="Tangsel Update">
                            <div
                                class="md:text-2xl text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-10 px-3 text-white font-medium rounded-b-lg">
                                Pimpin Apel Pasca Cuti, Benyamin Tekankan ASN Jaga Independensi Jelang Pilkada 2024
                            </div>
                        </div>

                    </div>

                    <button type="button"
                        class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-prev>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button"
                        class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                        data-carousel-next>
                        <span
                            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
                {{-- Carousel end --}}
            </div>
            <div class="md:col-span-5 col-span-12">
                <div class="relative">
                    <img src="https://tangerangupdate.com/wp-content/uploads/2023/04/kpkrafaelalun1_840x576.jpg"
                        alt="Tangsel Update" class="h-52 w-full object-cover rounded-lg">

                    <div
                        class="md:text-base text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-8 px-3 text-white font-medium rounded-b-lg">
                        Rafael Alun Trisambodo Ayah dari Mario Dandy Resmi Ditahan Atas Dugaan Gratifikasi
                    </div>
                </div>
                <div class="relative mt-3">
                    <img src="https://tangerangupdate.com/wp-content/uploads/2024/11/Foto-website_20241128_141540_0000.png"
                        alt="Tangsel Update" class="h-52 w-full object-cover rounded-lg">

                    <div
                        class="md:text-base text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-8 px-3 text-white font-medium rounded-b-lg">
                        Benyamin: 16 Tahun Kota Tangsel, Refleksi dan Optimisme untuk Masa Depan
                    </div>
                </div>
            </div>
        </div>

        {{-- Banner promo --}}
        <div class="my-6 md:px-24">
            <img src="https://storage.nu.or.id/storage/banners/img-20241126-wa0027_1732637812.webp"
                class="w-full h-auto rounded" alt="">
        </div>
        {{-- Banner promo end --}}

        {{-- Terkini  --}}

        <div class="grid grid-flow-row grid-cols-12 gap-6">
            <div class="md:col-span-8 col-span-12">
                <div class=" border-l-4 border-primary pl-3">
                    <div class="font-semibold text-primary text-2xl ">
                        TERKINI
                    </div>
                </div>
                @for ($i = 0; $i < 3; $i++)
                    <div class="mt-6 mb-5 flex items-center">
                        <div class="mr-4 flex-shrink-0">
                            <img src="https://tangerangupdate.com/wp-content/uploads/2024/08/Foto-website_20240810_065747_0000.png"
                                class="md:w-48 w-28 h-auto rounded-lg ">
                        </div>
                        <div class="">

                            <h1 class="md:text-xl text-sm font-medium w-full">
                                Pertamina Resmi Turunkan Harga BBM Non-Subsidi per 1 Oktober 2024 di Seluruh Indonesia
                            </h1>
                            <div class="flex mt-2 ">
                                <p class="text-xs md:text-sm text-primary">TANGERANG RAYA</p>
                                {{-- <p class="text-xs md:text-sm text-gray-400 ml-3">10 November 2024</p> --}}
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="md:col-span-4 col-span-12">
                <div class="border p-4 rounded-md">
                    <div class=" border-l-4 border-primary pl-3">
                        <div class="font-semibold text-primary text-lg ">
                            NASIONAL
                        </div>
                    </div>
                    <div class="mt-2">
                        @for ($i = 1; $i < 7; $i++)
                            <a href="/detail" class="flex items-center mt-5">
                                <div class="text-2xl font-bold text-primary mr-3">
                                    {{ $i }}
                                </div>
                                <div class="text-sm font-medium">
                                    Rafael Alun Trisambodo Ayah dari Mario Dandy Resmi Ditahan Atas Dugaan Gratifikasi
                                </div>

                            </a>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
        {{-- Terkini end --}}

        {{-- carousel --}}
        <div class=" border-l-4 border-primary pl-3 mt-5">
            <div class="font-semibold text-primary text-2xl ">
                OPINI
            </div>
        </div>
        <div class="overflow-x-auto mt-5 ">
            <div class="flex gap-4  w-full flex-shrink-0 pb-3">
                @for ($i = 0; $i < 8; $i++)
                    <div class="w-36 md:w-64 shrink-0">
                        <img class="w-full inline-block h-auto object-cover rounded-lg"
                            src="https://images.narasi.tv/preset:sharp/resize:fill:658:365:1/gravity:ce/plain/https://storage.googleapis.com/narasi-production.appspot.com/production/medium/1732704399662/dedi-mulyadi-sebut-hasil-quick-count-pilkada-jabar-2024-masih-di-bawah-ekspektasi-meski-unggul-jauh-medium.jpg@webp">
                        <div class="">
                        </div>
                        <p class="text-primary text-xs my-2">
                            Nasional
                        </p>
                        <h1 class="md:font-medium font-semibold text-xs md:text-sm">
                            Dedi Mulyadi Sebut Hasil Quick Count Pilkada Jabar 2024
                        </h1>

                    </div>
                @endfor
            </div>

        </div>
        {{-- carousel end --}}
    </div>
@endsection
