@extends('layouts.main')
@section('title', 'halaman home')
@section('content')

<div class="hero min-h-screen relative flex items-center justify-center bg-cover bg-center text-white">
   <img src="{{ asset('img/home-template.jpg') }}" alt="Foto" class="absolute inset-0 w-full h-full object-cover" />

   <div class="absolute inset-0 bg-black/60"></div>

   <div class="relative z-10 max-w-md p-4 text-center mx-auto flex flex-col items-center justify-center">
      <h1 class="mb-5 text-4xl md:text-5xl font-bold text-white">Greetings!</h1>
      <p class="mb-5 text-gray-200">
         My name is <span class="font-bold text-red-500 text-left justify-left  pb-5 px-3 md:px-3">Andra Ilham Triadi Mijaya</span> and I am a Novel enthusiast. I love to read any kind of genre of novel, but also study how to become web developer and learn about progamming language.
      </p>
   </div>
</div>

@endsection