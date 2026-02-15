<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\category;
use App\Models\compare;
use Auth;
// use Illuminate\Support\Facades\Auth;

class cart_controller extends Controller
{
     public function index(){
    if(Auth::check()){     
    return view('/pages/cart');
    }
    else{
     return view('/login');   
    }
     }
    public function addtocart(Request $request){
        if(Auth::check()){
            $addtocart =$request['addtocart'];
           
        $currentuserid = auth()->user()->id;
        $count= cart:: where('p_id',"=","$addtocart")->where([['p_id','=',$addtocart],['user_id','=', $currentuserid]])->get();
        if(count($count) == 0){
           $ip_add = getenv("REMOTE_ADDR");
        
        $contact = new cart;
        $contact->p_id = $request['addtocart'];
        $contact->user_id = auth()->user()->id;
        $contact->ip_add = $ip_add;
        $contact->qty = $request['product_minimumorder'];
        $contact->selleruser_id = $request['selleruser_id'];
        $contact->save();
        // product_minimumorder
    //   return response()->json(['request' => $request]); 
       return response()->json(["status" =>"Your product has been added to cart!"]); 
        }
        else{
          return response()->json(["status" => "Product is already added into the cart Continue Shopping..!"]); 
        // $product_minimumorder=$request['product_minimumorder'];
        //   return response()->json($product_minimumorder);
        }
        }
        else{
        return response()->json(["redirect_url"=>url('login')]);
        }
    }
    public function addtocarts($addtocart){
        $count= compare::leftJoin('products', 'compares.p_id', '=', 'products.id')->leftJoin('brands', 'brands.id', '=', 'products.product_brand')->leftJoin('categories', 'categories.id', '=', 'products.product_category')->where('compares.user_id',"=",auth()->user()->id)
            ->paginate(1); 
            $b=count($count);
            return response()->json(['product' => $count , 'count' => $b]);
    }
    public function showcart(){
      $count= cart::leftJoin('products', 'carts.p_id', '=', 'products.id')->where('carts.user_id',"=",auth()->user()->id)
            ->get(); 
            $b=count($count);
            return response()->json(['product' => $count , 'count' => $b]);
            
    }
    // removecart
    public function removecart(Request $request){
        $removecart =$request['removecart'];
        $product=cart::where('c_id',$removecart)->delete();
    }
    public function removecart1($id){
        // $removecart =$request['removecart'];
        $product= cart::leftJoin('products', 'carts.p_id', '=', 'products.id')->where('carts.c_id',"=",$id)
            ->get();
        // $product =['product' => $product];
        foreach($product as $product){
          $qty = $product->qty;  
        }
        return response()->json($product);
        // $product->delete();
    }
    public function pluscart(Request $request){
        $removecart =$request['pluscart'];
        
        $product= cart::leftJoin('products', 'carts.p_id', '=', 'products.id')->where('carts.c_id',"=",$removecart)
            ->get();
        foreach($product as $product){
          $qty = $product->qty;
          $product_minimumorder = $product->product_minimumorder;
        }
        $qty =$qty+1;
        cart::where('c_id',$removecart)->update(['qty'=>$qty]);
        // $product->delete();
    }
    public function minuscart(Request $request){
        $removecart =$request['minuscart'];
        $product= cart::leftJoin('products', 'carts.p_id', '=', 'products.id')->where('carts.c_id',"=",$removecart)
            ->get();
        foreach($product as $product){
          $qty = $product->qty;
          $product_minimumorder = $product->product_minimumorder;
        }
        if($qty<=$product_minimumorder){
          $qty=$product_minimumorder;  
        }
        else{
         $qty =$qty-1;   
        }
        cart::where('c_id',$removecart)->update(['qty'=>$qty]);
        // $product->delete();
    }
    
    public function updatecart(Request $request){
        $removecart =$request['updatecart'];
        $removecartval =$request['updatecartval'];
        $product= cart::leftJoin('products', 'carts.p_id', '=', 'products.id')->where('carts.c_id',"=",$removecart)
            ->get();
        foreach($product as $product){
        //   $qty = $product->qty;
          $product_minimumorder = $product->product_minimumorder;
        }
        if($removecartval<=$product_minimumorder){
          $qty=$product_minimumorder;  
        }
        else{
         $qty =$removecartval;   
        }
        cart::where('c_id',$removecart)->update(['qty'=>$qty]);
        // $product->delete();
    }
    // public function update(Request $request){
    //     $removecart =$request['update'];
        
    //     cart::where('c_id',$removecart)->update(['qty'=>$qty]);
    //     // $product->delete();
    // }
    // quickfind
    
}
