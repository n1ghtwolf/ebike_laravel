<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService\ProductService;
use Illuminate\Support\Facades\Request;

class ProductController extends Controller
{
    protected ProductService $productService;

    public function __construct()
    {
//        $this->productService = new ProductService(Product::class);
//        $this->productService = $productService;
    }

//    public function index(string $id)
//    {
//        $product = $this->productService->index()->whereId($id);
//        return view('product', compact('product'));
//    }
//
//    // Остальные методы, такие как create() и show() остаются без изменений
//
//    public function store(Request $request)
//    {
//        $product = $this->productService->storeProduct($request);
//
//        return redirect()->route('products.index')->with('success', 'Product created successfully');
//    }
//
//    public function update(Request $request, Product $product)
//    {
//        $product = $this->productService->updateProduct($request, $product);
//
//        return redirect()->route('products.index')->with('success', 'Product updated successfully');
//    }
    public function show(Request $request, Product $product)
    {
        $product = $product;
        return view('product', ['products' => $product]);
//        return redirect()->route('products.index')->with('success', 'Product updated successfully');
    }

    // Метод destroy() остается без изменений
}

