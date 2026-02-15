<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\becomeSeller;
use App\Models\category;
use Validator;
use Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Auth;

class BecomeSellerController extends Controller
{
    
     public function ActiveSellers($id){
         if(Auth::check()){ 
           if(auth()->user()->role=='admin'){
         $Sellers =becomeSeller::find($id);
         $data = compact('Sellers');
        return view('admin/ActiveSellers')->with($data);
           }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
    }
    
    public function ActiveSellerscreate(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:55',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'phone' => 'required'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors()]);
        }
        
         
        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
            'seller_id' => $request->seller_id
        ]);

        

        return redirect('admin/seller')->with('success', "Account successfully registered.");
    
    }
       public function show()
    {
         if(Auth::check()){ 
           if(auth()->user()->role=='admin'){
        $category = category::all();
        $becomeSeller = becomeSeller::all();
       return view('admin/seller',['becomeSeller'=>$becomeSeller,'category'=>$category]);
    }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
    }
    
    
    
   public function create(Request $request){
         $request->validate(
            
            [
                'Mobile'=>'required',
                'Company'=>'required',
                'Contact'=>'required',
                'Email'=>'required',
                'Additional'=>'required'
                
                
                ]
            );
       $category=$request->category;
       
       $becomeSeller = new becomeSeller;
       $becomeSeller->Manufacturer = $request->Manufacturer;
       $becomeSeller->Authorised = $request->Authorised;
       $becomeSeller->Distributor = $request->Distributor;
       $becomeSeller->Dealer = $request->Dealer;
       $becomeSeller->category = json_encode($category);
       $becomeSeller->Mobile = $request->Mobile;
       $becomeSeller->Company = $request->Company;
       $becomeSeller->Contact = $request->Contact;
       $becomeSeller->Email = $request->Email;
       $becomeSeller->Additional = $request->Additional;
       $becomeSeller->save();
        return redirect('/')->with('success', 'Your Query Send Successfully Our team will Contact You soon!');
   }
   
   
   public function createseller(Request $request){
       $category=$request->category;
       
       $becomeSeller = new becomeSeller;
       $becomeSeller->Manufacturer = $request->Manufacturer;
       $becomeSeller->Authorised = $request->Authorised;
       $becomeSeller->Distributor = $request->Distributor;
       $becomeSeller->Dealer = $request->Dealer;
       $becomeSeller->category = json_encode($category);
       $becomeSeller->Mobile = $request->Mobile;
       $becomeSeller->Company = $request->Company;
       $becomeSeller->Contact = $request->Contact;
       $becomeSeller->Email = $request->Email;
       $becomeSeller->Additional = $request->Additional;
       $becomeSeller->save();
        return redirect('admin/seller');;
   }
   
   
     public function destroy($id)
    {
        becomeSeller::destroy($id);
         return redirect('/admin/seller');
    }
}
