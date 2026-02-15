<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use App\Models\category;

class brand_controller extends Controller
{
    //
    
    
      public function addbrand(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            // 'mail' => 'required|email',
        ]);
        // echo "<pre>";
        // print_r($request->all());
        
        $contact = new brand;
        $contact->name = $request['name'];
        $contact->category = $request['category'];
        // $contact->img = $request['img'];
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/brand/', $filename);
            $contact->logo = $filename;
        }
        // $contact->massage = $request['message'];
        $contact->save();
        return redirect('/admin/brand');
    }
    public function brand()
    {
        $brand = brand::all();
        $category = category::all();
        $data = compact('brand','category');
        return view('admin/brand')->with($data);

    }
    public function destroy(brand $brand,$id)
    {
        $brand=brand::find($id);
        $brand->delete();
      return redirect('/admin/brand');
    }
    public function edit(brand $brand,$id)
    {
        $brand=  brand::find($id);
        $category = category::all();
        $data = compact('brand','category');
        return view('admin/brand-edit')->with($data);
      
    }
     public function update(Request $request, $id)
    {
        $contact = brand::find($id);
       
        $contact->name = $request['name'];
        $contact->category = $request['category'];
        // $contact->img = $request['img'];
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/brand/', $filename);
            $contact->logo = $filename;
        }
        // $contact->massage = $request['message'];
        $contact->save();
        return redirect('/admin/brand');
    }
}
