
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
            <h1>Credit Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Credit Request</li>
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
                <h3 class="card-title">Credit Request </h3>
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
                    <th>email</th>
                    <th>Number</th>
                    <th>City</th>
                    <th>Credit</th>
                     <th>Material Required</th>
                   <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                       @foreach ($BuyNowPayLater as $BuyNowPayLater)
                  <tr>
                      
                    <td>{{$BuyNowPayLater->id}}</td>
                    <td>{{$BuyNowPayLater->name}}</td>
                    <td>{{$BuyNowPayLater->email}}</td>
                 <td>{{$BuyNowPayLater->number}}</td>
                 <td>{{$BuyNowPayLater->city}}</td>
                 <td>{{$BuyNowPayLater->credit}}</td>
                 <td>
                    {{$BuyNowPayLater->n1}}
                 {{$BuyNowPayLater->n2}},
                 {{$BuyNowPayLater->n3}},
                 ,{{$BuyNowPayLater->n4}},
                 {{$BuyNowPayLater->n5}},
                 {{$BuyNowPayLater->n6}},
                 {{$BuyNowPayLater->n7}},
                 {{$BuyNowPayLater->n8}},
                 {{$BuyNowPayLater->n9}},
                 {{$BuyNowPayLater->n10}},
                 {{$BuyNowPayLater->n11}},
                 {{$BuyNowPayLater->n12}},
                 {{$BuyNowPayLater->n13}},
                  {{$BuyNowPayLater->n14}},
                   {{$BuyNowPayLater->n15}},
                    {{$BuyNowPayLater->n16}},
                     {{$BuyNowPayLater->n17}},
                     {{$BuyNowPayLater->n18}},
                     {{$BuyNowPayLater->n19}},
                     {{$BuyNowPayLater->n20}},
                     
                 </td>
                    
                    
            
             <td>
                
                    
                      
                      
                      <a class="btn btn-danger" href="{{url('/')}}/admin/Credit/delete/{{$BuyNowPayLater->id}}">
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
                    <th>email</th>
                    <th>Number</th>
                    <th>City</th>
                    <th>Credit</th>
                     <th>Material Required</th>
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
    
  