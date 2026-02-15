<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use App\Models\Order;
use Auth;

class OrderController extends Controller
{
    //
    public function show()
    {
        if(Auth::check()){ 
           if(auth()->user()->role=='admin'){
        $product = product::where('status', 0)->get();
         $Order = Order::leftJoin('products', 'orders.product_id', '=', 'products.id')->leftJoin('billings', 'orders.billing_id', '=', 'billings.id')->orderBy('o_id', 'DESC')->get();
         $brand = brand::all();
        
        $data = compact('product','Order','brand');
        return view('admin/order')->with($data);
           }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
    }
    public function order()
    {
         if(Auth::check()){ 
           if(auth()->user()->role=='seller'){
        $product = product::where('status', 0)->get();
         $Order = Order::leftJoin('products', 'orders.product_id', '=', 'products.id')->leftJoin('billings', 'orders.billing_id', '=', 'billings.id')->orderBy('o_id', 'DESC')->where('selleruser_id', auth()->user()->id)->get();
         $brand = brand::all();
        
        $data = compact('product','Order','brand');
        return view('seller/order')->with($data);
    }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
    }
    public function orderstatus(Request $request)
    {
        $order_status = $request['order_status'];
        $o_id = $request['o_id'];
        $Order =Order::where('o_id',"=","$o_id")->update(['order_status_track'=>$order_status]);
        return redirect()->back();
        
    }
    public function track($id){
        if(Auth::check()){
        $Order =Order::where('o_id',"=",$id)->get();   
        $data = compact('Order');
    return view('/pages/track')->with($data);
        }
        else{
           return view('login'); 
        }
    }
    public function invoice($id){
        $invoice =Order::leftJoin('products', 'orders.product_id', '=', 'products.id')->leftJoin('billings', 'orders.billing_id', '=', 'billings.id')->where('order_id',"=",$id)->get();
        $Order = Order::leftJoin('products', 'orders.product_id', '=', 'products.id')->leftJoin('billings', 'orders.billing_id', '=', 'billings.id')->where('order_id',"=",$id)->get();
        $data = compact('invoice','Order');
    return view('/admin/invoice')->with($data);
    }
    public function complete(){
        if(Auth::check()){
        $product = product::where('status', 0)->get();
         $Order = Order::leftJoin('products', 'orders.product_id', '=', 'products.id')->leftJoin('billings', 'orders.billing_id', '=', 'billings.id')->orderBy('o_id', 'DESC')->where('orders.user_id',"=",auth()->user()->id)->get();
         $brand = brand::all();
        
        $data = compact('product','Order','brand');
    return view('/pages/complete')->with($data);
        }
        else{
           return view('login'); 
        }
    }
}
