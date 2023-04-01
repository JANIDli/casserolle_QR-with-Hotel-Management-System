<?php

namespace App\Http\Controllers;
use App\Models\Food;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

        $food = Food::create($data);
        $qr_name = "".str_replace(' ', '', $food->name)."_".$food->id."";

        QrCode::format('png')->size(200)->generate(''.$food->id.'',"".public_path('qrs')."/".$qr_name.".png");
        Food::where('id',$food->id)->update(['qr' => $qr_name]);

		return redirect()->back();
    }

	public function get_foods($menu_id){
		return Food::where('menu_id',$menu_id)->get();
	}

	public function view_food($id){
		return view('food.index',["food" => Food::find($id)]);
	}
}
