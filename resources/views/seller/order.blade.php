
 @extends('seller/main')
@section('main-section')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>New Orders</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">New Orders</li>
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
                <table id="example1" class="table table-b$Ordersed table-striped">
                  <thead>
                  <tr>
                    
                    <th>S no</th>
                    <th>product name</th>
                    <th>name</th>
                   
                      <th>Address</th>
                     <th>Quantity</th>
                   
                     <th>Status</th>
                     <th>price</th>
                      <th>Order id</th>
                      <th>transaction id</th>
                       <th>Trsking Status</th>
                      <th>Action</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                       @foreach ($Order as $key=>$Orders)
                  <tr>
                      
                    <td>{{$key}}</td>
                    <td>{{$Orders->product_name}}</td>
                    <td>{{$Orders->fname}} {{$Orders->lname}}</td>
                    <td>{{$Orders->fname}} {{$Orders->lname}}, {{$Orders->phone}} <br> {{$Orders->address}},{{$Orders->appartment}},{{$Orders->city}} <br> {{$Orders->state}},{{$Orders->zip}}</td>
                    <td>{{$Orders->quantity}}</td>
                    
                    <td>{{$Orders->order_status}}</td>
                    <td>{{$Orders->product_price}}</td>
                     <td>{{$Orders->order_id}}</td>
                    <td>{{$Orders->transaction_id}}</td>
                    <td>
                        <form action="{{url('/')}}/admin/orderstatus" id="target" method="post" >
                            @csrf
                            <input type="hidden" name="o_id" value="{{$Orders->o_id}}">
                        <select name="order_status" id="order_status" value="{{$Orders->order_status_track}}">
                             <option value="{{$Orders->order_status_track}}">{{$Orders->order_status_track}}</option>
                        <option value="Order Pending">Order Pending</option>
                        <option value="Order confirmed">Order confirmed</option>
                        <option value="Picked by courier">Picked by courier</option>
                        <option value="On the way">On the way</option>
                        <option value="Ready for pickup">Ready for pickup</option>
                        <option value="Order delivered">Order delivered</option>
                    </select>
                    
                    <button class="btn btn-success" style="
    margin: 6px 23px;
">submit </button>
                    </form>
                    </td>
                   
                    
            
             <td>
                      <a class="btn btn-danger" href="{{url('/')}}/admin/requirement/order/{{$Orders->o_id}}" >
                          <i class="fa fa-trash text-white"></i>
                      </a>

                     
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                   
                  <th>S no</th>
                    <th>product name</th>
                    <th>name</th>
                   
                      <th>Address</th>
                     <th>Quantity</th>
                   
                     <th>Status</th>
                     <th>price</th>
                      <th>Order id</th>
                      <th>transaction id</th>
                       <th>Trsking Status</th>
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

       @section('script')
       <script>
//         $(document).ready(function() {
          
//       $('form').on('change', 'select', function(){
    
//     $( ".target" ).submit();
// });
//         });
      </script>

       @endsection
  