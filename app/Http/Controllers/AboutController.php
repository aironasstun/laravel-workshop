<?php

namespace App\Http\Controllers;

use App\Models\Technology;
use App\Models\Portfolio;

class AboutController extends Controller
{
    public function experience()
    {
        $technologies = Technology::all();
        $portfolios = Portfolio::when(request('technology_id'), function($query) {
                $query->where('technology_id', request('technology_id'));
            })
            ->latest()
            ->get();

        return view('about',
            compact('technologies', 'portfolios'));
    }
}
