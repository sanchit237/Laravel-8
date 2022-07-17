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
        return $req->input();
    }
}
