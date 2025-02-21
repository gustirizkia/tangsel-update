@extends('layouts.app')

@section('title')
    Artikel {{ $kategori->nama }}
@endsection

@section('content')
    <div class="md:px-60 px-3">

        {{-- Banner promo --}}
        <div class="my-6 ">
            <img src="https://storage.nu.or.id/storage/banners/img-20241126-wa0027_1732637812.webp"
                class="w-full h-auto rounded" alt="">
        </div>
        {{-- Banner promo end --}}

        {{-- Terkini  --}}
        <div class="grid grid-flow-row grid-cols-12 gap-6 mb-10">
            <div class="md:col-span-8 col-span-12">
                <div class=" border-l-4 border-primary pl-3">
                    <div class="font-semibold text-primary text-2xl uppercase">
                        TERKINI {{ $kategori->nama }}
                    </div>
                </div>
                <section id="artikel">

                </section>
                <div class="loading" style="display: none">
                    @for ($i = 0; $i < 8; $i++)
                        <div role="status"
                            class="space-y-8 mt-5 animate-pulse md:space-y-0 md:space-x-4 rtl:space-x-reverse md:flex md:items-center mb-5">
                            <div
                                class="flex items-center justify-center w-full h-28 bg-gray-300 rounded md:w-44 dark:bg-gray-700">
                                <svg class="w-10 h-10 text-gray-200 dark:text-gray-600" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                    <path
                                        d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z" />
                                </svg>
                            </div>
                            <div class="w-full">
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[480px] mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 mb-2.5"></div>
                                <div class="h-2 bg-gray-200 rounded-full dark:bg-gray-700 max-w-[440px] mb-2.5"></div>
                                <div class="h-2.5 bg-gray-200 rounded-full dark:bg-gray-700 w-48 mb-4"></div>
                            </div>
                            <span class="sr-only">Loading...</span>
                        </div>
                    @endfor

                </div>

                <div class="load__more flex justify-center ">
                    <div onclick="loadMore()"
                        class=" mt-6 text-primary font-semibold cursor-pointer hover:bg-primary hover:text-white inline-block  border-primary px-5 py-3 rounded-lg border-2">
                        Lihat Lebih Banyak
                    </div>
                </div>

            </div>
            @if (count($artikelLainnya))
                <div class="md:col-span-4 col-span-12">
                    <div class="border p-4 rounded-md">
                        <div class=" border-l-4 border-primary pl-3">
                            <div class="font-semibold text-primary text-lg ">
                                Artikel Lainnya
                            </div>
                        </div>
                        <div class="mt-2">
                            @foreach ($artikelLainnya as $item)
                                <a href="{{ route('artikel-show', $item->slug) }}" class="flex items-center gap-3 mt-5">
                                    <div class="flex-shrink-0">
                                        <img src="{{ url("/storage/$item->image") }}"
                                            class="md:w-32 md:h-auto h-20 w-20 object-cover rounded" alt="">
                                    </div>
                                    <div class="">
                                        <div class="md:text-sm text-xs font-medium">
                                            {{ $item->nama }}
                                        </div>
                                        <div class="flex gap-2 mt-2 items-center justify-between w-full">
                                            <div class="text-xs text-primary">
                                                {{ $item->kategori->nama }}
                                            </div>

                                            <div class="text-xs text-gray-400">
                                                22 Oktober 2024
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            @endif
        </div>
        {{-- Terkini end --}}
    </div>
@endsection

@push('addScript')
    <script>
        let page = 1;
        const fetchData = (page = 1) => {
            $(".loading").show();
            let tagHtml = "";
            $.ajax({
                url: `{{ route('artikel-data') }}?page=${page}`,
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "kategori_id": {{ $kategori->id }}
                },
                success: function(data) {


                    if (parseInt(data.last_page) <= parseInt(data.current_page)) {
                        $(".load__more").remove();
                    }

                    data.data.forEach(element => {
                        tagHtml += `
                        <a href="${element.url}" class="mt-6 mb-5 flex items-center">
                            <div class="mr-4 flex-shrink-0">
                                <img src="{{ url('storage') }}/${element.image}" class="md:w-36 w-28 h-auto rounded-lg ">
                            </div>
                            <div class="">
                                <h1 class="md:text-xl text-sm font-medium w-full">
                                    ${element.nama}
                                </h1>
                                <div class="flex mt-2 ">
                                    <p class="text-xs md:text-sm text-primary">
                                        ${element.tanggal}
                                    </p>
                                </div>
                            </div>
                        </a>

                        `
                    });

                    $("#artikel").append(tagHtml);
                    $(".loading").hide();
                }
            })
        }

        fetchData(page);

        const loadMore = () => {
            page++;

            fetchData(page);
        }
    </script>
@endpush
