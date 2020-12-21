<?php
 use Illuminate\Support\Facades\Auth;
 ?>
@if (Auth::check())
@include('../partials.logNav')
@else
@include('../partials.navbar')
@endif

@include('../partials/header')




<div class="main-container">


</div>
@yield('content')
@include('../partials.footer')
