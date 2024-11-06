<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand text-dark" href="/">
            <img src="{{ asset('edufun.png') }}" style="max-width: 70px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('dashboardPage') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-dark dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $c)
                            <li><a href="{{ route('categoryPage', ['category_id' => $c->id]) }}"
                                    class="dropdown-item text-dark">{{ $c->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('writerPage') }}">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('aboutUsPage') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="{{ route('popularPage') }}">Popular</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
