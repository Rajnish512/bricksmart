<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\brand;
use App\Models\category;
use App\Models\gallery;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $gallery = new gallery;
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/gallery/', $filename);
           $gallery->image = $filename;
        }
       $gallery->category = $request->category;
       $gallery->brand = $request->brand;
   
        
         $gallery->save();
        return redirect()->back();
       
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
    public function show()
    {
        $brand = brand::all();
        $category = category ::all();
        
        
   
        $gallery = gallery::select('galleries.id as id','galleries.image as image','brands.name as bname','categories.name as cname')->leftJoin('categories', 'categories.id', '=', 'galleries.category')->leftJoin('brands', 'brands.id', '=', 'galleries.brand')->get();
       return view('admin/gallery',compact('brand','category','gallery'));
    }




    
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
        $gallery=gallery::find($id);
        $gallery->delete();
      return redirect('/admin/gallery');
    }
}
