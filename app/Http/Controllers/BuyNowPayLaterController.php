<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buyNowPayLater;

class BuyNowPayLaterController extends Controller
{
  public function buyNowPayLeter(){
      return view('pages/buyNowPayLeter');
  }
  
  public function create(Request $request){
      $BuyNowPayLater = new buyNowPayLater;
      $BuyNowPayLater->name = $request->name;
     
      $BuyNowPayLater->email = $request->email;
      $BuyNowPayLater->number = $request->number;
      $BuyNowPayLater->city = $request->city;
      $BuyNowPayLater->credit = $request->credit;
      $BuyNowPayLater->n1 = $request->n1;
      $BuyNowPayLater->n2 = $request->n2;
      $BuyNowPayLater->n3 = $request->n3;
      $BuyNowPayLater->n4 = $request->n4;
      $BuyNowPayLater->n5 = $request->n5;
      $BuyNowPayLater->n6 = $request->n6;
      $BuyNowPayLater->n7 = $request->n7;
      $BuyNowPayLater->n8 = $request->n8;
      $BuyNowPayLater->n9 = $request->n9;
      $BuyNowPayLater->n10 = $request->n10;
      $BuyNowPayLater->n11 = $request->n11;
      $BuyNowPayLater->n12 = $request->n12;
      $BuyNowPayLater->n13 = $request->n13;
      $BuyNowPayLater->n14 = $request->n14;
      $BuyNowPayLater->n15 = $request->n15;
      $BuyNowPayLater->n16 = $request->n16;
      $BuyNowPayLater->n17 = $request->n17;
      $BuyNowPayLater->n18 = $request->n18;
      $BuyNowPayLater->n19 = $request->n19;
      $BuyNowPayLater->n20 = $request->n20;
      
       $BuyNowPayLater->save();
        return redirect('/')->with('success', 'Your Query Send Successfully Our team will Contact You soon!');
      
      }
      
      public function Credit(){
            $BuyNowPayLater = buyNowPayLater::all();
       return view('admin/Credit',['BuyNowPayLater'=>$BuyNowPayLater]);
      }
      public function destroy($id){
          buyNowPayLater::destroy($id);
          return redirect('admin/Credit');;
      }
}
