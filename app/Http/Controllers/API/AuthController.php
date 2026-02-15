<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\category;
use App\Models\product;
use App\Models\cart;
use App\Models\becomeSeller;
use Illuminate\Http\Request;
use Validator;
use Hash;

class AuthController extends Controller
{
    //
     public function register(Request $request)
    {
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
            'password' => $request->password
        ]);

        $accessToken = $user->createToken('authToken')->accessToken;

        return response([ 'user' => $user, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors()]);
        }

        if (!auth()->attempt($data)) {
            return response(['message' => 'Login credentials are invaild']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['access_token' => $accessToken]);

    }
    
    public function userid(Request $request){
        $data = $request->all();
       $validator = Validator::make($data, [
            'id' => 'required'
        ]); 
        if($validator->fails()){
            return response(['error' => $validator->errors()]);
        }
        $id = $request->id;
      $user = User::where('id',"=","$id")->get(); 
            $b=count($user);
            return response()->json(['user' => $user]);
            
    }
    public function category(){
      $category = category::all(); 
            $b=count($category);
            return response()->json(['category' => $category , 'count' => $b]);
            
    }
    public function product(){
      $category = product::all(); 
            $b=count($category);
            return response()->json(['product' => $category , 'count' => $b]);
            
    }
    public function showcart(){
      $count= cart::leftJoin('products', 'carts.p_id', '=', 'products.id')->where('carts.user_id',"=",auth()->user()->id)
            ->get(); 
            $b=count($count);
            return response()->json(['product' => $count , 'count' => $b]);
            
    }
    public function createSeller(Request $request){
           $validator = Validator::make($request->all(), [
                'Mobile'=>'required',
                'Company'=>'required',
                'Contact'=>'required',
                'Email'=>'required',
                'Additional'=>'required'
        ]);

        if($validator->fails()){
            return response(['error' => $validator->errors()]);
        }
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
       return response()->json(['success' => 'Your Query Send Successfully Our team will Contact You soon!']);
       
   }
}
