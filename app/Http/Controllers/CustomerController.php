<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;


class CustomerController extends Controller
{
public function show()
{
    $data=User::all();
    return view('Customer.customer',compact('data'));
}
        // public function delete($id)
        // {
        //     $data=User::find($id);
        //     $data->delete();

        //     return redirect('Customer.customer');

        // }

        
        
        
}
