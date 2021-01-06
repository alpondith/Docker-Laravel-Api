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
//         return parent::toArray($request);
        return[
             'id' => $this->id,
             'name' => $this->name,
             'description' => $this->description,
             'price' => $this->price,
             'rating' => $this->rating,
             'quantity' => $this->quantity,
             'category' => $this->category,
             'tags' => $this->tags,
             'link' => route('products.show' , [$this->id]),
        ];
    }
}
