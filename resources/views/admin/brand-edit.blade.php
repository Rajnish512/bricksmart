
 @extends('admin/main')
@section('main-section')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6"> 
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<div class="container mt-5">
    <div class="row">
        <div class="col-sm-6">
            
   <form action="{{url('/')}}/admin/brand-edit/{{$brand->id}}" method="POST" enctype="multipart/form-data">
                   @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Brand Name  " value="{{$brand->name}}">
                  </div>
                 
                                      <label>Category</label>
                    <select class="form-control select2" name="category">
                     
                        <option  value="0">None</option>
                         @foreach ($category as $category)
                         @if($category->id==$brand->category)
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
                    <label for="exampleInputFile">Image input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="img">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <!--<div class="input-group-append">-->
                      <!--  <span class="input-group-text">Upload</span>-->
                      <!--</div>-->
                    </div>
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