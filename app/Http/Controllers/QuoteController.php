<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quote;


class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quote = quote::all();
        return view('admin/Quotation',['quote'=>$quote]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->validate(
            
            [
                'pname'=>'required',
                'name'=>'required',
                'email'=>'required',
                'phone'=>'required'
                
                
                ]
            );
         $quote = new quote;
        $quote->pname = $request->pname;
        $quote->name = $request->name;
        $quote->uom = $request->uom;
        $quote->min = $request->min;
        $quote->location = $request->location;
        $quote->apartment = $request->apartment;
        $quote->city = $request->city;
        $quote->zip = $request->zip;
        $quote->email = $request->email;
        $quote->phone = $request->phone;
        $quote->discription = $request->discription;
        $quote->save();
        return redirect('/')->with('success', 'Your Query Send Successfully Our team will Contact You soon!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $status = 'Student Deleted Successfully!!!';
        
       quote::destroy($id);
       $quote = quote::all();
       $data=compact('quote','status');
        return view('admin/Quotation')->with($data);
        
    }
}
