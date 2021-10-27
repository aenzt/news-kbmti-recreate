@extends('layouts.app')

@section('content')
<section class="text-gray-600 body-font">
    <div class="container px-5 py-8 mx-auto">
      <div class="flex flex-wrap w-full mb-4 p-4">
        <div class="w-full mb-6 lg:mb-0">
          <h1 class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-700">News</h1>
          <div class="h-1 w-20 bg-indigo-500 rounded"></div>
        </div>
      </div>
      <div class="flex flex-wrap justify-between">
          @foreach ($news as $berita)
            <div class="xl:w-1/3 md:w-1/2 w-1/3 p-4 filter drop-shadow-2xl flex">
                <div class="bg-white p-6 rounded-lg max-h-full">
                {{-- <img class="lg:h-full xl:h-full md:h-full sm:h-full h-1/2 rounded w-full object-cover object-center mb-6" src="http://kbmti.filkom.ub.ac.id/public/storage/articles/614c8eea93282_partnership3_01.jpg" alt="Image Size 720x400"> --}}
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $berita->bureau->name }}</h3>
                <h2 class="text-xl text-black font-bold title-font mb-2">{{ $berita->title }}</h2>
                <p class="leading-relaxed text-base flex-1">{{ $berita->body }}</p>
                </div>
            </div>
          @endforeach
      </div>
    </div>
  </section>
@endsection
