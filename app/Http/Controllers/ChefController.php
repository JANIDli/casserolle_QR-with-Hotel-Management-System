<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\FinishOrder;
class ChefController extends Controller
{
    
    
    public function index()
    {
        $orders = Order::all();
        return view('chef.chef', compact('orders'));
    }
    public function accept(Order $order)
    {
        $order->status = 'accepted';
        $order->save();

        return redirect()->back();
    }

    public function complete(Order $order)
    {
        $order->status = 'completed';
        $order->save();


        $finishOrder = new FinishOrder;
        $finishOrder->id = $order->id;
        $finishOrder->user_id = $order->user_id;
        $finishOrder->cart_items = $order->cart_items;
        $finishOrder->table_number = $order->table_number;
        $finishOrder->comment = $order->comment;
        $finishOrder->status = $order->status;
        $finishOrder->total = $order->total;





    // You can add more details if needed
    $finishOrder->save();

    return redirect()->back();

    }

    



    



}
