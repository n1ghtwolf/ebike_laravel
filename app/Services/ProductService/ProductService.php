<?php

namespace App\Services\ProductService;

use App\Models\Product;
use App\Services\BaseService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductService extends BaseService
{
    public function __construct(Product $productModel)
    {
        parent::__construct($productModel);
    }
//    public function store(Request $request)
//    {
//        $request->validate([
//            'name' => 'required',
//            'description' => 'required',
//            'price' => 'required|numeric',
//            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//        $product = new Product($request->all());
//
//        if ($request->hasFile('image')) {
//            $image = $request->file('image');
//            $imageName = time().'.'.$image->getClientOriginalExtension();
//            $destinationPath = public_path('/images');
//            $image->move($destinationPath, $imageName);
//            $product->image = $imageName;
//        }
//
//        $product->save();
//
//        return $product;
//    }

    public function updateProduct(Request $request, Product $product): Product
    {
//        $this->model->
        $request->validate([
            'name'        => 'required',
            'description' => 'required',
            'price'       => 'required|numeric',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $product->update($request->all());

        if ($request->hasFile('image')) {
            $image           = $request->file('image');
            $imageName       = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $imageName);
            $product->image = $imageName;
        }

        return $product;
    }
}
