<nav class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
    <ul class="flex justify-around items-center">
        @auth
        <li>
            <a href="{{ url('/dashboard') }}"
                class="font-semibold text-white ">Dashboard</a>
        </li>
        @else
        <li class="flex md:hidden">
            <i class="fa-solid fa-eye"></i>
        </li>
        <div class="hidden md:flex md:justify-around w-full">
            <div class="nav-item-logo">
                <li>
                    <p
                        class="font-semibold text-white ">
                        Barangay Management System</p>
                </li>
            </div>

            <div class="nav-item-letters flex justify-around w-1/8">
                <li><a class="font-semibold text-white" href="">Ordinances</a></li>
                <li><a class="font-semibold text-white" href="">Resolutions</a></li>
                <li><a class="font-semibold text-white" href="{{route('guest.report')}}">Reports</a></li>
                <li><a class="font-semibold text-white" href="">Committee</a></li>
            </div>

            <div class="nav-item-auth flex">
                <li>
                    <a href="{{ route('login') }}"
                        class="font-semibold text-white "><i class="fa-solid fa-right-to-bracket"></i> Sign
                        In</a>
                </li>

                @if (Route::has('register'))
                <li class="nav-item-register">
                    <a href="{{ route('register') }}"
                        class="ml-4 font-semibold text-white "><i class="fa-solid fa-user-plus"></i> Sign
                        Up</a>
                </li>
            </div>
        </div>
        @endif
        @endauth
    </ul>
</nav>