<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\category;
use App\Models\brand;
use Auth;

class productcontrolle extends Controller
{
 
  //
    public function addproduct(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'price' => 'required',
            'category' => 'required',
            // 'description' => 'required',
            'image' => 'required|image',
            'mrp' => 'required',
            'minimumorder' => 'required',
            'offer' => 'required',
            // 'by' => 'required',
            'availability' => 'required',
            // 'unit' => 'required',
            'brand' => 'required',
            
            
        ]);
        // echo "<pre>";
        // print_r($request->all());
        
        $contact = new product;
        $contact->product_name = $request['name'];
        $contact->product_price = $request['price'];
        $contact->product_category = $request['category'];
        $contact->product_description = $request['description'];
        $contact->product_mrp = $request['mrp'];
        $contact->product_minimumorder = $request['minimumorder'];
        $contact->product_offer = $request['offer'];
        $contact->product_by = auth()->user()->id;
        $contact->product_availability = $request['availability'];
        $contact->product_unit = $request['unit'];
        $contact->product_brand = $request['brand'];
        // $contact->img = $request['img'];
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/product/', $filename);
            $contact->product_image = $filename;
        }
        $contact->status = $request['status'];
        // $contact->massage = $request['message'];
        $contact->save();
        return redirect()->back();
    }
    public function productrequest()
    {
        if(Auth::check()){ 
           if(auth()->user()->role=='admin'){
        $product = product::where('status', 0)->get();
         $category = category::all();
         $brand = brand::all();
        
        $data = compact('product','category','brand');
        return view('admin/productrequest')->with($data);
           }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }
       
    }
    public function approve($id)
    {
        $product = product::where('id', $id)->update(['status'=>1]);
        return redirect()->back();
    }
    public function product()
    {
        if(Auth::check()){ 
           if(auth()->user()->role=='admin'){
        $product = product::where('status', 1)->get();
         $category = category::all();
         $brand = brand::all();
        
        $data = compact('product','category','brand');
        return view('admin/product')->with($data);
        // return view('admin/product');
           }
       else{
           return view('/login');
       }
      
       }
       else{
         return view('/login');   
        }

    }
  public function destroy(product $product,$id)
    {
        $product=product::find($id);
        $product->delete();
      return redirect('/admin/product');
    }
    public function edit(product $product,$id)
    {
         $brand = brand::all();
        $product=product::find($id);
        $category = category::all();
        $data = compact('product','category','brand');
        return view('admin/product-edit')->with($data);
      
      
    }
     public function view(Request $request)
     
    {
        $search=$request['search']?? "";

        return redirect("/search/$search");
        
        
    }
    public function viewget($data)
     
    {
        $search=$data?? "";
        if($search!=""){
            $products= product::where('status',"=",1)->where('product_name',"LIKE","%$search%")->Paginate(12);
            if($search!=""){
                // $products= product::all();
            }
            
            
            
        }else{
            
            $products= product::where('status',"=",1)->Paginate(12);
        }
        $data=compact('products','search');
        return view('pages/search')->with($data);
        
        
    }
    
//   viewget 
    
     public function searchbrand(Request $request)
     
    {
        $search=$request['search']?? "";
        if($search!=""){
            $brand= brand:: where('name',"LIKE","%$search%")->get();
            
            
            
            
        }else{
            
            $brand= brand::all();
        }
        $data=compact('brand','search');
        return view('brand')->with($data);
        
        
    }
    
    
    
    
     public function update(Request $request, $id)
    {
        $product = product::find($id);
       
        $product->product_name = $request['name'];
         $product->product_mrp = $request['mrp'];
          $product->product_price = $request['price'];
           $product->product_offer = $request['offer'];
            $product->product_unit = $request['unit'];
             $product->product_minimumorder = $request['minimumorder'];
        $product->product_brand = $request['brand'];
        $product->product_availability = $request['availability'];
        $product->product_category = $request['category'];
        $product->product_description = $request['description'];
        
        // $contact->img = $request['img'];
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/product/', $filename);
            $product->img = $filename;
        }
        // $contact->massage = $request['message'];
        $product->save();
        return redirect('/admin/product');
    }
    
    
}


 



