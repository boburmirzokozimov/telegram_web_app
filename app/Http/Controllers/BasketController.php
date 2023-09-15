<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBasketRequest;
use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class BasketController extends Controller
{
    public function index(Request $request)
    {
        dd(Auth::user());
        return Inertia::render('Basket/Index')->with([
//            'basket' => Basket::query()->where('client_id', $request->client_id)->get(),
        ]);
    }

    public function store(CreateBasketRequest $request)
    {
        Log::info($request->validated());
        Basket::query()
            ->create($request->validated());

        return back();
    }
}
