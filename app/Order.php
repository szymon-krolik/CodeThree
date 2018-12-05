<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id', 'product_id', 'quantity','price'
    ];
        protected $casts =[
            'options' => 'array'
        ];
    //protected $fillable = ['user_id','product_id','quantity','price'];
}


Order::all();
