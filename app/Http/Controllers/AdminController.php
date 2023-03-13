<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(Request $request){
        if(Auth::user()->is_admin){
            return view('additeam.add',["menus" => Menu::all()]);
        }else{
            return redirect()->back();
        }
    }
}
