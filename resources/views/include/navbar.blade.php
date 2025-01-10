<style>
    .header-nightsky .navbar {
        background-color: #8e24aa; 
        border: none;
        box-shadow: none;
    }

    .navbar-text {
        font-size: 1.5rem; 
    }

    .navbar-nav .nav-link,
    .navbar-nav .dropdown-toggle {
        color: white !important;
        font-size: 1.2rem;
        padding-left: 20px; 
        padding-right: 20px; 
        background-color: transparent; 
        border: none; 
        transition: background-color 0.3s ease;
    }

    .navbar-nav .nav-link:hover,
    .navbar-nav .dropdown-toggle:hover {
        background-color: #6a1b9a !important;
        color: white;
    }

    .navbar-nav .nav-item {
        border: none !important;
    }

    .navbar-nav .nav-item .btn {
        font-size: 1.2rem;
        padding: 10px 20px;
        border: none;
        background-color: transparent; 
        color: white;
    }

    .navbar-nav .nav-item .btn:hover {
        background-color: #6a1b9a !important;
        color: white;
    }

    .navbar-nav .nav-item .btn i {
        font-size: 1.5rem; 
        margin-right: 8px; 
    }

    .navbar-nav .dropdown-menu {
        padding: 10px 20px;
    }

    .hero {
        background-color: #6a1b9a;
        color: white;
        padding: 100px 0;
    }

    .hero h1 {
        font-size: 3rem;
        font-weight: bold;
    }

    .hero p {
        font-size: 1.2rem;
    }

    .hero .btn {
        font-size: 1rem;
        margin-right: 10px;
    }
</style>

<div class="header-nightsky">
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <span class="navbar-text text-light me-4 fs-5">
                Olá, <strong>{{ $user->name }}</strong>
            </span>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('post.create') }}">
                            Novo Post
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Recursos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Página 1</a></li>
                            <li><a class="dropdown-item" href="#">Página 2</a></li>
                            <li><a class="dropdown-item" href="#">Página 3</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Demos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Página 1</a></li>
                            <li><a class="dropdown-item" href="#">Página 2</a></li>
                            <li><a class="dropdown-item" href="#">Página 3</a></li>
                        </ul>
                    </li>

                    <li class="nav-item d-flex align-items-center">
                        <a href="{{ route('logout') }}" class="btn">
                            <i class="fas fa-sign-out-alt"></i> Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
