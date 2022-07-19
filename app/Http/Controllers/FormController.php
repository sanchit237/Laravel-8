<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function form(Request $req){

        $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $data = $req->input('username');
        $path = $req->file('upload')->store('img');
        $req->session()->put('user', $data);
        return redirect('about');
    }
}
