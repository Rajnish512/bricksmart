
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
            <h1>news</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">news</li>
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
                <h3 class="card-title">news </h3>
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
                    <th>sn.</th>
                    <th>products</th>
                    <th>quantity</th>
                    <th>Action</th>
                     <th>Uploaded By</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                       @foreach ($pricecheck as $key => $pricecheck)
                  <tr>
                      <td>{{$key}}</td>
                    <td>@foreach (json_decode($pricecheck->products) as $member)
     {{ $member }}<br>
@endforeach</td>
                    <td>@foreach (json_decode($pricecheck->quantity) as $member)
     {{ $member }}<br>
@endforeach</td>
                    <td>{{$pricecheck->fname}}</td>
                    <td>{{$pricecheck->lname}}</td>
                    <td>{{$pricecheck->phone}}</td>
                    <td>{{$pricecheck->email}}</td>
             <td>
                <a class="btn btn-warning" data-toggle="modal" data-target="#modal-edit" href="{{url('/')}}/admin/news/edit/{{$pricecheck->id}}">
                          <i class="fa fa-edit text-white"></i>
                      </a>
                      
                      <a class="btn btn-danger" href="{{url('/')}}/admin/news/delete/{{$pricecheck->id}}">
                          <i class="fa fa-trash text-white"></i>
                      </a>
         </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                   
                  <th>Image</th>
                    <th>Heading</th>
                    <th>Action</th>
                     <th>Uploaded By</th>
                    
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
              <h4 class="modal-title">Default Modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="{{url('/')}}/admin/news" method="POST" enctype="multipart/form-data">
                   @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Heading</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="heading" placeholder="Enter email">
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="exampleInputEmail1">Uploaded By</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="uploaded_by" placeholder="Enter email">
                  </div>
                                     <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter email">
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputFile">News Image</label>
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
    
  