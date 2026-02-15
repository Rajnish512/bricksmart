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
            <h1>Products</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
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
            
@if ($errors->any())
                        <ul class="alert alert-warning">
                            @foreach ($errors->all() as $error)
                            <li> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
            <div class="card">
              <div class="card-header">
                  <div class="row">
          <div class="col-11">
                <h3 class="card-title">Products </h3>
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
                    <th>S no</th>
                    <th>Product Image</th>
                    <th>Product Category </th>
                    <th>Product Brand </th>
                    
                    <th>Action</th>
                  </tr>
                  </thead>
                   @foreach($gallery as $gallery)
                  <tbody>
                     <tr>
                          <td>
                          {{$gallery->id}}
                      </td>
                       <td>
                          <img src="{{url('/')}}/public/uploads/gallery/{{$gallery->image}}"/>
                      </td>
                      <td>
                          {{$gallery->cname}}
                      </td>
                        <td>
                          {{$gallery->bname}}
                      </td>
                       <td>
                          <a class="btn btn-danger" href="{{url('/')}}/admin/gallery/delete/{{$gallery->id}}" >
                          <i class="fa fa-trash text-white"></i>
                      </a>
                      </td>
                     </tr>
                     
                     
                  </tbody>
                   @endforeach
                  <tfoot>
                
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
              <h4 class="modal-title">Add New Products </h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{url('/')}}/admin/gallery" method="POST" enctype="multipart/form-data">
                   @csrf
                   <input type="hidden" name="status" value="1">
                <div class="card-body">

                  
                  <div class="form-group">
                    <label for="exampleInputFile">Product Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                     <label> Select Category</label>
                    <select class="form-control select2" name="category">
                        <option selected="selected" value="0">None</option>
                         @foreach ($category as $category)
                        <option value="{{$category->id}}">
                            {{$category->name}}
                        </option>
                         @endforeach
                    </select>
                  
                  
                  
                    <div class="col-md-12">
                <div class="form-group">
                  <label> Select Brand</label>
                  <select name="brand" class="form-control select2" style="width: 100%;">
                       <option selected="selected" value="0">None</option>
                         @foreach ($brand as $brand)
                        <option value="{{$brand->id}}">
                            {{$brand->name}}
                        </option>
                         @endforeach
                  </select>
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

    @endsection
    
  