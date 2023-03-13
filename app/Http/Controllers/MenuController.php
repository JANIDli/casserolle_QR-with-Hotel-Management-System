<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {

        return view('menu.index',["menus" => Menu::all()]);
    }
    public function store(Request $request){
		$fileName = auth()->id() . '_' . time() . '.'. $request->file->extension();
        $request->file('file')->move(public_path('menus'),$fileName);

		$data = [
            "name" => $request->name,
            "image" => $fileName
        ];

        Menu::create($data);

		return redirect()->back();
    }

}