@extends('layouts.app')
@section('title', 'Home Page - High Rise')
@section('content')

    <div class="container py-5 my-5" id="sections">
        <figure class="my-5">
            <blockquote class="blockquote">
                <p class="display-4 ">All Sections</p>
            </blockquote>
            <figcaption class="blockquote-footer fs-3  ">
                Discover all sections here
            </figcaption>
        </figure>
        <!-- Swiper -->
        <div class="swiper mySwiper mb-5">
            <div class="swiper-wrapper">
                @foreach ($sections as $section)
                    @if (count($section->images) != 0)
                        <div class="swiper-slide">
                            <img src="{{ asset('./storage/' . $section->images[0]->image) }}" alt="{{ $section->name }}">
                            <div class="section__info section__whatsapp w-100 text-start py-3 px-4" style="--delay:0">
                                <a href="#" class="text-decoration-none text-white fs-4 "><i
                                        class="fa fa-whatsapp"></i>
                                    <span>
                                        WhatsApp</span></a>
                            </div>
                            <div class="section__info section__phone w-100 text-start py-3 px-4" style="--delay:.2">
                                <a href="#" class="text-decoration-none text-white fs-4 ">
                                    <i class="fas fa-phone-alt"></i>
                                    <span>
                                        Call</span>
                                </a>
                            </div>
                            <div class="section__info w-100 bg-secondary text-white text-start py-3 px-4">
                                <span class="d-block  fs-3"><a class="text-decoration-none text-white"
                                        href="{{ route('show', $section->id) }}">{{ $section->name }}</a></span>
                                <span class="d-block text-white-50 fs-5">{{ $section->description }}</span>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>



    </div>
@endSection
