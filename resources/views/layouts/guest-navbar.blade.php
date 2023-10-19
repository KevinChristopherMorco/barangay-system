<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<nav class="sm:fixed sm:top-0 sm:right-0 text-right z-10">
    <ul class="flex justify-around items-center">
        @auth
        <li>
            <a href="{{ url('/dashboard') }}"
                class="font-semibold ">Dashboard</a>
        </li>
        @else
        <li class="flex md:hidden">
            <i class="fa-solid fa-eye"></i>
        </li>
        <div class="hidden md:flex md:justify-between w-full">
            <div class="nav-item-logo">
                <li>
                    <p
                        class="font-semibold ">
                        Barangay Management System</p>
                </li>
            </div>

            <div class="nav-item-letters flex justify-between w-1/8">
                <li class="{{Route::is('guest.ordinance') ? 'navbar--active' : '' }}"><a class="font-semibold" href="{{route('guest.ordinance')}}">Ordinances</a></li>
                <li class="{{Route::is('guest.resolution') ? 'navbar--active' : '' }}"><a class="font-semibold" href="{{route('guest.resolution')}}">Resolutions</a></li>
                <li class="{{Route::is('guest.report') ? 'navbar--active' : '' }}"><a class="font-semibold" href="{{route('guest.report')}}">Reports</a></li>
                <li class="{{Route::is('guest.committee') ? 'navbar--active' : '' }}"><a class="font-semibold" href="{{route('guest.committee')}}">Committee</a></li>
            </div>

            <div class="nav-item-auth flex">
                <li>
                    <a href="{{ route('login') }}"
                        class="font-semibold "><i class="fa-solid fa-right-to-bracket"></i> Sign
                        In</a>
                </li>

                @if (Route::has('register'))
                <li class="nav-item-register">
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold "><i class="fa-solid fa-user-plus"></i> Sign
                        Up</a>
                </li>
            </div>
        </div>
        @endif
        @endauth
    </ul>
</nav>
</body>
</html>