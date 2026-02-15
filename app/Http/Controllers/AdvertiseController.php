<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\advertise;

class AdvertiseController extends Controller
{
    public function advertise(){
      return view('pages/advertise');
  }
  
  public function create(Request $request){
      $advertise = new advertise;
      $advertise->name = $request->name;
      $advertise->cname = $request->cname;
      $advertise->email = $request->email;
      $advertise->number = $request->number;
      $advertise->city = $request->city;
       $advertise->save();
        return redirect('/')->with('success', 'Your Query Send Successfully Our team will Contact You soon!');
      
      }
      
     public function index()
    {
        $advertise = advertise::all();
       return view('admin/advertise',['advertise'=>$advertise]);
    }
    public function destroy($id){
        advertise::destroy($id);
        return redirect('admin/advertise');;
    } 
}
