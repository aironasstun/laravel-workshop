<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;

class PortfolioController extends Controller
{
    public function show(Portfolio $portfolio)
    {
        return view('portfolio', compact('portfolio'));
    }
}
