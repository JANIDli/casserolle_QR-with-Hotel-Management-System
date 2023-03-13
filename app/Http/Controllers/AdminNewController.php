<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class AdminNewController extends Controller
{
    public function show(){
        $users = User::count();

        return view('Admin_P.Admin_P',compact('users'));
    } 
}
