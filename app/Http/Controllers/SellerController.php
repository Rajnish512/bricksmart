<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\brand;
use App\Models\gallery;
use App\Models\Order;
use App\Models\User;
use Auth;

class SellerController extends Controller
{
    public function BestSeller(){
       $category =  category::all();
       $product = product::where('status',1)->paginate(9);
        return view('pages/BestSeller',compact('category','product'));
    }
    
   public function index(){
       if(Auth::check()){ 
           if(auth()->user()->role=='seller'){
               
             $quickfind = category::all();
             $Order =Order::where('selleruser_id',auth()->user()->id)->count();
              $Orders =Order::where('selleruser_id',auth()->user()->id)->where('order_status_track','Order Pending')->count();
             $Complete = Order::where('selleruser_id',auth()->user()->id)->where('order_status_track','Order delivered')->count();
              $product =product::where('product_by',auth()->user()->id)->count();
             
       $gallery = gallery::select('galleries.id as id','galleries.category as categoryid','galleries.image as image','brands.name as bname','categories.name as cname')->leftJoin('categories', 'categories.id', '=', 'galleries.category')->leftJoin('brands', 'brands.id', '=', 'galleries.brand')->get();
       return view('seller.index',compact('quickfind','gallery','product','Orders','Complete','Order'));  
           }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
       
   }
   
    public function product(){
        if(Auth::check()){ 
           if(auth()->user()->role=='seller'){
        $product = product::where('product_by',"=",auth()->user()->id)->get();
         $category = category::all();
         $brand = brand::all();
        
       return view('seller.product',compact('product','category','brand'));
           }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
   }
    
   public function sellerlist(){
        if(Auth::check()){ 
           if(auth()->user()->role=='admin'){
        $seller = User::where('role',"=",'seller')->get();
         $category = category::all();
         $brand = brand::all();
        
       return view('admin.sellerlistnew',compact('seller','category','brand'));
           }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
   }
}
