<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function display($name){
        return view("demo", ["user"=>$name]);
    }
}
