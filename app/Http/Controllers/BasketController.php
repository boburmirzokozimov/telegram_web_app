<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $product = $request->validate([
            'product_id' => 'exists:products,id',
            'user_id' => 'int',
        ]);

        Basket::query()
            ->create($product);

        return back();
    }
}
