<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::where('show_status', 1)
            ->orderBy('name')
            ->get();

        $perPage = 8;
        $page = $request->get('page', 1);
        $offset = ($page - 1) * $perPage;
        $productsOnPage = $products->slice($offset, $perPage);

        return view('page.product', [
            'products' => $productsOnPage,
            'totalProducts' => $products->count(),
            'currentPage' => $page,
            'perPage' => $perPage,
        ]);
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('inside-page.show-product', compact('product'));
    }
}
