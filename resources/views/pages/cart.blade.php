<?php
/**
 * Created by PhpStorm.
 * User: szymoooneek
 * Date: 29.11.2018
 * Time: 17:49
 */
?>
@include('../partials/logNav')



<table class="table">
    <?php
        $i = 0;
        $total = 0;
    ?>

    <tbody>
    <tr>
        <th>ID produktu</th>
        <th>Nazwa</th>
        <th>Ilość</th>
        <th>Cena jednostkowa</th>
        <th>Cena</th>
        <th> Action </th>

    </tr>
    {!! Form::open(['route' => 'order.store']) !!}
    @foreach($cartProducts as $product)
    <tr>

        <th scope="row">  {{$product -> id}}</th>
        <td>{{$product -> name}}</td>
        <td>{{$product -> qty}}</td>
        <td>{{$product -> price}}</td>
        <td><a href="delete/{{$product->rowId}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">usun</a></td>


    <?php
    $subTotal = $product->qty*$product->price;
    ?>

        <td>{{$subTotal}} zł</td>
    </tr>

        <?php
            $total = $total+$subTotal;
        ?>
    @endforeach
    <tr>
        <th scope="row"></th>
        <td></td>
        <td></td>
        <td>Cena całkowita: </td>
       <!-- <td>{{Form::text('Total',$total,['class' => 'form-control', 'placeholder' => 'Total' ])}} zł</td> -->
        <td>{{$total}} zł</td>

    </tr>
    {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}

    </tbody>
</table>

@include('../partials/footer');
