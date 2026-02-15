<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\User;

class ProductRatings extends Component
{
    public $rating;
    public $comment;
    public $currentId;
    public $product;
    public $hideForm;

    protected $rules = [
        'rating' => ['required', 'in:1,2,3,4,5'],
        'comment' => 'required',

    ];
    public function show1()
    {
        

		$total_user_rating = $total_user_rating + $comment->rating;
      return view('livewire.ratingijs');  
    }
    public function show($id)
    {
        // $comment = Rating::where('status', 1)->get();
        $comment = Rating::where('status', 1)->where('product_id', $id)->get();
        $average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
        foreach ($comment as $comment) {
        $users = User::where('id', $comment->user_id)->get();
        // $newCompete = array('user'=>$users);
        if($comment->rating == '5')
		{
			$five_star_review++;
		}

		if($comment->rating == '4')
		{
			$four_star_review++;
		}

		if($comment->rating == '3')
		{
			$three_star_review++;
		}

		if($comment->rating == '2')
		{
			$two_star_review++;
		}

		if($comment->rating == '1')
		{
			$one_star_review++;
		}

		$total_review++;
		$total_user_rating = $total_user_rating + $comment->rating;
        $comments[] = array(
            'id' =>	$comment->id,
            'rating'	=>	$comment->rating,
            'comment'   =>	$comment->comment,
            'updated_at'   =>	$comment->updated_at,
		    'user'		=>	$users);
        }
        
        $average_rating = $total_user_rating / $total_review;
        
       $data = compact('comments','total_review','average_rating');
    
         return response()->json( $data );
    }

    public function render()
    {
        // $comment = Rating::where('status', 1)->get();
        $comments = Rating::leftJoin('users', 'ratings.id', '=', 'users.id')->where('status', 1)->get();
        
        $data = compact('comments');
        return view('livewire.product-ratings')->with($data);
    }

    public function mount()
    {
        if(auth()->user()){
            $rating = Rating::where('user_id', auth()->user()->id)->where('product_id', $this->product->id)->first();
            if (!empty($rating)) {
                $this->rating  = $rating->rating;
                $this->comment = $rating->comment;
                $this->currentId = $rating->id;
            }
        }
        return view('livewire.product-ratings');
    }

    public function delete($id,$productid)
    {
        $rating = Rating::where('id', $id)->first();
        if ($rating && ($rating->user_id == auth()->user()->id)) {
            $rating->delete();
        }
        if ($this->currentId) {
            $this->currentId = '';
            $this->rating  = '';
            $this->comment = '';
        }
        
        return redirect("product/$productid");
    }

    public function rate(Request $request)
    {
        
        
        $rating = Rating::where('user_id', auth()->user()->id)->where('product_id', $request->productid)->first();
        // $request->validate();
        $request->validate([
            'comment' => 'required',
            'rating' => 'required',
            'productid' => 'required'
        ]);
        if (!empty($rating)) {
            $rating->user_id = auth()->user()->id;
            $rating->product_id = $request->productid;
            $rating->rating = $request->rating;
            $rating->comment = $request->comment;
            $rating->status = 1;
            try {
                $rating->update();
            } catch (\Throwable $th) {
                throw $th;
            }
            session()->flash('message', 'Success!');
        } else {
            $rating = new Rating;
            $rating->user_id = auth()->user()->id;
            $rating->product_id = $request->productid;
            $rating->rating = $request->rating;
            $rating->comment = $request->comment;
            $rating->status = 1;
            try {
                $rating->save();
            } catch (\Throwable $th) {
                throw $th;
            }
            $request->hideForm = true;
        }
        $id=$request->productid;
        return redirect("product/$id");
    }
}