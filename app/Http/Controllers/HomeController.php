<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $title = 'Головна';
        return view('home.index', [
            'title' => $title
        ]);
    }
}
