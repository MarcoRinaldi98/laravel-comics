<header>
    <nav>
        <div class="brand">
            <a href="#">
                <img src="../assets/dc-logo.png" alt="Logo Comics" />
            </a>
        </div>
        <ul class="navbar-link">
            <li v-for="(link, i) in nav" :key="i">
                <a class="nav-link" :href="link.href">
                    {{ link . text }}
                </a>
            </li>
        </ul>
    </nav>
</header>
