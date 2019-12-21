<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['user_id','order_info','total_price'];

    /*protected $casts = [
        'order_info'
    ];*/
}
