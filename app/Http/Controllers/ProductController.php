<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /*** Fungsi untuk membaca list product untuk page Product ***/
    public function productPage(Request $request)
    {
        $products = Product::where('show_status', 1)
        ->orderBy('name')
        ->get();

        $perPage = 9;
        $page = $request->get('page', 1);
        $offset = ($page - 1) * $perPage;
        $productsOnPage = $products->slice($offset, $perPage);

        return view('homepage.display-product', [
            'products' => $productsOnPage,
            'totalProducts' => $products->count(),
            'currentPage' => $page,
            'perPage' => $perPage,
        ]);
    }

    /*** Fungsi untuk membaca list detail product di Page Product  // GET /products/{product} ***/
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('homepage.show-product', compact('product'));
    }
}
