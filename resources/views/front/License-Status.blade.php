
@extends('front.layouts.master2')

@section('content')
<div class="container">
    <h4 class="text-center mt-4" style="color: #182C61">View Your License Details Here</h4>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified font-weight-bold" role="tablist">
      <li class="nav-item">
        <a class="nav-link active text-danger" data-toggle="tab" href="#profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" data-toggle="tab" href="#offence">Offences</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-danger" data-toggle="tab" href="#rules">Rules</a>
      </li>
    </ul>
  
    <!-- Tab panes -->
    <div class="tab-content">
      <div id="profile" class="container tab-pane active"><br>
      
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div id="offence" class="container tab-pane fade"><br>
       
        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      </div><br>
      <div id="rules" class="container tab-pane fade"><br>
                 
          <table class="table table-bordered table-sm">
            <thead style="background-color: #b2bec3; color: #0a3d62">
              <tr class="text-center">
                <th style="width:30%">Nature of Offence</th>
                <th style="width:10%">Fine</th>
                <th style="width:60%">Remarks</th>
              </tr>
            </thead>
            <tbody>
              <tr style="text-align: center">
                <td>Dry Day Violation</td>
                <td>3000</td>
                <td>Selling of alcohols on Tuesday</td>
              </tr>
              <tr style="text-align: center">
                <td>Dry Day violation</td>
                <td>500</td>
                <td>Selling of alcohols on Tuesday</td>
              </tr>
              <tr style="text-align: center">
                <td>Dry Day Violation</td>
                <td>3000</td>
                <td>Selling of alcohols on Tuesday</td>
              </tr>
              <tr style="text-align: center">
                <td>Dry Day violation</td>
                <td>500</td>
                <td>Selling of alcohols on Tuesday</td>
              </tr>
            </tbody>         
      </div>
  </div>
</div>
<br>
@endsection 


