<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\brand;
use App\Models\product;
use App\Models\news;
use App\Models\User;
use App\Models\Order;
use Auth;

class HomeController extends Controller
{
    public $sorting;
     public $pagesize;
     public function mount()
     {
         $this->sorting="default";
         $this->pagesize="12";
         
         
     }
     
    //searchdata
    public function searchdata($search=null) 
    {
       
       if($search!=""){
         $product= product::where('status',"=",1)->where('product_name',"LIKE","%$search%")->get();  
       } 
       else{
          $product= product::where('status',"=",1)->get(); 
       }
       return response()->json(['product' => $product]);
   }
    
    public function index() 
    {
        $quickfind = category::all();
        $category = category::all();
        $sortby = category::all();
        $brand = brand::all();
        $news = news::all();
        $product = product::where('status',"=",1)->get();
        $hotdeals = product::orderby('product_offer','DESC')->get();
        $offers = product::orderby('created_at','DESC')->get();
        $products = product::where('status',"=",1)->get();
        $data = compact('category','brand','product','news','products','quickfind','hotdeals','offers');
        return view('index')->with($data);
    }
    public function admin() 
    {
       if(Auth::check()){ 
           if(auth()->user()->role=='admin'){
              $Order =Order::all();
              $Orders =count($Order);
              $User =User::where('role',NULL)->count();
              $product =product::count();
              $seller =User::where('role','seller')->count();
              $data = compact('Orders','User','seller','product');
             return view('admin/index')->with($data);   
           }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
       
    }
    public function seller() 
    {
     $category = category::all();
     $data = compact('category');   
    return view('pages/seller')->with($data);
    }
    public function checkout() 
    {
        if(Auth::check()){
        return view('/pages/checkout');
        }
        else{
         return view('/login');   
        }
    }
    public function price() 
    {
        $category = category::all();
        $sortby = category::all();
        $brand = brand::all();
        $news = news::all();
        $product = product::where('status',"=",1)->get();
        $data = compact('category','brand','product','news','sortby');
        return view('pages/price')->with($data);
    }
    public function category($id) 
    
    {
         if($id!=""){
            $product= product::where('product_category',"=","$id")->where('status',"=",1)->Paginate(9);
       }
       else{
       $product= product::where('status',"=",1)->Paginate(9);
       }
       $category = category::all();
       $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
       $sortby = category::all();
        $data = compact('product','category','id','sortby','vendor');
        return view('grid-list')->with($data);
    }
   public function vendor($id) 
    
    {
         if($id!=""){
            $product= product::where('product_by',"=","$id")->where('status',"=",1)->Paginate(9);
       }
       else{
       $product= product::where('status',"=",1)->Paginate(9);
       }
       $category = category::all();
       $vendor = user::where('role','seller')->orWhere('role','admin')->get();  
       $sortby = category::all();
        $data = compact('product','category','id','sortby','vendor');
        return view('grid-list2')->with($data);
    }
    
    // orderby
    public function product($id) 
    {
        $sortby = category::all();
        $product = product::find($id);
        $products = product::leftJoin('users', 'products.product_by', '=', 'users.id')->where('products.status',"=",1)->where('products.id',"=",$id)->get();
        $data = compact('product','sortby','products');
        return view('product')->with($data);
    }
    
    
     public function brand() 
    {
        $sortby = category::all();
        $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
        $category = category::all(); 
        $brand = brand::Paginate(15);
        $product = product::where('status',"=",1)->Paginate(9);
        $data = compact('category','brand','product','sortby','vendor');
        return view('brand')->with($data);
    }
    public function cbrands($id) 
    {
        $sortby = category::all();
        $category = category::all(); 
        $brand = brand::where('category',"=","$id")->get();
        $product = product::where('status',"=",1)->get();
        $data = compact('category','brand','product','sortby');
        return view('pages/brands')->with($data);
    }
    public function select($id) 
    {
        $sortby = category::all();
        $category = category::all(); 
        // $brand = brand::where('category',"=","$id")->get();
        $product = product::where('product_brand',"=","$id")->where('status',"=",1)->get();
        $data = compact('category','product','sortby');
        return view('pages/select')->with($data);
    }
    public function brands($id) 
    
    {
        $sortby = category::all();
         if($id!=""){
            $product= product:: where('product_brand',"=","$id")->where('status',"=",1)->paginate(9);
          }
          $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
         $category = category::all(); 
        $data = compact('product','category','id','sortby','vendor');
        
        return view('grid-list1')->with($data);
    }
    public function render()
    {
        
       if($this->sorting=='date'){
           $product= Product::where('status',"=",1)->orderby('created_at','DESC')->paginate($this->pagesize);
       }
       else if($this->sorting=="price")
       {
           $product= Product::where('status',"=",1)->where('product_category',"=",9)->orderby('regular_price','ASC')->paginate($this->pagesize);
       }
       else if($this->sorting=="price-des"){
         
           $product= Product::where('status',"=",1)->orderby('regular_price','DESC')->paginate($this->pagesize);  
       }
       else{
            $product= Product::where('status',"=",1)->paginate($this->pagesize);
       }
    }
     public function sorting(Request $request) 
    // sortingsortby
    {
        $thisq=$request['orderby'];
     $pagesize = $request['pagesize'];
     $id = $request['id'];
        return redirect("/sortby/$id/$thisq/$pagesize");
    }
     public function sortingsortby($id,$orderby,$pagesize) 
    
    {
        //  if($id!=""){
            // $product= product:: where('product_category',"=","$id")->get();
    //   }
     $thisq=$orderby;
     $pagesize = $pagesize;
     
     if($thisq=='date'){
           $product= Product::where('status',"=",1)->where('product_category',"=","$id")->orderby('created_at','DESC')->paginate($pagesize);
       }
       else if($thisq=="price")
       {
           $product= Product::where('status',"=",1)->where('product_category',"=","$id")->orderby('product_price','ASC')->paginate($pagesize);
       }
       else if($thisq=="price-des"){
         
           $product= Product::where('status',"=",1)->where('product_category',"=","$id")->orderby('product_price','DESC')->paginate($pagesize);  
       }
       else{
            $product= Product::where('status',"=",1)->where('product_category',"=","$id")->paginate($pagesize);
       }
       $category = category::all(); 
       $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
        $data = compact('product','category','id','thisq','pagesize','vendor');
        return view('grid-list')->with($data);
    }
    
     public function sorting1(Request $request) 
    // sortingsortby
    {
        $thisq=$request['orderby'];
     $pagesize = $request['pagesize'];
     $id = $request['id'];
        return redirect("/sortby1/$id/$thisq/$pagesize");
    }
    public function sortingsortby1($id,$orderby,$pagesize) 
    
    {
        //  if($id!=""){
            // $product= product:: where('product_category',"=","$id")->get();
    //   }
     $thisq=$orderby;
     $pagesize = $pagesize;
     if($thisq=='date'){
           $product= Product::where('status',"=",1)->where('product_brand',"=","$id")->orderby('created_at','DESC')->paginate($pagesize);
       }
       else if($thisq=="price")
       {
           $product= Product::where('status',"=",1)->where('product_brand',"=","$id")->orderby('product_price','ASC')->paginate($pagesize);
       }
       else if($thisq=="price-des"){
         
           $product= Product::where('status',"=",1)->where('product_brand',"=","$id")->orderby('product_price','DESC')->paginate($pagesize);  
       }
       else{
            $product= Product::where('status',"=",1)->where('product_brand',"=","$id")->paginate($pagesize);
       }
       $category = category::all(); 
       $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
        $data = compact('product','category','id','thisq','pagesize','vendor');
        return view('grid-list1')->with($data);
    }
    public function sorting2(Request $request) 
    // sortingsortby
    {
        $thisq=$request['orderby'];
     $pagesize = $request['pagesize'];
     $id = $request['id'];
        return redirect("/sortby2/$id/$thisq/$pagesize");
    }
    public function sortingsortby2($id,$orderby,$pagesize) 
    
    {
        //  if($id!=""){
            // $product= product:: where('product_category',"=","$id")->get();
    //   }
     $thisq=$orderby;
     $pagesize = $pagesize;
     if($thisq=='date'){
           $product= Product::where('status',"=",1)->where('product_by',"=","$id")->orderby('created_at','DESC')->paginate($pagesize);
       }
       else if($thisq=="price")
       {
           $product= Product::where('status',"=",1)->where('product_by',"=","$id")->orderby('product_price','ASC')->paginate($pagesize);
       }
       else if($thisq=="price-des"){
         
           $product= Product::where('status',"=",1)->where('product_by',"=","$id")->orderby('product_price','DESC')->paginate($pagesize);  
       }
       else{
            $product= Product::where('status',"=",1)->where('product_by',"=","$id")->paginate($pagesize);
       }
       $category = category::all(); 
       $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
        $data = compact('product','category','id','thisq','pagesize','vendor');
        return view('grid-list1')->with($data);
    }
    // sortby
    public function sortby(){
      $category = category::all(); 
            $b=count($category);
            return response()->json(['product' => $category , 'count' => $b]);
            
    }
    public function footersort(){
      $category = category::all(); 
      $category1 = category::all();
      $b=count($category);
      $product =array();
      foreach($category as $key => $category){
      $id = $category->id;
      $name =$category->name;
      $product[$key] = Product::where('status',"=",1)->where('product_category',"=","$id")->offset(0)->take(4)->get();
      
      }      
      return response()->json(['product' => $product ,'category' => $category1]);
            
    }
    // categoryprice
    public function categoryprice($id,$min,$max){
      $product = product::where('status',"=",1)->where('product_price', '>=', "$min")->where('product_price', '<=', "$max")->where('product_category',"=","$id")->where('status',"=",1)->paginate(9);
      $category = category::all();
            $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
            $data = compact('product','id','category','vendor');
            return view('grid-list')->with($data);
            
    }
    
    public function categoryprice1($id,$min,$max){
      $product = product::where('status',"=",1)->where('product_price', '>=', "$min")->where('product_price', '<=', "$max")->where('product_brand',"=","$id")->where('status',"=",1)->paginate(9);
      $category = category::all();
            $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
            $data = compact('product','id','category','vendor');
            return view('grid-list1')->with($data);
            
    }
    
      public function categoryprice2($id,$min,$max){
      $product = product::where('status',"=",1)->where('product_price', '>=', "$min")->where('product_price', '<=', "$max")->where('product_by',"=","$id")->where('status',"=",1)->paginate(9);
      $category = category::all();
            $vendor = user::where('role','seller')->orWhere('role','admin')->get(); 
            $data = compact('product','id','category','vendor');
            return view('grid-list')->with($data);
            
    }
    // selectedproducrs
    
    public function selectedproducrs(Request $request){
       $id = $request['selectedproducrs'];
      $product = product::where('status',"=",1)->where('id', '=', "$id")->get();
      return response()->json(['product' => $product]);
            
    }
    public function quickfind($id){
        $product= Product::where('status',"=",1)->where('product_category',"=","$id")->get();
        $brand = brand::where('category',"=","$id")->get();
        // where('product_category',"=","$id")->get()
        $data = compact('product','brand');
      return view('pages/quickfind')->with($data);  
    }
}
