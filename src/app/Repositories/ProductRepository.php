<?php

namespace App\Repositories;
use App\Models\Product;

class ProductRepository {

    public function all()
    {
        return Product::all();
    }

    public function allWithPagination()
    {
        return Product::with('tags')->paginate(10);
    }

    public function createProduct($product){

        $createdProduct = Product::create($product);
        return $createdProduct;
    }

    public function updateProduct($elements , $product){
        $status = $product->update($elements);
        return $product;
    }

}
