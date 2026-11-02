@extends('layouts.main')
@section('title', 'halaman blog')
@section('content')
               <div class="collapse collapse-arrow bg-base-100 border border-base-300">
               <input type="radio" name="my-accordion-2" checked="checked" />
               <div class="collapse-title font-semibold">What is your Favorite subject</div>
               <div class="collapse-content text-sm">Sejarah dan Budaya.</div>
               </div>
               <div class="collapse collapse-arrow bg-base-100 border border-base-300">
               <input type="radio" name="my-accordion-2" />
               <div class="collapse-title font-semibold">What is your Favourite Food</div>
               <div class="collapse-content text-sm">Katsudon karena itu makanan yang seimbang dan semuanya lezat di lidah jadi bagian apapun yang diambil rasanya selalu enak .</div>
               </div>
               <div class="collapse collapse-arrow bg-base-100 border border-base-300">
               <input type="radio" name="my-accordion-2" />
               <div class="collapse-title font-semibold">What are the hopes for the future that can be acted upon immediately?</div>
               <div class="collapse-content text-sm">Mencoba mengabungkan beberapa mod yang tidak terpakai menjadi satu kesatuan lebih baik.</div>
               </div>

@endsection