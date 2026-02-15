<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_us;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( request $request)
    {
         $request->validate(
             
             [
                    'name'=>'required',
                    'email'=>'required|email',
                    'message'=>'required',
                 
                 ]
                     );
         $contact_us = new contact_us;
          $contact_us->name= $request['name'];
           $contact_us->email= $request['email'];
            $contact_us->message= $request['message'];
             $contact_us->save();
            return redirect('/')->with('success', 'Your Query Send Successfully Our team will Contact You soon!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

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
contact_us::destroy($id);
        return redirect('admin/contact');
    }
    public function contact()
    {
        $contact_us = contact_us::all();
       return view('admin/contact',['contact'=>$contact_us]);
    }
}
