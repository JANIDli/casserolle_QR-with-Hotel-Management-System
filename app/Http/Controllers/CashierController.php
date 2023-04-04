<?php

namespace App\Http\Controllers;

use App\Models\FinishOrder;
use App\Models\Order;

use Illuminate\Http\Request;

class CashierController extends Controller
{
    public function index(){
        $finishOrders = FinishOrder::all();
        return view('cashier.index', compact('finishOrders'));    }

        public function delete($id)
        {
            $finishOrders = FinishOrder::find($id);
            $finishOrders->delete();
            
            return redirect('/cashier');
        }

        public function showOrderTotal()
            {
                $totalAmount = Order::sum('total');
                return view('cashier.index', ['totalAmount' => $totalAmount]);
            }

}
