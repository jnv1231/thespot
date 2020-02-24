<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = [
        'prod_name', 'prod_qty', 'prod_price'
    ];
}
