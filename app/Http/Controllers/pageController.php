<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class pageController extends Controller
{
    public function landing() {
        return view('landing');
    }

    public function home() {
        return view('home');
    }
}
