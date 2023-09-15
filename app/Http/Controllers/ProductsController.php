<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;

class ProductsController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Products/Index')->with([
            'products' => Product::paginate(10)
        ]);
    }
}
