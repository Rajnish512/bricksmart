 @extends('admin/main')
@section('main-section')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!--<div class="callout callout-info">-->
            <!--  <h5><i class="fas fa-info"></i> Note:</h5>-->
            <!--  This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.-->
            <!--</div>-->

 @foreach ($Order as $key=>$Orders)
 
 @endforeach
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Bricks Mart
                    <small class="float-right">Date: {{$Orders->created_at}} </small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Bricks Mart, </strong><br>
                    13 floor, Skyline plaza 1, Golf City, <br>Lucknow, Uttar Pradesh 226030<br>
                    Phone: (804) 123-5432<br>
                    Email: info@bricksmart.com
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{$Orders->fname}} {{$Orders->lname}}</strong><br>
                     {{$Orders->address}},{{$Orders->appartment}},{{$Orders->city}}<br>
                    {{$Orders->state}},{{$Orders->zip}}<br>
                    Phone: {{$Orders->phone}}<br>
                    Email: {{$Orders->email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #{{$Orders->transaction_id}}</b><br>
                  <br>
                  <b>Order ID:</b> {{$Orders->order_id}}<br>
                  <b>Payment Due:</b>  {{$Orders->created_at}}<br>
                  <!--<b>Account:</b> 968-34567-->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <!--<th>Serial #</th>-->
                      <th>Price</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                        $tot =0;
                        @endphp
                        @foreach ($Order as $key=>$Orders)
                    <tr>
                      <td>{{$Orders->quantity}}</td>
                      <td>{{$Orders->product_name}}</td>
                      <!--<td>455-981-221</td>-->
                      <!--<td>El snort testosterone trophy driving gloves handsome</td>-->
                      <td>₹{{$Orders->product_price}}</td>
                      @php
    $i = $Orders->product_price;
    $sub = $Orders->product_price*$Orders->quantity;
    $tot = $sub +$tot;
@endphp
                      <td>₹{{$sub}}</td>
                    </tr>
                     @endforeach
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <!--<p class="lead">Payment Methods:</p>-->
                  <!--<img src="../../dist/img/credit/visa.png" alt="Visa">-->
                  <!--<img src="../../dist/img/credit/mastercard.png" alt="Mastercard">-->
                  <!--<img src="../../dist/img/credit/american-express.png" alt="American Express">-->
                  <!--<img src="../../dist/img/credit/paypal2.png" alt="Paypal">-->

                  <!--<p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">-->
                  <!--  Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem-->
                  <!--  plugg-->
                  <!--  dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.-->
                  <!--</p>-->
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <!--<p class="lead">Amount Due 2/22/2014</p>-->

                  <div class="table-responsive">
                    <table class="table">
                      <!--<tr>-->
                      <!--  <th style="width:50%">Subtotal:</th>-->
                      <!--  <td>$250.30</td>-->
                      <!--</tr>-->
                      <!--<tr>-->
                      <!--  <th>Tax (9.3%)</th>-->
                      <!--  <td>$10.34</td>-->
                      <!--</tr>-->
                      <!--<tr>-->
                      <!--  <th>Shipping:</th>-->
                      <!--  <td>$5.80</td>-->
                      <!--</tr>-->
                      <tr>
                        <th>Total:</th>
                        <td>₹{{$tot}}</td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a onclick="print1()" rel="noopener"  class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <!--<button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit-->
                  <!--  Payment-->
                  <!--</button>-->
                  <!--<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">-->
                  <!--  <i class="fas fa-download"></i> Generate PDF-->
                  <!--</button>-->
                </div>
              </div>
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
function print1(){
  window.addEventListener("load", window.print());
}
</script>
       @endsection