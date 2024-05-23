<?php

namespace App\Http\Controllers;

use App\Models\Category; // Ensure this import is correct
use App\Models\Product; // Ensure this import is correct
use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $id)
    {
        return Inertia::render('Category', [
            'Category_name' => Category::find($id),
            'Category_by_id' => Product::where('category', $id)->get()
        ]);
    }
}