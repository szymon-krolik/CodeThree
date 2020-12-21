@include('../partials/header')
<style>
.walic{
  margin-right: 100px;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('index') }}">Sklep</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <span class="navbar-item">
      <ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown walic">
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
    </span>
  </div>
</nav>
