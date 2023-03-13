<?php

namespace App\Http\Controllers;
use App\Models\Food;

use Illuminate\Http\Request;

class FoodController extends Controller
{
    public function store(Request $request){
		//var_dump($request->file);die();
		$fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();
        $request->file('file')->move(public_path('foods'),$fileName);

        $data = [
            "name" => $request->name,
			"menu_id" => $request->menu_id,
            "description" => $request->description,
            "price" => $request->price,
            "image" => $fileName
        ];
        Food::create($data);

		return redirect()->back();
    }

	public function get_foods($menu_id){
		return Food::where('menu_id',$menu_id)->get();
	}

	public function view_food($id){
		return view('food.index',["food" => Food::find($id)]);
	}
}
