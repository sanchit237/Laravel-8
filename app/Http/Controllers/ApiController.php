<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(){
        $response = Http::get('https://www.boredapi.com/api/activity');
        return view('apiview',['data'=> $response]);
    }
}
