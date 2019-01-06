@extends('layouts.dashboard')

@section('content')
<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="row mt-2">
                <div class="col-md-4">
                    <h4 class="login-text mt-4">Hi lan. Welcome to your account</h4>
                </div>
                <div class="col-md-8">
                    <ul class="nav">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                        </a>

                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="#">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> 3 New messages
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a class="text-center" href="#">
                                    <strong>See All Messages</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </li>    
                    </ul>
                </div>
            </div>
            <h2 class="login-text">Current Bills</h2>
            <div class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Billing Period</th>
                                    <th>Due Date</th>
                                    <th>Bill Total </th>
                                    <th>Balance Due</th>
                                    <th>View Bill</th>
                                    <th>Pay</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td><button type="button" class="btn btn-link">View Bill</button></td>
                                    <td><button type="button" class="btn btn-primary btn-block">Pay</button></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    <td><button type="button" class="btn btn-link">View Bill</button></td>
                                    <td><button type="button" class="btn btn-primary btn-block">Pay</button></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                    <td><button type="button" class="btn btn-link">View Bill</button></td>
                                    <td><button type="button" class="btn btn-primary btn-block">Pay</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <h2 class="login-text">Provide a Review</h2>
            <h4 class="login-text">Encourage others to reduce their carbon foot print</h4>
            <button type="button" class="btn btn-primary">Add Review</button>
            <!-- /.panel -->

        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h2 class="login-text">Share your Monthly Infographic</h2>
          <h4 class="login-text">Take credit for the environmental good you’ve done and let people know renewable energy is a simple option available to them. </h4>
          <img src="{{asset('images/ad.png')}}" alt="" id="brand"/>

          <a href="#"><i class="fa fa-facebook-square big-social"></i></a>
          <a href="#"><i class="fa fa-twitter-square big-social"></i></a>
          <a href="#"><i class="fa fa-camera-retro big-social"></i></a>
          <a href="#"><i class="fa fa-linkedin-square big-social"></i></a>
          <a href="#"><i class="fa fa-envelope-square big-social"></i></a>
          
          <button type="button" class="btn btn-link"><u>Download</u></button>
          
          <!-- /.table-responsive -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection
