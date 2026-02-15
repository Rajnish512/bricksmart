<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\news;

class news_controller extends Controller
{
       public function addnews(Request $request)
    {
        
        
        
        $request->validate([
            // 'name' => 'required|max:255',
            // 'mail' => 'required|email',
        ]);
        
        
        $contact = new news;
        $contact->news_heading = $request['heading'];
        $contact->uploaded_by = $request['uploaded_by'];
        $contact->news_description = $request['description'];
        // $contact->img = $request['img'];
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/news/', $filename);
            $contact->news_image = $filename;
        }
        // $contact->massage = $request['message'];
        $contact->save();
        return redirect('/admin/news');
    }
    public function news()
    {
        $news = news::all();
        $data = compact('news');
        return view('admin/news')->with($data);
        

    }
    
    public function blog()
    {
        $news = news::Paginate(6);
        $data = compact('news');
        return view('pages/blog')->with($data);
        

    }
    
   public function blogdetails($id){
         $news = news::where("sno","=","$id")->get();
        $data = compact('news');
        return view('pages/blog_details')->with($data);
        
        
         
    }
    
    public function destroy(news $news,$id)
    {
        $news=news::where("sno","=","$id")->delete();
       
      return redirect('/admin/news');
    }
    public function edit(news $news,$id)
    {
         $news=news::where("sno","=","$id")->get();
        
        
        
        
        
        
        
        $data = compact('news');
        return view('admin/news-edit')->with($data);
      
    }
    
    
    public function update(Request $request, $id)
    {
      
        // $contact->img = $request['img'];
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('public/uploads/news/', $filename);
            
            $contact=news::where("sno","=","$id")->update(['news_heading'=>$request['heading'],'uploaded_by'=>$request['uploaded_by'],'news_description'=>$request['description'],'news_image'=>$filename]);
       
        }
        else{
          $contact=news::where("sno","=","$id")->update(['news_heading'=>$request['heading'],'uploaded_by'=>$request['uploaded_by'],'news_description'=>$request['description']]);
       
        }
        // $contact->massage = $request['message'];
       
        return redirect('/admin/news');
    }

}
