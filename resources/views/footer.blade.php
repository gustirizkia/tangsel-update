@extends('layouts.app')

@section('title')
    {{ $page->nama }}
@endsection

@section('content')
    <div class="md:px-60 mt-8">
        <img src="{{ url("storage/$page->image") }}" alt="Tangsel Update {{ $page->nama }}" class="w-full h-auto rounded-lg">

        <div class="mt-6">
            <h1 class="text-2xl font-semibold">
                {{ $page->nama }}
            </h1>

            <div class="mt-4 text-gray-500 mb-24">
                {!! $page->content !!}
            </div>
        </div>
    </div>
@endsection
