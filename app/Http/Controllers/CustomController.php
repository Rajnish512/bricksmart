<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\custom;

class CustomController extends Controller
{
   public function show(){
       $custom = new custom;
       return view('pages/custom');
   }
   
   public function admin(){
      $custom = custom::all();
       return view('admin/custom',['custom'=>$custom]);
   }
   
   
   
   public function create(Request $request){
       $custom  = new custom;
       $custom->Package = $request->Package;
       $custom->name = $request->name;
       $custom->Phone = $request->Phone;
       $custom->Email = $request->Email;
       $custom->City = $request->City;
       $custom->Plot = $request->Plot;
       $custom->Floors = $request->Floors;
       $custom->Budget = $request->Budget;
       $custom->elevation = $request->elevation;
       $custom->save();
       return redirect('/')->with('success', 'Your Query Send Successfully Our team will Contact You soon!');
   }
   public function destroy($id){
       $custom = custom::destroy($id);
       return redirect('admin/custom');
   }
}
