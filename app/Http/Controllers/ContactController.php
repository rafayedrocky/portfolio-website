<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $title = "My Portfolio - Contact";
        return view('contact', compact('title'));
    }
}
