<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $title = "My Portfolio - About";
        return view('about', compact('title'));
    }
}
