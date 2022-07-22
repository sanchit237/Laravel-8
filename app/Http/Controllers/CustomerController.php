<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function index(){
        // $result = DB::select('select * from customers');
        // return $result;
        // foreach (customer::all() as $customer) {
        //     echo $customer->City;
        // }
        $result = customer::all(); //for getting entire data from table
        // $result = customer::simplePaginate(1); // For pagination
        // $result = customer::cursorPaginate(1); // For pagination
        // $result = customer::paginate(1); // For pagination
        return view('customerview',['cdata' => $result]);
    }

    public function delete($id){
        $result = customer::find($id);
        $result->delete();
        return redirect('customer');
    }

    public function edit($id){
        $result = customer::find($id);
        return view('customerupdate',['edata'=> $result]);
    }

    public function update(Request $req){
        $result = customer::find($req->id);
        $result->FirstName = $req->Fname;
        $result->LastName = $req->Lname;
        $result->Address = $req->address;
        $result->City = $req->city;
        $result->save();
        return redirect('customer');
    }

    public function operations(){
        // return DB::table('customers')->get();
        return DB::table('customers')->count();
    }
}
