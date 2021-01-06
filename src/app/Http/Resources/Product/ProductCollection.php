<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//         return parent::toArray($request);
        return [
            'data' => $this->collection->transform(
                function ($product) {
                    return[
                        'id' => $product->id,
                        'name' => $product->name,
                        'description' => $product->description,
                        'price' => $product->price,
                        'rating' => $product->rating,
                        'quantity' => $product->quantity,
                        'category' => $product->category,
                        'tags' => $product->tags,
                        'link' => route('products.show' , [$product->id]),
                    ];
                }
            ),
        ];
    }
}
