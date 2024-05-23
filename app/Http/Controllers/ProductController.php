<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display the specified product.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        // Find the product by ID
        $product = Product::findOrFail($id);
        
        // Render the Inertia view with the product data
        return Inertia::render('Product', ['product' => $product]);
    }
}