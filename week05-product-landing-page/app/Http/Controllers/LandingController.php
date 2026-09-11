<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    /**
     * Display the Overnight Cafe landing page.
     */
    public function index()
    {
        return view('pages.home');
    }
}
