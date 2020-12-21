@include('../partials/logNav')

<div class="container-fluid">

  {!! Form::open(['action'=> ['userController@update',Auth::id(),'method' => 'POST']]) !!}
  <div class="form-group">
    {{ Form::label('name','name')}}
    {{ Form::text('name',$user -> name ,['class' => 'form-control', 'placeholder' => 'name' ]) }}
  </div>
  <div class="form-group">
    {{ Form::label('surname','surname')}}
    {{Form::text('surname',$user -> surname,['class' => 'form-control', 'placeholder' => 'surname' ])}}
  </div>
  <div class="form-group">
    {{ Form::label('email','email')}}
    {{Form::text('email',$user -> email,['class' => 'form-control', 'placeholder' => 'email' ])}}
  </div>

  <div class="form-group">
    {{ Form::label('city','city')}}
    {{Form::text('city',$user -> city,['class' => 'form-control', 'placeholder' => 'city' ])}}
  </div>
  <div class="form-group">
    {{ Form::label('street','street')}}
    {{Form::text('street',$user -> street,['class' => 'form-control', 'placeholder' => 'street' ])}}
  </div>
  <div class="form-group">
    {{ Form::label('houseNumber','houseNumber')}}
    {{Form::text('houseNumber',$user -> houseNumber,['class' => 'form-control', 'placeholder' => 'houseNumber' ])}}
  </div>
  <div class="form-group">
    {{ Form::label('postCode','postCode')}}
    {{Form::text('postCode',$user -> postCode,['class' => 'form-control', 'placeholder' => 'postCode' ])}}
  </div>
  {{Form::hidden('_method', 'PUT')}}
  {{Form::submit('Submit',['class' => 'btn btn-primary'])}}

  {!! Form::close()!!}
</div>
