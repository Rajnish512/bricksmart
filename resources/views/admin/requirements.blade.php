
 @extends('admin/main')
@section('main-section')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Requirements Query</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Requirements Query</li>
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
                <h3 class="card-title">Requirements Query </h3>
              </div>
              <div class="col-1">
                <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">-->
                <!--  Add New-->
                <!--</button>-->
              </div>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body" style="
    overflow: scroll;
">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    
                    <th>S no</th>
                    <th>Name</th>
                    <th>Category</th>
                   
                      <th>Products</th>
                     <th>Quantity</th>
                   
                     <th>Mobile</th>
                     <th>Email</th>
                      <th>Additional Info</th>
                      <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                       @foreach ($requirement as $requirement)
                  <tr>
                      
                    <td>{{$requirement->id}}</td>
                    <td>{{$requirement->name}}</td>
                    <td>@foreach (json_decode($requirement->category) as $member)
     {{ $member }}<br>
@endforeach</td>
                    <td>@foreach (json_decode($requirement->products) as $member)
     {{ $member }}<br>
@endforeach</td>
                    <td>@foreach (json_decode($requirement->quantity) as $member)
     {{ $member }}<br>
@endforeach</td>
                    
                    <td>{{$requirement->phone}}</td>
                    <td>{{$requirement->email}}</td>
                   
                    <td>{{$requirement->Additional}}</td>
                   
                    
            
             <td>
                
                    
                      
                      
                      <a class="btn btn-danger" href="{{url('/')}}/admin/requirement/delete/{{$requirement->id}}">
                          <i class="fa fa-trash text-white"></i>
                      </a>

                     
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                   
                  <th>S no</th>
                    <th>Name</th>
                    <th>Category</th>
                   
                      <th>Products</th>
                     <th>Quantity</th>
                   
                     <th>Mobile</th>
                     <th>Email</th>
                      <th>Additional Info</th>
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
 



    @endsection

  