<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Validator;
use Hash;
use Auth;

class usercontrooller extends Controller
{
   
    
    
    
    
    public function index(){
        if(Auth::check()){
    return view('/pages/account');
        }
        else{
           return view('login'); 
        }
    }
    public function addresses(){
        if(Auth::check()){
    return view('/pages/addresses');
        }
        else{
           return view('login'); 
        }
    }
    
    // track
    public function update(Request $request){
          $contact = user::find(auth()->user()->id);
          $contact->name =$request->name;
        $contact->phone = $request['phone'];
        $contact->email = $request['email'];
        // $contact->country = $request['country'];
        // $contact->age = $request['age'];
        // $contact->password = Hash::make($request->password);
        $contact->save();
        return redirect('/')->with('success', 'profile Update Successful');
    }
    
    
    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'password' => 'required|min:6',
            // 'name' => 'required|max:255',
            // 'email' => 'required|email',
        ]);
        // echo "<pre>";
        // print_r($request->all());
        
        $contact = new user;
        $contact->name = $request['name'];
        $contact->phone = $request['phone'];
        $contact->email = $request['email'];
        // $contact->country = $request['country'];
        // $contact->age = $request['age'];
        $contact->password = Hash::make($request->password);
        $contact->save();
        return redirect('/');
    }
    
     public function login(Request $request)
    {
        $data = $request->all();

        $request->validate([
            // 'name' => 'required|max:255',
            'email' => 'required|email',
            // 'phone' => 'required|numeric',
            'password' => 'required|min:6',
            // 'name' => 'required|max:255',
            // 'email' => 'required|email',
        ]);
        // $password = Hash::make('secret');
        
        if (Auth::attempt($data)) {
        // User not found, show 404 or whatever you want to do
        // example:
        return View('/');
    } else {
          return View('/login');
{
    // The passwords match...
}
    }
      

 
    }
}
