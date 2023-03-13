<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function save(Request $request){
        //var_dump($request->all());

        Contact::create($request->all());
        return view('dashboard.index');
    }
}
