<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class BaseController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Hello');
    }
}
