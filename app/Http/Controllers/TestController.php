<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    public function save(Request $request){
        //var_dump($request->all());

        Test::create($request->all());
    }
    
}
