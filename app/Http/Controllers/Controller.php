<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\View\View;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * Show the landing page.
     */
    public function index(Request $request): View {
        return view('about');
    }

    /**
     * Show the projects page.
     */
    public function projects(Request $request): View {
        return view('projects');
    }
}
