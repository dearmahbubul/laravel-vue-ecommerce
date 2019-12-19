<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const ACTIVE = 1;
    const DEACTIVE = 0;
    protected $fillable = ['category_id','name','regular_price','selling_price','photo','stock','discount','description','status'];

    public function categories()
    {
        return $this->hasOne(Category::class);
    }
}
