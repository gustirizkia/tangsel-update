@extends('layouts.app')

@section('title')
    {{ $artikel->nama }}
@endsection

@push('head_tag')
    <!-- Primary Meta Tags -->
    <meta name="title" content="{{ $artikel->nama }}" />
    <meta name="description" content="{{ $artikel->keyword }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:title" content="{{ $artikel->nama }}" />
    <meta property="og:description" content="{{ $artikel->keyword }}" />
    <meta property="og:image" content="{{ url('storage/') . "/$artikel->image" }}" />

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image" />
    <meta property="twitter:url" content="{{ url('/') }}" />
    <meta property="twitter:title" content="TANGSEL UPDATE" />
    <meta property="twitter:description" content="{{ $artikel->keyword }}" />
    <meta property="twitter:image" content="{{ url('storage/') . "/$artikel->image" }}" />

    <!-- Meta Tags Generated with https://metatags.io -->
@endpush

@section('content')
    <div class="md:px-60 px-3 py-7">
        <div class="md:flex gap-6">
            <div class="md:w-[60%]">

                <img src="{{ url("storage/$artikel->image") }}" alt="Tangsel Update" class="w-full h-auto rounded-lg">
                <div class="md:my-7 my-4">
                    <div class="">
                        <h1 class="md:text-2xl text-lg font-semibold ">
                            {{ $artikel->nama }}
                        </h1>
                        <div class="date">
                            <p class="text-sm text-[#616161] dark:text-white">
                                {{ $artikel->tanggal }}
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-end mb-3 mt-2 md:mt-6">

                        <div class="share-wrapper flex items-center gap-2 cursor-pointer">

                            <a href="https://wa.me/?text=https://narasi.tv/video/narasi-explains/sisi-lain-fans-k-pop-militan-ikut-protes-politik%3Futm_source=whatsapp%26utm_medium=share"
                                target="_blank" rel="noopener"
                                class="md:w-8 md:h-8 w-5 h-5 rounded-full bg-[#25D366] flex justify-center items-center"
                                data-v-70a3ce7f=""><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    class="icon w-6 h-6" data-v-70a3ce7f="" style="color:#ffffff;" width="1em"
                                    height="1em" viewBox="0 0 24 24" data-v-e8d572f6="">
                                    <path fill="currentColor"
                                        d="M19.05 4.91A9.82 9.82 0 0 0 12.04 2c-5.46 0-9.91 4.45-9.91 9.91c0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21c5.46 0 9.91-4.45 9.91-9.91c0-2.65-1.03-5.14-2.9-7.01m-7.01 15.24c-1.48 0-2.93-.4-4.2-1.15l-.3-.18l-3.12.82l.83-3.04l-.2-.31a8.26 8.26 0 0 1-1.26-4.38c0-4.54 3.7-8.24 8.24-8.24c2.2 0 4.27.86 5.82 2.42a8.18 8.18 0 0 1 2.41 5.83c.02 4.54-3.68 8.23-8.22 8.23m4.52-6.16c-.25-.12-1.47-.72-1.69-.81c-.23-.08-.39-.12-.56.12c-.17.25-.64.81-.78.97c-.14.17-.29.19-.54.06c-.25-.12-1.05-.39-1.99-1.23c-.74-.66-1.23-1.47-1.38-1.72c-.14-.25-.02-.38.11-.51c.11-.11.25-.29.37-.43s.17-.25.25-.41c.08-.17.04-.31-.02-.43s-.56-1.34-.76-1.84c-.2-.48-.41-.42-.56-.43h-.48c-.17 0-.43.06-.66.31c-.22.25-.86.85-.86 2.07s.89 2.4 1.01 2.56c.12.17 1.75 2.67 4.23 3.74c.59.26 1.05.41 1.41.52c.59.19 1.13.16 1.56.1c.48-.07 1.47-.6 1.67-1.18c.21-.58.21-1.07.14-1.18s-.22-.16-.47-.28">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://twitter.com/intent/tweet?url=https://narasi.tv/video/narasi-explains/sisi-lain-fans-k-pop-militan-ikut-protes-politik?utm_source=twitter&amp;utm_medium=share"
                                target="_blank" rel="noopener"
                                class="md:w-8 md:h-8 w-5 h-5 rounded-full bg-[#051C2C] dark:bg-white flex justify-center items-center"
                                data-v-70a3ce7f=""><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    class="icon w-5 h-5 text-white dark:text-black" data-v-70a3ce7f="" style=""
                                    width="1em" height="1em" viewBox="0 0 24 24" data-v-e8d572f6="">
                                    <path fill="currentColor"
                                        d="M10.488 14.651L15.25 21h7l-7.858-10.478L20.93 3h-2.65l-5.117 5.886L8.75 3h-7l7.51 10.015L2.32 21h2.65zM16.25 19L5.75 5h2l10.5 14z">
                                    </path>
                                </svg>
                            </a>
                            <a href="https://www.facebook.com/sharer.php?u=https://narasi.tv/video/narasi-explains/sisi-lain-fans-k-pop-militan-ikut-protes-politik?utm_source=facebook&amp;utm_medium=share"
                                target="_blank" rel="noopener"
                                class="md:w-8 md:h-8 w-5 h-5 rounded-full bg-[#1080F8] flex justify-center items-center"
                                data-v-70a3ce7f=""><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img"
                                    class="icon w-6 h-6" data-v-70a3ce7f="" style="color:#ffffff;" width="1em"
                                    height="1em" viewBox="0 0 512 512" data-v-e8d572f6="">
                                    <path
                                        d="M288 192v-38.1c0-17.2 3.8-25.9 30.5-25.9H352V64h-55.9c-68.5 0-91.1 31.4-91.1 85.3V192h-45v64h45v192h83V256h56.4l7.6-64h-64z"
                                        fill="currentColor"></path>
                                </svg>
                            </a>
                            <div class="text-xs text-[#1a1a1a] dark:text-white py-[6px] px-3 rounded-full border border-[#1a1a1a] dark:border-white"
                                data-v-70a3ce7f=""> Copy Link </div>
                        </div>
                    </div>

                </div>

                <div class="mt-3">
                    {!! $artikel->content !!}
                </div>

                {{-- carousel --}}
                <div class=" border-l-4 border-primary pl-3 mt-5">
                    <div class="font-semibold text-primary text-2xl ">
                        TERKAIT
                    </div>
                </div>
                <div class="overflow-x-auto mt-5 ">
                    <div class="flex gap-4  w-full flex-shrink-0 pb-3" id="terkait">

                    </div>

                </div>
                {{-- carousel end --}}

            </div>
            <div class="md:w-[40%] md:mt-0 mt-6">
                <div class="border p-4 rounded-md">
                    <div class=" border-l-4 border-primary pl-3">
                        <div class="font-semibold text-primary text-lg uppercase ">
                            Artikel Lainnya
                        </div>
                    </div>
                    <div class="mt-2">
                        @foreach ($artikelLainnya as $item)
                            <a href="{{ route('artikel-show', $item->slug) }}" class="flex items-center gap-3 mt-5">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset("storage/$item->image") }}"
                                        class="md:w-32 md:h-auto h-20 w-20 object-cover rounded" alt="">
                                </div>
                                <div class="">
                                    <div class="md:text-sm text-xs font-medium">
                                        {{ $item->nama }}
                                    </div>
                                    <div class="flex gap-2 mt-2 items-center ">
                                        <div class="text-xs text-primary">
                                            {{ $item->kategori->nama }}
                                        </div>
                                        <div class="">
                                            |
                                        </div>
                                        <div class="text-xs text-gray-400">
                                            {{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') }}
                                        </div>
                                    </div>
                                </div>

                            </a>
                        @endforeach

                    </div>
                </div>


            </div>
        </div>

    </div>
@endsection


@push('addScript')
    <script>
        const fetchData = (page = 1) => {

            let tagHtml = "";
            $.ajax({
                url: `{{ route('artikel-data') }}?page=${page}`,
                method: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "kategori_id": {{ $artikel->kategori_id }}
                },
                success: function(data) {

                    data.data.forEach(element => {
                        tagHtml += `
                            <div class="w-36 md:w-64 shrink-0">
                            <a href="{{ url('artikel') }}/${element.slug}">
                                <img class="w-full inline-block h-auto object-cover rounded-lg"
                                    src="{{ url('storage') }}/${element.image}">
                                <div class="">
                                </div>
                                <p class="text-primary text-xs my-2">
                                    ${element.kategori.nama}
                                </p>
                                <h1 class="md:font-medium font-semibold text-xs md:text-sm">
                                    ${element.nama}
                                </h1>
                            </a>

                            </div>

                        `
                    });

                    $("#terkait").append(tagHtml);
                }
            })
        }

        fetchData()
    </script>
@endpush
