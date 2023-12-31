<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['getAllProduct']]);
    }

    public function getAllProducts()
    {
        $products = Product::select(['id', 'kategori', 'nama'])->get();
        if (count($products) != 0) {
            return response()->json([
                'response' => [
                    'products' => $products,

                ],
                'metadata' => [
                    'message' => 'OK',
                    'code' => 200
                ]
            ]);
        } else {
            return response()->json([
                'response' => ['message' => 'belum ada data product'],
                'metadata' => [
                    'message' => 'OK',
                    'code' => 200
                ]
            ]);
        }
    }

    public function getDetailProduct($id)
    {
        $product = Product::where('id', $id)->select(['id', 'kategori', 'nama'])->get();
        if (count($product) != 0) {
            return response()->json([
                'response' => [
                    'product' => $product,

                ],
                'metadata' => [
                    'message' => 'OK',
                    'code' => 200
                ]
            ]);
        } else {
            return response()->json([
                'response' => ['message' => 'product tidak ditemukan'],
                'metadata' => [
                    'message' => 'OK',
                    'code' => 200
                ]
            ]);
        }
    }
}
