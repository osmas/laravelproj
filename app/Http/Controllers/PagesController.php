<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        return view('Welcome');
    }

    public function about()
    {
            $fruits = ['grape', 'lemon', 'pear'];
            return  view('about', compact('fruits'));

    }

    public function contact()
    {
        return 'Contact Us';
    }
}
