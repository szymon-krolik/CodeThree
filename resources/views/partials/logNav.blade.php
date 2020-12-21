<?php
/**
 * Created by PhpStorm.
 * User: szymoooneek
 * Date: 29.11.2018
 * Time: 17:11
 */?>
@include('partials.header')
<style>
.cos{
  margin-right: 60px;
}
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{{ route('home') }}">Sklep</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <span class="navbar-item">
      <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="{{ route('show_cart') }}"><i class="fas fa-shopping-cart"></i> <span class="sr-only">(current)</span></a>
          </li>

<li class="nav-item dropdown cos">
  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
      {{ Auth::user()->name }} <span class="caret"></span>
  </a>

  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
      <a class="dropdown-item cos" href="{{ route('logout') }}"
         onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
      </a>

      <a class="dropdown-item" href="my-profile">
          Twoje Dane
      </a>
      <a class="dropdown-item" href="my-orders">
          Twoje zakupy
      </a>

      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
  </div>
</li>
  </ul>
    </span>
  </div>
</nav>
