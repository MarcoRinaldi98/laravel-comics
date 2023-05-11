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
                @foreach ($navlinks as $navlink)
                    <li class="text-uppercase">
                        <a class="nav-link {{ Route::currentRouteName() == $navlink['text'] ? 'text-primary fw-bold' : '' }}"
                            href="{{ route($navlink['text']) }}">
                            {{ $navlink['text'] }}
                        </a>
                    </li>
                @endforeach
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
