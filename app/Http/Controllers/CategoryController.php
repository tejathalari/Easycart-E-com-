<?php

namespace App\Http\Controllers;

use App\Models\category;
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
            'Category_name' => Category::find($id)
        ]);
    }
}
