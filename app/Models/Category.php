<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const ACTIVE = 1;
    const DEACTIVE = 0;

    protected $fillable = ['name','status'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
