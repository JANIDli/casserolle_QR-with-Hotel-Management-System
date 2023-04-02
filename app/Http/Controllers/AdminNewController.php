<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Order;


use Illuminate\Http\Request;

class AdminNewController extends Controller
{
    public function show()
{
    $users = User::count();
    $orders = Order::count();

    $takeawayOrdersCount = Order::where('takeaway', 1)->count();
    $DineInOrdersCount = Order::where('dinein', 1)->count();


    return view('Admin_P.Admin_P', compact('users', 'orders', 'takeawayOrdersCount','DineInOrdersCount'));
}

}
