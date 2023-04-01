<?php

namespace App\Http\Controllers;
use App\Models\Food;
use App\Models\User;

use Illuminate\Http\Request;


class AdminNewController extends Controller
{
    public function show(){
        $users = User::count();

        return view('admin.index',compact('users'));
    } 

    public function all(Request $request){
        //$qr = QrCode::generate('yoo');
        return view('admin.all_products', ["foods" => Food::all()]);
    }
}
