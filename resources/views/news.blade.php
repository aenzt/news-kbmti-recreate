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
      <div class="flex flex-wrap">
          @foreach ($news as $berita)
            <div class="w-1/3 p-3 filter drop-shadow-2xl flex">
                <div class="bg-white p-6 rounded-lg max-h-full w-full">
                <img class="h-2/3 rounded w-2/2 object-cover object-center mb-3" src="http://kbmti.filkom.ub.ac.id/public/storage/articles/614c8eea93282_partnership3_01.jpg" alt="Image Size 720x400">
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">{{ $berita->bureau->name }}</h3>
                <h2 class="text-2xl text-black font-bold title-font mb-2">{{ $berita->title }}</h2>
                <p class="leading-relaxed text-base flex-1 my-2">{{ Str::limit($berita->body, 200) }}</p>
                </div>
            </div>
          @endforeach
      </div>
    </div>
  </section>
@endsection
