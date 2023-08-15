@extends('master')

@section('content')
@include('header2')


<style>
  .page-item.active .page-link {
    z-index: 3;
    color: white;
    background-color: #301949;
    border-color: #301949;
  }

  .page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: black;
    background-color: #fff;
    border: 1px solid #dee2e6;
  }
</style>







<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper1" style="background-color:white;">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">

        </div><!-- /.col -->
        <div class="col-sm-6">

        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <hr style="margin-top:40px; color:white">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">

      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="card" style="width:100%;margin-top:100px; padding-bottom:100px">
            <div class="card-header" style="text-align:center;color:white;background-color:#301934"><strong>Product Orders(Cash On Delivery)</strong></div>
            <div class="card-body">
              <a href="/allcustomeronlinepayment" class="btn btn " style="background-color:#301934;color:white;margin-bottom:10px;" role="button" aria-pressed="true">Show Online Payments</a @if ($confirmedorders->count())
              <div class="row">

                <table class="table">

                  <thead class="thead-dark">
                    <tr>

                      <th scope="col">Order Id</th>
                      <th scope="col">Customer</th>
                      <th scope="col">Provider Id</th>
                      <th scope="col">Product</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Price</th>
                      <th scope="col">Email</th>
                      <th scope="col">Address</th>
                      <th scope="col">Phone</th>
                      <th scope="col">Order Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($confirmedorders as $order)
                    <tr>
                      <td>{{$order->order_id}}</td>
                      <td>{{$order->username}}</td>
                      <td>{{$order->provider_id}}</td>
                      <td>{{$order->name}}</td>
                      <td>{{$order->quantity}}</td>
                      <td>{{$order->price}}</td>
                      <td>{{$order->emailaddress}}</td>
                      <td>{{$order->shippingaddress}}</td>
                      <td>{{$order->phonenumber}}</td>
                      <td>{{$order->created_at}}</td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
                <div class="linkSs" style=" padding:0px 1px">
                  {{$confirmedorders->links()}}
                </div>
              </div>



              @else
              <h5 style="text-align:center; margin-top:100px; margin-bottom:250px;color:grey">Empty</h5>
              @endif



            </div>
          </div>
      </div>
    </div>
</div><!-- /.card-header -->

</div>

</section>
</div>



@yield('content');
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/demo.js')}}"></script>
</body>

</html>


@endsection