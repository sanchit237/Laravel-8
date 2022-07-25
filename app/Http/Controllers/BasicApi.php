<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\customer;

class BasicApi extends Controller
{
    public function getData(){
        $data = array('name'=>'abc','age'=>20,'city'=>'mumbai');
        return $data;
    }
    public function getdbData(){
        return customer::all();
    }
}
