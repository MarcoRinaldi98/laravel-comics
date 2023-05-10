<header>
    <div class="bg-primary ms_header-top">
        <div class="container-lg d-flex justify-content-end">
            <div class="text-white">
                DC POWER℠ VISA®
            </div>
            <div class="text-white ms-3">
                ADDITIONAL DC SITES
                <i class="fa-solid fa-caret-down"></i>
            </div>
        </div>
    </div>
    <div class="container-lg">
        <nav class="d-flex w-100">
            <div class="h.100">
                <a href="{{ route('comics') }}">
                    <img class="h-100" src="{{ Vite::asset('resources/img/DC-logo.png') }}" alt="Logo Comics" />
                </a>
            </div>
            <ul class="list-unstyled fw-semibold">
                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        CHARACTERS
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'comics' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('comics') }}">
                        COMICS
                    </a>
                </li>

                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        MOVIES
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        TV
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        GAMES
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        COLLECTIBLES
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        VIDEOS
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        FANS
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        NEWS
                    </a>
                </li>
                <li>
                    <a class="nav-link" href="{{ route('comics') }}">
                        SHOP
                        <i class="fa-solid fa-caret-down"></i>
                    </a>
                </li>
            </ul>
            <div class="ms_button">
                <button type="button" class="btn btn-primary">
                    Search
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
        </nav>
    </div>

</header>
