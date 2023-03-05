<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    function debitOrder(){
        return view('debit.order');
    }
    function orderreview(){
        return view('debit.orderreview');
    }
    function payment(){
        return view('debit.payment');
    }
    function masterOrder(){
        return view('master.order');
    }
    function masterorderReview(Request $request){

        $request->validate([
            'firstname' => 'required',
            'surname' => 'required',
            'othername' => 'required',
            'street' => 'required',
            'zip' => 'required',
            'email' => 'required|email|unique:ordertbl',
            'phone' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);
        $save_query = DB::table('ordertbl')->insert([
            'firstname' => $request->input('firstname'),
            'surname' => $request->input('surname'),
            'othername' => $request->input('othername'),
            'street' => $request->input('street'),
            'zip' => $request->input('zip'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'state' => $request->input('state')
        ]);
        if($save_query){
            return view('master.orderreview');
        }
        
    }
    function masterpayment(){
        return view('master.payment');
    }
    function order_post(Request $request){

        $request->validate([
            'firstname' => 'required',
            'surname' => 'required',
            'othername' => 'required',
            'street' => 'required',
            'zip' => 'required',
            'email' => 'required|email|unique:ordertbl',
            'phone' => 'required',
            'city' => 'required',
            'state' => 'required'
        ]);
        $save_query = DB::table('ordertbl')->insert([
            'firstname' => $request->input('firstname'),
            'surname' => $request->input('surname'),
            'othername' => $request->input('othername'),
            'street' => $request->input('street'),
            'zip' => $request->input('zip'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'state' => $request->input('state')
        ]);
        if($save_query){
            return redirect('orderReview');
        }
        

    }
    function ordercomplete(){
        return view('debit.ordercomplete');
    }
}
