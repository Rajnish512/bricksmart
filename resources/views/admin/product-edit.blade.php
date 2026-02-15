
 @extends('admin/main')
@section('main-section')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Product</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Product</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            
<form action="" method="POST" enctype="multipart/form-data">
                   @csrf
                   <input type="hidden" name="status" value="1">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" value="{{$product->product_name}}" placeholder="Enter Product Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">MRP</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="mrp" value="{{$product->product_mrp}}" placeholder="Enter MRP price">
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Sale Price</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$product->product_price}}" name="price" placeholder="Enter sale Price">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInputPassword1">Offer(%)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$product->product_offer }}" name="offer" placeholder="Enter Number in offer ">
                  </div>
                  
                             <div class="form-group">
                    <label for="exampleInputPassword1">Unit (per bag,ton,piece etc.)</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="unit" value="{{$product->product_unit}}" placeholder="Enter value for  per bag,ton,piece etc. ">
                  </div>
                  
                       <div class="form-group">
                    <label for="exampleInputPassword1">Minimum Order(In No.)</label>
                    <input type="number" class="form-control" id="exampleInputPassword1" name="minimumorder" value="{{$product->product_minimumorder}}" placeholder="Enter Minimum Order">
                  </div>
                  
                  
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image" value="{{$product->product_image}}">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                    <div class="col-md-12">
                <div class="form-group">
                  <label> Select Brand</label>
                  <select name="brand" class="form-control select2" style="width: 100%;" value="{{$product->product_brand}}">
                      
                       <option value="0">None</option>
                         @foreach ($brand as $brand)
                         @if($brand->id==$product->product_brand)
                        <option selected="selected" value="{{$brand->id}}">
                            {{$brand->name}}
                        </option>
                        @else
                        <option value="{{$brand->id}}">
                            {{$brand->name}}
                        </option>
                        @endif
                         @endforeach
                  </select>
                </div>
                
                     <div class="form-group">
                  <label>Availability</label>
                  <select name="availability" class="form-control select2" style="width: 100%;" value="{{$product->product_availability}}">

                    <option>in stock</option>
                    <option>out of stock</option>

                  </select>
                </div>

              </div>
                 
                    
                                      <label> Select Category</label>
                    <select class="form-control select2" name="category" value="{{$product->product_category}}">
                        <option  value="0">None</option>
                         @foreach ($category as $category)
                        @if($category->id==$product->product_category)
                         <option selected="selected"  value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                         @else
                         
                         
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                        @endif
                         @endforeach
                    </select>
                  
                  <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="description" placeholder="Description" value="{{$product->product_description}}">
                  </div>
                  
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
 
  </div>




  @endsection