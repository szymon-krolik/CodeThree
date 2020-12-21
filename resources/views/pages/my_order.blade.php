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
 @foreach($orders as $order)
  <div id="accordion">
   <div class="card">
     <div class="card-header" id="heading{{$order->created}}">
       <h5 class="mb-0">
         <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$order->id}}" aria-expanded="true" aria-controls="{{$order->id}}">
           {{$order -> created}}
         </button>
       </h5>
     </div>

     <div id="collapse{{ $order->id}}" class="collapse" aria-labelledby="heading{{$order->created}}" data-parent="#accordion">
       <div class="card-body">
             Produkt : {{ $order -> name }}
             Ilość: {{$order ->qty}}
             Cena: {{$order -> price}}
       </div>
     </div>
   </div>
   @endforeach
@include('../partials/footer')
