<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class Registrationcontroller extends Controller
{
    public function index(){
        $url = url('/register');
        $title = "Registration";
        $data = compact('url','title');
        return view ('form')->with($data);
    }
    public function store(Request $request){
 
    $customer = new Customer;
    $customer->name = $request['name'];
    $customer->email = $request['email'];
    // $customer->gender = $request['gender'];
    $customer->address = $request['address'];
    $customer->password = md5($request['password']);
    $customer->save();

    return redirect('/register/view');

    }
public function view(){
    $customers = Customer::all();
    $data = compact('customers');
    return view('customer-view')->with($data);
} 

public function delete($id){
$customer = Customer::find($id);

if(!is_null($customer)){
    $customer->delete();
}
return redirect('register/view');
}

public function edit($id){
    $customer = Customer::find($id);

    if(is_null($customer)){
        return redirect('form');
    }
    else{
        $title = "Updations";
        $url = url('/customer/update')."/". $id;
        $data = compact('customer' , 'url','title');
        return view('form')->with($data);
    }
}
public function update($id,Request $request){
    $customer = Customer::find($id);
    $customer->name = $request['name'];
    $customer->email = $request['email'];
    $customer->address = $request['address'];
    $customer->password = md5($request['password']);
    $customer->save();
return redirect('customer-view');
}
    // public function register(Request $request){
    //     $request->validate([
    //         'name'=>'required',
    //         'email'=>'required|email',
    //         'password'=>'required'
    //     ]);
    //     echo "<pre>";
        
    //     print_r($request->all());
    // }
}
