<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = "My Portfolio - Home";

        $featuredWorks = [
            [
                'image' => asset('assets/images/project1.png'),
                'title' => 'Blog Post Api',
                'shortDescription' => 'Built a secure Laravel blog API with authentication, repositories, events, and scheduled email alerts.'
            ],
            [
                'image' => asset('assets/images/project1.png'),
                'title' => 'Blog Post Api',
                'shortDescription' => 'Built a secure Laravel blog API with authentication, repositories, events, and scheduled email alerts.'
            ],
            [
                'image' => asset('assets/images/project1.png'),
                'title' => 'Blog Post Api',
                'shortDescription' => 'Built a secure Laravel blog API with authentication, repositories, events, and scheduled email alerts.'
            ],
        ];
        return view('home', compact('title', 'featuredWorks'));
    }
}
