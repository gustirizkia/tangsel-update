@extends('layouts.app')


@push('head_tag')
    <!-- Primary Meta Tags -->
    <meta name="title" content="TANGSEL UPDATE" />
    <meta name="description"
        content="Tangsel Update
Platform portal berita yang menghadirkan informasi terkini dan terpercaya untuk masyarakat Tangerang Selatan." />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="TANGSEL UPDATE" />
    <meta property="og:description"
        content="Tangsel Update
Platform portal berita yang menghadirkan informasi terkini dan terpercaya untuk masyarakat Tangerang Selatan." />
    <meta property="og:image" content="{{ asset('assets/images/logo.jpg') }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url('/') }}" />
    <meta property="twitter:title" content="TANGSEL UPDATE" />
    <meta property="twitter:description"
        content="Tangsel Update
Platform portal berita yang menghadirkan informasi terkini dan terpercaya untuk masyarakat Tangerang Selatan." />
    <meta property="twitter:image" content="{{ asset('assets/images/logo.jpg') }}" />

    <!-- Meta Tags Generated with https://metatags.io -->
@endpush

@section('content')
    <div class="md:px-60 px-3 mt-4 pb-20">
        {{-- Banner promo --}}
        <div class="my-6 ">
            <img src="https://storage.nu.or.id/storage/banners/img-20241126-wa0027_1732637812.webp"
                class="w-full h-auto rounded" alt="">
        </div>
        {{-- Banner promo end --}}
        <div class="grid grid-flow-row grid-cols-12 gap-6 mb-6">
            <div class="md:col-span-7 col-span-12">
                {{-- Carousel --}}
                <div id="default-carousel" class="relative w-full h-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg md:h-full">
                        <!-- Item 1 -->
                        @foreach ($rekomendasi as $index => $item)
                            @if ($index > 1)
                                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                    <a href="{{ route('artikel-show', $item->artikel->slug) }}">
                                        <img src="{{ '/storage/' . $item->artikel->image }}"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="Tangsel Update">
                                        <div
                                            class="md:text-2xl text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-10 px-3 text-white font-medium rounded-b-lg">
                                            {{ $item->artikel->nama }}
                                        </div>

                                    </a>

                                </div>
                            @endif
                        @endforeach

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
                @if (isset($rekomendasi[0]))
                    <div class="relative">
                        <a href="{{ route('artikel-show', $rekomendasi[0]->artikel->slug) }}">
                            <img src="/storage/{{ $rekomendasi[0]->artikel->image }}"
                                alt="{{ $rekomendasi[0]->artikel->nama }}" class="h-52 w-full object-cover rounded-lg">

                            <div
                                class="md:text-base text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-8 px-3 text-white font-medium rounded-b-lg">
                                {{ $rekomendasi[0]->artikel->nama }}
                            </div>
                        </a>
                    </div>
                @endif
                @if (isset($rekomendasi[1]))
                    <div class="relative mt-3">
                        <a href="{{ route('artikel-show', $rekomendasi[1]->artikel->slug) }}">
                            <img src="/storage/{{ $rekomendasi[1]->artikel->image }}"
                                alt="{{ $rekomendasi[1]->artikel->nama }}" class="h-52 w-full object-cover rounded-lg">

                            <div
                                class="md:text-base text-sm bg-gradient-to-t from-slate-950 to-transparent absolute bottom-0 w-full pb-3 pt-8 px-3 text-white font-medium rounded-b-lg">
                                {{ $rekomendasi[1]->artikel->nama }}
                            </div>
                        </a>
                    </div>
                @endif

            </div>
        </div>



        {{-- Terkini  --}}

        <div class="grid grid-flow-row grid-cols-12 gap-6">
            <div class="md:col-span-8 col-span-12">
                <div class=" border-l-4 border-primary pl-3">
                    <div class="font-semibold text-primary text-2xl ">
                        TERKINI
                    </div>
                </div>
                @foreach ($terkini as $item)
                    <a href="{{ route('artikel-show', $item->slug) }}" class="mt-6 mb-5 flex items-center">
                        <div class="mr-4 flex-shrink-0">
                            <img src="{{ url('storage') }}/{{ $item->image }}" class="md:w-48 w-28 h-auto rounded-lg ">
                        </div>
                        <div class="">

                            <h1 class="md:text-xl text-sm font-medium w-full">
                                {{ $item->nama }}
                            </h1>
                            <div class="flex mt-2 ">
                                <p class="text-xs md:text-sm text-primary">
                                    {{ $item->kategori->nama }}
                                </p>
                                {{-- <p class="text-xs md:text-sm text-gray-400 ml-3">10 November 2024</p> --}}
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>
            <div class="md:col-span-4 col-span-12">
                <div class="border p-4 rounded-md">
                    <div class=" border-l-4 border-primary pl-3">
                        <div class="font-semibold text-primary text-lg ">
                            {{ $firstKategori->nama }}
                        </div>
                    </div>
                    <div class="mt-2">
                        @foreach ($firstArtikel as $index => $item)
                            <a href="{{ route('artikel-show', $item->slug) }}" class="flex items-center mt-5">
                                <div class="text-2xl font-bold text-primary mr-3">
                                    {{ $index + 1 }}
                                </div>
                                <div class="text-sm font-medium">
                                    {{ $item->nama }}
                                </div>

                            </a>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        {{-- Terkini end --}}

        {{-- carousel --}}
        <div class=" border-l-4 border-primary pl-3 mt-5">
            <div class="font-semibold text-primary text-2xl ">
                {{ $lastKategori->nama }}
            </div>
        </div>
        <div class="overflow-x-auto mt-5 ">
            <div class="flex gap-4  w-full flex-shrink-0 pb-3">
                @foreach ($lastArtikel as $item)
                    <a href="{{ route('artikel-show', $item->slug) }}" class="w-36 md:w-64 shrink-0">
                        <img class="w-full inline-block h-auto object-cover rounded-lg"
                            src="/storage/{{ $item->image }}">
                        <div class="">
                        </div>
                        <p class="text-primary text-xs my-2">
                            {{ $item->kategori->nama }}
                        </p>
                        <h1 class="md:font-medium font-semibold text-xs md:text-sm">
                            {{ $item->nama }}
                        </h1>

                    </a>
                @endforeach

            </div>

        </div>
        {{-- carousel end --}}
    </div>
@endsection
