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
                    <a class="nav-link {{ Route::currentRouteName() == 'characters' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('characters') }}">
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
                    <a class="nav-link {{ Route::currentRouteName() == 'movies' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('movies') }}">
                        MOVIES
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'tv' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('tv') }}">
                        TV
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'games' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('games') }}">
                        GAMES
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'collectibles' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('collectibles') }}">
                        COLLECTIBLES
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'videos' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('videos') }}">
                        VIDEOS
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'fans' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('fans') }}">
                        FANS
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'news' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('news') }}">
                        NEWS
                    </a>
                </li>
                <li>
                    <a class="nav-link {{ Route::currentRouteName() == 'shop' ? 'text-primary fw-bold' : '' }}"
                        href="{{ route('shop') }}">
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
