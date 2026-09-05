<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Render the developer portfolio home page.
     */
    public function index(): View
    {
        return view('portfolio');
    }
}