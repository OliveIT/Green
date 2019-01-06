@extends('layouts.dashboard')

@section('content')
<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <h2 class="login-text">Total Monthly CO2 Savings by My Referrals</h2>
            <h4 class="login-text">The environmental good you've made possible by introducing others to clean energy made simple.</h4>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
          <h2 class="login-text">My Referrals</h1>
          <div class="table-responsive">
              <table class="table table-bordered table-hover table-striped">
                  <thead>
                      <tr>
                          <th>Referee Name</th>
                          <th>Credit Amount</th>
                          <th>Date Credited</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Jennier Lindeman</td>
                          <td>$943.45</td>
                          <td>Pending</td>
                      </tr>
                      <tr>
                          <td>Jennier Lindeman</td>
                          <td>$943.45</td>
                          <td>10/21/2013</td>
                      </tr>
                  </tbody>
              </table>
          </div>
          <h2 class="login-text">Encourage Others</h2>
          <h4 class="login-text">Let your friends and family know how easy and important it is to switch to sustainable energy.<br/><br/>
          They get 3 months of free upgrade to clean energy and you get 1 month of free upgrade, for anyone that signs up and completes the first billing cycle.
          </h4>
          <button type="button" class="btn btn-primary btn-lg btn-block">Refer Now</button>
          <!-- /.table-responsive -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
@endsection
