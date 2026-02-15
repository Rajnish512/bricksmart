<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pricecheck;

class PricecheckController extends Controller
{
    //
    // json_encode
    public function addproduct(Request $request)
    {
        $request->validate([
            'products' => 'required',
         ]);
     $products = $request['products'];
     $quantity = $request['quantity'];
     $city = $request['city'];
     $data = ['product' => $products , 'quantity' => $quantity];
     $products = json_encode($products);
     $quantity = json_encode($quantity);
     $contact = new pricecheck;
     $contact->products = $products;
     $contact->quantity = $quantity;
     $contact->city = $city;
     $contact->save();
     $id =$contact->id;
     $data = compact('contact');
        return redirect("pages/details/$id");
        // return response()->json($data);
     
    }
    public function details($id)
    {
        $data = compact('id');
     return view('/pages/details')->with($data);   
    }
    
    // update
    public function update(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'phone' => 'required',
            'email' => 'required',
         ]);
      $id = $request['id'];
      $fname = $request['fname'];
      $lname = $request['lname'];
      $phone = $request['phone'];
      $email = $request['email'];
     pricecheck::where('id',$id)->update(['fname'=>$fname,'lname'=>$lname,'phone'=>$phone,'email'=>$email]); 
     return redirect('/')->with('success', 'Your Query Send Successfully Our team will Contact You soon!');
    }
    public function show(){
     $pricecheck = pricecheck:: all();
     $data = compact('pricecheck');
        return view('admin/pricecheck')->with($data);
    }
}
