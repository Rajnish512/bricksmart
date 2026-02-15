
 @extends('admin/main')
@section('main-section')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Became a seller Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Became a seller Request</li>
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
                <h3 class="card-title">Became a seller</h3>
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
                    <th>Seller Type</th>
                    <th>Category</th>
                   
                      <th>Mobile</th>
                     <th>Company</th>
                    <th>Contact</th>
                     <th>Email</th>
                     <th>Additional</th>
                      <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                       @foreach ($becomeSeller as $becomeSeller)
                  <tr>
                      
                    <td>{{$becomeSeller->id}}</td>
                    <td>{{$becomeSeller->Manufacturer}}</td>
                    <td>@foreach (json_decode($becomeSeller->category) as $member)
     {{ $member }}<br>
@endforeach</td>
                    <td>{{$becomeSeller->Mobile}}</td>
                    <td>{{$becomeSeller->Company}}</td>
                    <td>{{$becomeSeller->Contact}}</td>
                    <td>{{$becomeSeller->Email}}</td>
                    <td>{{$becomeSeller->Additional}}</td>
                   
                    
                      
            
             <td>
                
                    
                      
                      <a class="btn btn-danger" href="{{url('/')}}/admin/seller/delete/{{$becomeSeller->id}}">
                          <i class="fa fa-trash text-white"></i>
                      </a>
                      <a class="btn btn-success" href="{{url('/')}}/admin/seller/ActiveSellers/{{$becomeSeller->id}}">
                          <i class="fa fa-check text-white"></i>
                      </a>

                     
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                   
                 <th>S no</th>
                    <th>Seller Type</th>
                    <th>Category</th>
                     <th>Mobile</th>
                  
                     <th>Company</th>
                    <th>Contact</th>
                     <th>Email</th>
                     <th>Additional</th>
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
 



      
      
      
      <!--edit modal-->
     

    @endsection

  