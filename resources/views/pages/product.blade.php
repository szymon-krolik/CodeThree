@extends('./layouts/master')
@section('content')
<div class="container-fluid">

<img src="{{$product -> pic }}"> <br>
Nazwa: {{ $product -> name}} <br>

Opis:{{$product -> description}} <br>
Cena: {{ $product -> price}} <br>

{!! Form::open(['url' => 'cart-add','method' => 'POST']) !!}
    <input type="hidden" name="productId" value="{{$product -> id}}">
    <input type="hidden" name="qty" value="1">
    <button type="submit" class="btn btn-success btn-block">Dodaj do koszyka</button>
{!! Form::close() !!}
	@endsection

