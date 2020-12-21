@extends('./layouts/master')
@section('content')


<style>
body{
    background-color: #232323;
    color: white;
}
.cena{
  text-align: right;
}
.ogl{
  margin-top: 50px;
}
h3{
  margin-top: 20px;
}

.spacer{
padding-bottom: 400px;
}
</style>
<div class="container-fluid ogl">
<div class="row">
<div class="col-12 col-xl-6">
<img src="{{$product -> pic }}"> <br>
</div>
<div class="col-lg-6 col-md-12 info">
<h3>{{ $product -> name}} </h3>
<h3>Opis: </h3>{{$product -> description}} <br>
<h3>Cena: </h3><p class="cena">{{ $product -> price}} zł<p><br>

{!! Form::open(['url' => 'cart-add','method' => 'POST']) !!}
    <input type="hidden" name="productId" value="{{$product -> id}}">
    <input type="hidden" name="qty" value="1">
    <button type="submit" class="btn btn-success btn-block">Dodaj do koszyka</button>
{!! Form::close() !!}

</div>
</div>
</div>
<div class="spacer"></div>
	@endsection
