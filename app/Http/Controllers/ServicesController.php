<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $title = "My Portfolio - Services";
        return view('services', compact('title'));
    }
}
