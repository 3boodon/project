<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="@foreach ($tags as $tag)<?= $tag->name . ',' ?> @endforeach">
    <title>@yield('title')</title>
    {{-- Fonts --}}
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    {{-- Swipper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js" defer></script>
    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/cff56f4180.js" crossorigin="anonymous" defer></script>
    {{-- Styles --}}
    <link rel="stylesheet" href="{{ asset('./css/app.css') }}">
    <script src="{{ asset('./js/app.js') }}" defer></script>
</head>

<body>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container px-4 px-lg-5 d-flex h-100 align-items-start justify-content-center">
            <div class="d-flex flex-column h-100 justify-content-between align-items-between">
                <div class="text-center">
                    <h1 class="mx-auto display-1 my-0 text-uppercase">HIGH RISE</h1>
                    <h2 class=" mx-auto mt-2 lead mb-5 text-dark fs-4">A free, responsive, one page Bootstrap theme
                        created by
                        Start Bootstrap.</h2>
                </div>
                <div class="text-center">
                    <a href="#sections" class="btn btn-primary  rounded-pill py-4">
                        <i class="fas fa-chevron-down  d-block "></i>
                    </a>
                </div>
            </div>
        </div>
    </header>

    {{-- <ul class="nav nav-tabs mb-4">
            <li class="nav-item">
                <a class="nav-link  @if (Route::current()->getName() == 'index') active @endif" aria-current="page"
                    href="{{ route('index') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  @if (Route::current()->getName() == 'create') active @endif" href="{{ route('create') }}">New
                    Section</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul> --}}

    @yield('content')


</body>

</html>
