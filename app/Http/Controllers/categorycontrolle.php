<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class categorycontrolle extends Controller
{
    //
    public function addcategory(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            // 'mail' => 'required|email',
        ]);
        // echo "<pre>";
        // print_r($request->all());
        
        $contact = new category;
        $contact->name = $request['name'];
        // $contact->img = $request['img'];
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/category/', $filename);
            $contact->img = $filename;
        }
        // $contact->massage = $request['message'];
        $contact->save();
        return redirect('/admin/category');
    }
    public function category()
    {
        $category = category::all();
        $data = compact('category');
        return view('admin/category')->with($data);

    }
    public function destroy(category $category,$id)
    {
        $category=category::find($id);
        $category->delete();
      return redirect('/admin/category');
    }
    public function edit(category $category,$id)
    {
        $category=category::find($id);
        
        return view('admin/category-edit',['student'=>$category]);
      
    }
    
     public function update(Request $request, $id)
    {
        $category = category::find($id);
       
        $category->name = $request['name'];
        // $contact->img = $request['img'];
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/category/', $filename);
            $category->img = $filename;
        }
        // $contact->massage = $request['message'];
        $category->save();
        return redirect('/admin/category');
    }
    
}
