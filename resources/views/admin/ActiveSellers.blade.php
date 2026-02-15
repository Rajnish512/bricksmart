
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
            <h1>Add Seller</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Seller</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    
    
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Seller </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="{{url('/')}}/admin/ActiveSellers" method="POST" enctype="multipart/form-data">
                   @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Seller Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$Sellers->Contact}}" placeholder="Enter Seller Name">
                  </div>
                 <div class="row">
                      <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Seller Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$Sellers->Email}}" placeholder="Enter Seller Email">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Seller Phone</label>
                    <input type="text" name="phone"  class="form-control" id="exampleInputEmail1" value="{{$Sellers->Mobile}}" placeholder="Enter Seller Phone">
                  </div>
                 </div>
                 <input type="hidden" name="seller_id" value="{{$Sellers->id}}" >
                 <input type="hidden" name="role" value="seller" >
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <!--<div class="form-group">-->
                  <!--  <label for="exampleInputPassword1">Confirm Password</label>-->
                  <!--  <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">-->
                  <!--</div>-->
                
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
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
 


<!--<div class="modal fade" id="modal-default">-->
<!--        <div class="modal-dialog">-->
<!--          <div class="modal-content">-->
<!--            <div class="modal-header">-->
<!--              <h4 class="modal-title">Default Modal</h4>-->
<!--              <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                <span aria-hidden="true">&times;</span>-->
<!--              </button>-->
<!--            </div>-->
<!--            <div class="modal-body">-->
<!--              <form action="{{url('/')}}/admin/news" method="POST" enctype="multipart/form-data">-->
<!--                   @csrf-->
<!--                <div class="card-body">-->
<!--                  <div class="form-group">-->
<!--                    <label for="exampleInputEmail1">Heading</label>-->
<!--                    <input type="text" class="form-control" id="exampleInputEmail1" name="heading" placeholder="Enter email">-->
<!--                  </div>-->
                  
                  
<!--                   <div class="form-group">-->
<!--                    <label for="exampleInputEmail1">Uploaded By</label>-->
<!--                    <input type="text" class="form-control" id="exampleInputEmail1" name="uploaded_by" placeholder="Enter email">-->
<!--                  </div>-->
<!--                                     <div class="form-group">-->
<!--                    <label for="exampleInputEmail1">Description</label>-->
<!--                    <input type="text" class="form-control" id="exampleInputEmail1" name="description" placeholder="Enter email">-->
<!--                  </div>-->
                 
<!--                  <div class="form-group">-->
<!--                    <label for="exampleInputFile">News Image</label>-->
<!--                    <div class="input-group">-->
<!--                      <div class="custom-file">-->
<!--                        <input type="file" class="custom-file-input" id="exampleInputFile" name="img">-->
<!--                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>-->
<!--                      </div>-->
                      <!--<div class="input-group-append">-->
                      <!--  <span class="input-group-text">Upload</span>-->
                      <!--</div>-->
<!--                    </div>-->
<!--                  </div>-->
                  
<!--                </div>-->
                <!-- /.card-body -->

<!--                <div class="card-footer">-->
<!--                  <button type="submit" class="btn btn-primary">Submit</button>-->
<!--                </div>-->
<!--              </form>-->
<!--            </div>-->
<!--            <div class="modal-footer justify-content-between">-->
<!--              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--              <button type="button" class="btn btn-primary">Save changes</button>-->
<!--            </div>-->
<!--          </div>-->
          <!-- /.modal-content -->
<!--        </div>-->
        <!-- /.modal-dialog -->
<!--      </div>-->
      
      
      
      <!--edit modal-->
     

    @endsection
    
  