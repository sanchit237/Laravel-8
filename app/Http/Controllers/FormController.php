<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class FormController extends Controller
{
    function form(Request $req){

        //form validation
        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        // $data = $req->input('username'); //capture input
        // $path = $req->file('upload')->store('img'); // file upload
        // $req->session()->put('user', $data); //add session
        // return redirect('about'); // redirect

        //save data using eloquent model
        $custom = new customer;
        $custom->FirstName = $req->username;
        $custom->LastName = $req->password;
        $custom->save();
        return redirect('about');
    }
}
