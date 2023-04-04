<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperController extends Controller
{
    public function show() 
    {
        return view('helper.index');
    }
}
