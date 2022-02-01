@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">popular movies</h2>
        <div class="grid grid-cols-4 gap-16">
            <div class="mt-8">
                <a href="#">
                    <img src="/img/parasite.jpg" alt="parasite" class="">
                </a>
            </div>
            <div class="mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray-300"></a>
            </div>
        </div>
    </div>
</div>
@endsection