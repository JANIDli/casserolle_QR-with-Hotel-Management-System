<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Redirect;

class ShowController extends Controller
{
    public function show()
    {
        $data=Contact::all();
        return view('Contact_Admin.contact',compact('data'));
    }

     public function delete($id)
    {
        $data=Contact::find($id);
        $data->delete();

        return redirect('/messege');

    }
    
}
