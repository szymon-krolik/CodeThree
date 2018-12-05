<?php
/**
 * Created by PhpStorm.
 * User: szymoooneek
 * Date: 05.12.2018
 * Time: 21:45
 */
?>


@include("../partials/logNav")


 <table class="table">
     <thead>
     <tr>
         <th scope="col">Nr</th>
         <th scope="col">Przedmiot</th>
         <th scope="col">Ilosc</th>
         <th scope="col">Cena</th>
         <th scope="col">Data</th>
     </tr>
     </thead>
     <tbody>
     @foreach($orders as $order)
     <tr>
         <th scope="row">{{ $order->id }}</th>
         <td>{{$order ->name}}</td>
         <td>{{$order ->qty}}</td>
         <td>{{ $order -> price }}</td>
         <td>{{ $order -> created}}</td>
     </tr>
     @endforeach

     </tbody>
 </table>

@include('../partials/footer')