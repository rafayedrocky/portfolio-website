<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $title = "My Portfolio - Portfolio";
        return view('portfolio', compact('title'));
    }
}
