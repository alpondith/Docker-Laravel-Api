<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Repositories\ProductRepository;
use App\Models\Product;

use App\Http\Requests\Product\CreateProductApiRequest;
use App\Http\Requests\Product\UpdateProductApiRequest;

use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    private $productRepository;
    public function __construct(ProductRepository $productRepo){
        $this->productRepository = $productRepo;
    }


    public function index()
    {
        $products = $this->productRepository->allWithPagination();
        return new ProductCollection($products);
    }


    public function store(CreateProductApiRequest $request)
    {
        $productData = $request->all();
        $product = $this->productRepository->createProduct($productData);
        return new productResource( $product );
    }


    public function show(Product $product)
    {
        return new ProductResource($product);
    }


    public function update( UpdateProductApiRequest $request, Product $product)
    {
        $elements = $request->all();
        $product = $this->productRepository->updateProduct($elements , $product);
        return new ProductResource( $product );
    }


    public function destroy(Product $product)
    {
        $product->delete();
        return 'Successfully Deleted' ;
    }
}
