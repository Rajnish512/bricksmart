
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
            
<form method="POST"  enctype="multipart/form-data">
                    @csrf
                   
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Name</label>
    <input type="text" value="{{$student->name}}" class="form-control" name="name" id="exampleInputPassword1">
  </div>
  <div class="mb-3 ">
  <label for="exampleInputPassword1" class="form-label">Image</label>
    <input type="file"  class="form-control" name="img" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
        </div>
    </div>
</div>
 
  </div>




  @endsection