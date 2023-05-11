<section id="footer-bottom">
    <div class="container-lg d-flex justify-content-between align-items-center h-100">
        <button>SIGN-UP NOW!</button>
        <ul>
            <li class="text-primary fw-bolder">
                FOLLOW US
            </li>
            @foreach ($icons as $icon)
                <li>
                    <a href="#">
                        <img src="{{ Vite::asset('resources/img/' . $icon['link']) }}" alt="Logo di {{ $icon['nome'] }}">
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</section>
