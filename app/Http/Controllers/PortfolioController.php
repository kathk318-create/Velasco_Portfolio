<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    /**
     * Render the developer portfolio home page.
     */
    public function index(): View
    {
        return view('portfolio', [
            'projects' => config('projects'),
        ]);
    }

    /**
     * Download the resume PDF.
     */
    public function downloadResume(): Response
    {
        $path = public_path('resume/resume.pdf');

        return response()->download($path, 'resume.pdf');
    }
}