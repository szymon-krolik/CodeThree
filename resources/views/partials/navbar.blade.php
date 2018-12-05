@include('../partials/header')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Sklep</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <i class="fas fa-user"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="{{ route('login') }}">Zaloguj sie</a>
                    <a class="dropdown-item" href="{{ route('register') }}">Zarejestruj sie</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Ustawienia</a>
                </div>
            </li>
        </ul>

    </div>
</nav>
