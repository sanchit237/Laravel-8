<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class CustomerController extends Controller
{
    public function index(){
        // $result = DB::select('select * from customers');
        // return $result;
        // foreach (customer::all() as $customer) {
        //     echo $customer->City;
        // }
        // $result = customer::all(); //for getting entire data from table
        $result = customer::simplePaginate(1); // For pagination
        // $result = customer::cursorPaginate(1); // For pagination
        // $result = customer::paginate(1); // For pagination
        return view('customerview',['cdata' => $result]);
    }
}
