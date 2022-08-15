<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(Request $request)
    {
        $products = Product::with(['media'])->where('in_stock', true)->get();

        return response()->json(['products' => $products]);
    }

    public function get(Product $product)
    {
        $product->load('media');
        $product->iconClass = 'fa fa-star p-2';
        return view('product-overview', compact('product'));
    }
}
