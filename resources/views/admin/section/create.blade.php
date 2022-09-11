@extends('layouts.admin')
@section('title', 'Create New Sections- High Rise')
@section('headerTitle', 'Sections Management')
@section('content')

    {{-- Add New Section --}}
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class=" d-flex justify-content-between align-items-center">
            <h1 class="display-6 mb-3">Add New Section</h1>
            <button type="submit" class="btn btn-primary">Add Section</button>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon3">Section Name</span>
            <input type="text" class="form-control" id="basic-url" name="name" value="{{ old('name') }}"
                aria-describedby="basic-addon3">
        </div>
        @error('name')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
        <div class="input-group  mb-3">
            <span class="input-group-text">Discription</span>
            <textarea class="form-control" value="{{ old('description') }}" aria-label="With textarea" name="description"></textarea>
        </div>
        @error('description')
            <div class="alert alert-danger" role="alert">
                {{ $message }}
            </div>
        @enderror
    </form>

    <table class="table mt-5">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Section Name</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $index => $section)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td><a href="{{ route('show', $section->id) }}">{{ $section->name }}</a></td>
                    <td>{{ $section->description }}</td>
                    <td>
                        <form action="{{ route('delete-section', $section->id) }}" method="POST" class="d-inline-block">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                        {{-- <button type="submit" class="btn btn-primary"><i class="fas fa-pen"></i></button> --}}
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>



    {{-- Add New Image --}}
    {{-- <form action="{{ route('store-image') }}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
        <h1 class="display-6 mb-3">Add New Image</h1>

        <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile02" name="image">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Sections</label>
            <select name="section_id" class="form-select" id="inputGroupSelect01">
                @foreach ($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Image</button>
    </form> --}}

    {{-- Add New Video --}}
    {{-- <form action="{{ route('store-video') }}" method="POST" class="mt-5" enctype="multipart/form-data">
        @csrf
        <h1 class="display-6 mb-3">Add New Video</h1>
        <div class="input-group mb-3">
            <input type="file" name="video" class="form-control" id="inputGroupFile02">
            <label class="input-group-text" for="inputGroupFile02">Upload</label>
        </div>
        <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupSelect01">Sections</label>
            <select name="section_id" class="form-select" id="inputGroupSelect01">
                @foreach ($sections as $section)
                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Video</button>
    </form> --}}

@endSection
