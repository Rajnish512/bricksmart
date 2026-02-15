<div>
    <!--<pre>-->
    
    <!--</pre>-->
    <section class="w-full px-8 pt-4 pb-10 xl:px-8">
        <div class="max-w-5xl mx-auto">
            <div class="flex flex-col items-center md:flex-row">

                <div class="w-full mt-16 md:mt-0">
                    <div class="relative z-10 h-auto p-4 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
                        @auth
                            <div class="w-full space-y-5">
                                <p class="font-medium text-blue-500 uppercase">
                                    Rate this product
                                </p>
                            </div>
                            @if (session()->has('message'))
                                <p class="text-xl text-gray-600 md:pr-16">
                                    {{ session('message') }}
                                </p>
                                
                            @endif
                            @error('rating')
                        {{$message}}

                        @enderror
                        @error('comment')
                        {{$message}}

                        @enderror
                            @if($hideForm != true)
                                <form action="{{url('/')}}/rating/rate" method="post">
                                    @csrf
                                    <div class="block max-w-3xl px-1 py-2 mx-auto">
                                        <input type="hidden" value="{{$product->id}}" name="productid" >
                                        <div class="flex space-x-1 rating">
                                            <label for="star1">
                                                <input hidden wire:model="rating" type="radio" id="star1" class="categorylist" name="rating" value="1" />
                                              <i class="fas fa-star star-light submit_star mr-1" data-rating="1" id="submit_star_1"></i>
                                            </label>
                                            <label for="star2" >
                                                <input hidden wire:model="rating"  type="radio" id="star2" name="rating" value="2" class="categorylist" />
                                                <i class="fas fa-star star-light submit_star mr-1" data-rating="2" id="submit_star_2"></i>
                                            </label>
                                            <label for="star3">
                                                <input hidden wire:model="rating"  type="radio" id="star3" name="rating" value="3" class="categorylist"  />
                                               <i class="fas fa-star star-light submit_star mr-1" data-rating="3" id="submit_star_3"></i>
                                            </label>
                                            <label for="star4">
                                                <input hidden wire:model="rating" type="radio" id="star4" name="rating" value="4"  class="categorylist" />
                                               <i class="fas fa-star star-light submit_star mr-1" data-rating="4" id="submit_star_4"></i>
                                            </label>
                                            <label for="star5">
                                                <input hidden wire:model="rating"  type="radio" id="star5" name="rating" value="5" class="categorylist" />
                                               <i class="fas fa-star star-light submit_star mr-1"  data-rating="5" id="submit_star_5"></i>
                                            </label>
                                        </div>
                                        <div class="my-5">
                                            @error('comment')
                                                <p class="mt-1 text-red-500">{{ $message }}</p>
                                            @enderror
                                            <textarea wire:model.lazy="comment" name="comment" id="comment" class="block w-full px-4 py-3 border border-2 rounded-lg focus:border-blue-500 focus:outline-none" placeholder="Comment.."></textarea>
                                        </div>
                                    </div>
                                    <div class="block">
                                        <button type="submit" class="btn btn-warning">Rate</button>
                                        @auth
                                            @if($currentId)
                                                <a href="{{url('/')}}/rating/delete/{{ $currentId }}/{{$product->id}}" class="btn btn-danger">Delete</a>
                                            @endif
                                        @endauth
                                    </div>
                                </form>
                            @endif
                        @else
                            <div>
                                <div class="mb-8 text-center text-gray-600">
                                    You need to login in order to be able to rate the product!
                                </div>
                                <a href="{{url('/')}}/register"
                                    class="block px-5 py-2 mx-auto font-medium text-center text-gray-600 bg-white border rounded-lg shadow-sm focus:outline-none hover:bg-gray-100" 
                                >Register</a>
                            </div>
                        @endauth
                    </div>
                </div>
    
            </div>
        </div>
    </section>
    <section class="relative block pt-20 pb-24 overflow-hidden text-left bg-white">
        <div class="w-full px-20 mx-auto text-left md:px-10 max-w-7xl xl:px-16">
            <div class="box-border flex flex-col flex-wrap justify-center -mx-4 text-indigo-900">
                <div class="relative w-full mb-12 leading-6 text-left xl:flex-grow-0 xl:flex-shrink-0">
                    <h2 class="box-border mx-0 mt-0 font-sans text-4xl font-bold text-center text-indigo-900">
                        Ratings
                    </h2>
                </div>
            </div>
            <div class="box-border flex grid flex-wrap justify-center gap-10 -mx-4 text-center text-indigo-900 lg:gap-16 lg:justify-start lg:text-left">
                @forelse ($comments as $comment)
               
               
                    
                @empty
                <div class="flex col-span-1">
                    <div class="relative px-4 mb-16 leading-6 text-left">
                        <div class="box-border text-lg font-medium text-gray-600">
                            No ratings
                        </div>
                    </div>
                </div>
                @endforelse



            </div>
    </section>
    
</div>
