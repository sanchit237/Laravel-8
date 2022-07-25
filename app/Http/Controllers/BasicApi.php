<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BasicApi extends Controller
{
    public function getData(){
        $data = array('name'=>'abc','age'=>20,'city'=>'mumbai');
        return $data;
    }
}
