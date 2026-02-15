<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// compare
use App\Models\compare;
use Auth;
class CompareController extends Controller
{
    //return view('pages/compare');
    public function index(){
    if(Auth::check()){     
    return view('/pages/compare');
    }
    else{
     return view('/login');   
    }
     }
    public function addtocompare(Request $request){
        if(Auth::check()){
        $addtocompare =$request['addtocompare'];
        
        $currentuserid = auth()->user()->id;
        $count1= compare:: where('user_id','=', $currentuserid)->get();
        $count= compare:: where('p_id',"=","$addtocompare")->where([['p_id','=',$addtocompare],['user_id','=', $currentuserid]])->get();
        if(count($count1) >= 4){
         return response()->json(["status" =>"You can add maximum 4 products to compare"]);   
        }
        else{
        if(count($count) == 0){
           $ip_add = getenv("REMOTE_ADDR");
        
        $contact = new compare;
        $contact->p_id = $request['addtocompare'];
        $contact->user_id = auth()->user()->id;
        $contact->ip_add = $ip_add;
        // $contact->qty = $request['product_minimumorder'];
        $contact->save();
        // product_minimumorder
    //   return response()->json(['request' => $request]); 
       return response()->json(["status" =>"Your product has been added to compare!"]); 
        }
        else{
          return response()->json(["status" =>"Product is already added into the compare Continue Shopping..!"]); 
        // $product_minimumorder=$request['product_minimumorder'];
        //   return response()->json($product_minimumorder);
        }
        }
    }
        else{
        return response()->json(["redirect_url"=>url('login')]);
        }
    }
    
    public function showcompare(){
      $count= compare::leftJoin('products', 'compares.p_id', '=', 'products.id')->leftJoin('brands', 'brands.id', '=', 'products.product_brand')->leftJoin('categories', 'categories.id', '=', 'products.product_category')->where('compares.user_id',"=",auth()->user()->id)
            ->get(); 
            $b=count($count);
            return response()->json(['product' => $count , 'count' => $b]);
            
    }
    // removecompare
    public function removecompare(Request $request){
     $removecart =$request['removecompare'];
     $product=compare::where('co_id',$removecart)->delete(); 
    
    }
}
