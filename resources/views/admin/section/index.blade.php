@extends('layouts.admin')
@section('title', 'Dashboard - High Rise')
@section('headerTitle', 'Dashboard')
@section('content')



    @foreach ($sections as $section)
        <figure class="py-5">
            <blockquote class="blockquote">
                <p class="display-4 ">{{ $section->name }}</p>
            </blockquote>
            <figcaption class="blockquote-footer  ">
                {{ $section->description }} created at <cite title="Source Title">{{ $section->created_at }}</cite>
            </figcaption>
        </figure>
        <div class="row gap-3">
            <div class="col">
                {{-- Add New Image --}}
                <form action="{{ route('store-image') }}" method="POST" class="mb-5" enctype="multipart/form-data">
                    @csrf
                    <h1 class="mb-3 fw-bold fs-4">Add New Image</h1>

                    <div class="input-group mb-3">
                        <input type="file" class="form-control" id="image" name="image">
                        <label class="input-group-text" for="image">Upload</label>
                        <input type="number" name="section_id" value="{{ $section->id }}" hidden>
                        <button type="submit" class="btn btn-primary">Add Image</button>
                    </div>
                    @error('image')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </form>
            </div>
            <div class="col">
                {{-- Add New Video --}}
                <form action="{{ route('store-video') }}" method="POST" class="mb-5" enctype="multipart/form-data">
                    @csrf
                    <h1 class=" mb-3 fw-bold fs-3">Add New Video</h1>
                    <div class="input-group mb-3">
                        <input type="file" name="video" class="form-control" id="video">
                        <label class="input-group-text" for="video">Upload</label>
                        <input type="number" name="section_id" value="{{ $section->id }}" hidden>
                        <button type="submit" class="btn btn-primary">Add Video</button>
                    </div>
                    @error('video')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </form>
            </div>
        </div>



        <div class="row flex-wrap">
            @if (count($section->images) != 0)
                @foreach ($section->images as $image)
                    <div class="col-6 img  p-3">
                        {{-- h1{} --}}
                        <img src="{{ asset('storage/' . $image->image) }}" class="img-fluid rounded mx-auto d-block mb-2"
                            alt="...">
                        <div class="container-fluid p-0">
                            <form action="{{ route('delete-image', $image->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger w-100">delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="display-6 text-center text-secondary pt-5">📷</p>
                <p class="display-6 text-center text-secondary pb-5">There are no Images Yet !!</p>
            @endif
        </div>


        <div class="row flex-wrap">
            @if (count($section->videos) != 0)
                @foreach ($section->videos as $video)
                    <div class="col-6 img  p-3">
                        <video src="{{ asset('storage/' . $video->video) }}" controls class="img-fluid"></video>
                        <div class="container-fluid p-0">
                            <form action="{{ route('delete-video', $video->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger w-100">delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            @else
                <p class="display-6 text-center text-secondary pt-5">📽️</p>
                <p class="display-6 text-center text-secondary pb-5">There are no Videos Yet !!</p>
            @endif
        </div>
    @endforeach



@endSection
