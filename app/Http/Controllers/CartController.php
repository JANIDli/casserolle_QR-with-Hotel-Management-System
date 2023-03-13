<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CartItem;
use App\Models\Food;
use App\Models\Order;
use App\Models\Flight;

use Illuminate\Support\Facades\Auth;
use Spatie\LaravelIgnition\Facades\Flare;

class CartController extends Controller
{
    public function store($item_id){
        CartItem::create (["user_id" => Auth::id(),"product_id" => $item_id,"product_name" => "null"]);
        return redirect('/menu');
    }

    public function view(Request $request){
        $cartItemsIds  = CartItem::where('user_id',Auth::id())->get();
        $items = [];
        $items_ids = [];
        foreach($cartItemsIds as $item){
            $food = Food::find($item->product_id);
            array_push($items,$food);
            array_push($items_ids,$food->id);
        }
        return view('Cart.cart',["items" => $items, "items_ids" => json_encode($items_ids)]);
    }

    public function cash_order(Request $request){ 
        
           // Add oreder tabele for
           $cartItemsIds  = Order::where('user_id',Auth::id())->get();
           $items = [];
       
           
           Flight::create($request->all());



        // // Flight::create($request->all());

        $user=Auth::user();
        $userid=$user->id;


        $data= CartItem::where('user_id','=',$userid)->get();

            foreach($data as $data)
                {
                    $order = new order;
                    $order ->user_id =$data->user_id;
                    $order ->product_id =$data->product_id;
                    $order ->save();

                    

                }
                //dd($data);

                return redirect()->back();


    }

    public function savi(Request $request){

      
    }
}
