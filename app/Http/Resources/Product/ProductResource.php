<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
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
            'stock'=> $this->stock,
            'discount'=> $this->discount,
            'description'=> $this->description,
            'status'=> $this->status,
            'created_at'=> $this->created_at
        ];
    }
}
