<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Models\Category; // Correct import statement for the Category model
use App\Models\Product; // Correct import statement for the Product model
use App\Models\Address;

class HandleInertiaRequests extends Middleware
{
    /**
     * The root template that is loaded on the first page visit.
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
     * Determine the current asset version.
     */
    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
        return array_merge(parent::share($request), [
            'auth' => [
                'user' => auth()->check() ? auth()->user() : null,
                'address' => auth()->check() ? Address::where('user_id', auth()->id())->first() : null,
            ],
            'categories' => Category::all(), // Ensure proper casing for model name
            'random_products' => Product::inRandomOrder()->limit(8)->get(),
        ]);
    }
}
