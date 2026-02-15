<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\requirement;
use App\Models\product;

class RequirementController extends Controller
{
     public function show()
    {
         $product = product::all();
        $requirement = requirement::all();
      return view('pages/requirements',['requirement'=>$requirement,'product'=>$product]);
    }
    
    
       public function admin()
    {
        
        $requirement = requirement::all();
       return view('admin/requirements',['requirement'=>$requirement]);
    }
    
    
    
    
      public function create(Request $request){
           $requirement = new requirement;
       $category=$request->category;
        $products=$request->products;
         $quantity=$request->quantity;
       $requirement->category = json_encode($category);
       $requirement->products = json_encode($products);
       $requirement->quantity = json_encode($quantity);
      
       $requirement->select = $request->select;
       $requirement->phone = $request->phone;
       $requirement->location = $request->location;
       $requirement->name = $request->name;
       
       $requirement->email = $request->email;
      
       $requirement->Additional = $request->Additional;
       
       $requirement->save();
        return redirect('/')->with('success', 'Your Query Send Successfully Our team will Contact You soon!');
   }
   
   
   public function destroy($id)
    {
        requirement::destroy($id);
        return redirect('admin/requirement');;
    }
   
}
