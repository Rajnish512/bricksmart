
 @extends('admin/main')
@section('main-section')
<style>
 .img-fluid{
    height: 80px; 
    width: 80px;
 }
    
</style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>brand</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Brand</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            

            <div class="card">
              <div class="card-header">
                  <div class="row">
          <div class="col-11">
                <h3 class="card-title">Brand </h3>
              </div>
              <div class="col-1">
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Add New
                </button>
              </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>Image</th>
                    <th>Brand Name</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                       @foreach ($brand as $brand)
                  <tr>
                      
                    <td><img class="img-fluid img-circle elevation-2" src="{{url('/')}}/public/uploads/brand/{{$brand->logo}}"  alt="cate-image"></td>
                    <td>{{$brand->name}}</td>
            
             <td>
                
                    
                        <a class="btn btn-warning"  href="{{url('/')}}/admin/brand-edit/{{$brand->id}}">
                          <i class="fa fa-edit text-white"></i>
                      </a>
                      
                      <a class="btn btn-danger" href="{{url('/')}}/admin/brand/delete/{{$brand->id}}">
                          <i class="fa fa-trash text-white"></i>
                      </a>

                     
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                   
                    <th>Image</th>
                    <th>Brand Name</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 


<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add Brand </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{url('/')}}/admin/brand" method="POST" enctype="multipart/form-data">
                   @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Brand</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Brand Name  ">
                  </div>
                 
                                      <label>Category</label>
                    <select class="form-control select2" name="category">
                        <option selected="selected" value="0">None</option>
                         @foreach ($category as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
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
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      
      
      
      <!--edit modal-->
     

    @endsection
    
  