@extends('layouts.admin')

@section('styles')

@endsection

@section('content')
<div class="page-header" style="margin-top: 10px; margin-bottom: -35px; margin-top:70px;">
  <h5 style="text-align: center;">Admin Dashboard</h5>
</div>

<section id="dashboard" class="container mt-5">
  <div class="row">
    <div class="col-sm-6 col-lg-3 mb-3">
      <div class="card" style=" background-color: rgba(0, 0, 0, 0.2);">
        <div class="card-body">
          <h5 class="card-title">Total Orders</h5>
          <p class="card-text">null</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-3">
      <div class="card" style="background-color: #01FFFF;">
        <div class="card-body">
          <h5 class="card-title">Total Revenue</h5>
          <p class="card-text">null</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-lg-3 mb-3">
      <div class="card" style="background-color: #FF9248;">
        <div class="card-body">
          <h5 class="card-title">Total Customers</h5>
          <p class="card-text">{{$users}}</p>
        </div>
      </div>
    </div> 
    <div class="col-sm-6 col-lg-3 mb-3">
      <div class="card" style="background-color:#00FF7F;;">
        <div class="card-body">
          <h5 class="card-title">Customer Satisfaction</h5>
          <p class="card-text">null</p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
      <div class="col-sm-6 col-lg-3 md-3">
          <!-- Empty ***************-->
      </div>
      <div class="col-sm-6 col-lg-3 md-3">
          <div class="card" style="background-color: #FFF77D;">
              <div class="card-body">
                 <h5 class="card-title">Takeaway</h5>
                  <p class="card-text">null</p>
              </div>
          </div>
      </div>
      <div class="col-sm-6 col-lg-3 md-3">
          <div class="card" style="background-color: #FFD2D3;">
              <div class="card-body">
                 <h5 class="card-title">Dine in</h5>
                  <p class="card-text">null</p>
              </div>
          </div>
      </div>
      <div class="col-sm-6 col-lg-3 md-3">
            <!-- Empty ***************-->
      </div>
    </div>
    
</section>
@endsection

@section('script')
    
@endsection