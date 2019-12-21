<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\Resource;

class ProductCollection extends Resource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'name'=> $this->name,
            'category_id'=> $this->category_id,
            'regular_price'=> $this->regular_price,
            'selling_price'=> $this->selling_price,
            'photo'=> $this->photo,
            'stock'=> $this->stock == 0 ? 'Out of stock' : $this->stock,
            'discount'=> $this->discount,
            'total_price' => round(((1-($this->discount/100)) * $this->selling_price),2),
            'description'=> $this->description,
            'status'=> $this->status,
            'created_at'=> $this->created_at,
            'href' => [
                'link' => route('products.show',$this->id)
            ]
        ];
    }
}
