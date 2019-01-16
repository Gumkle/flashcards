<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function welcome()
    {
        return view('welcome.blade.php');
    }
}
