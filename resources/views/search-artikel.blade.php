@extends('layouts.app')

@section('title')
    Cari Tulisan
@endsection

@section('content')
    <div class="md:px-60 px-3 my-6">
        <div class="grid grid-flow-row grid-cols-12 gap-6 mb-10">
            <div class="md:col-span-8 col-span-12">
                <div class=" border-l-4 border-primary pl-3">
                    <div class="font-semibold text-primary md:text-2xl text-base uppercase">
                        Hasil Pencarian "{{ request()->q }}"
                    </div>
                </div>
                <section id="artikel">

                    @forelse ($artikel as $item)
                        <a href="{{ route('artikel-show', $item->slug) }}" class="mt-6 mb-5 flex items-center">
                            <div class="mr-4 flex-shrink-0">
                                <img src="{{ url('storage') }}/{{ $item->image }}" class="md:w-36 w-28 h-auto rounded-lg ">
                            </div>
                            <div class="">
                                <h1 class="md:text-xl text-sm font-medium w-full">
                                    {{ $item->nama }}
                                </h1>
                                <div class="flex mt-2 ">
                                    <p class="text-xs md:text-sm text-primary">
                                        {{ $item->tanggal }}
                                    </p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <div class="mt-3 text-xl text-gray-400">
                            Tidak ada ...
                        </div>
                    @endforelse
                </section>

            </div>
            @if (count($artikelLainnya))
                <div class="md:col-span-4 col-span-12">
                    <div class="border p-4 rounded-md">
                        <div class=" border-l-4 border-primary pl-3">
                            <div class="font-semibold text-primary text-base md:text-lg ">
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
    </div>
@endsection
