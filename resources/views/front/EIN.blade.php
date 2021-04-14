@extends('front.layouts.master1') 
@section('content')
<div class="container border text-center mt-2" style="background-color: #CAD3C8">
	<h3>ENTERTAINMENT INFRINGEMENT NOTICE (EIN)</h3>
<br>
<div class="container">
  <div class="row">
    <div class="col-md-9 mx-auto">
      <form method="post" action="getein" enctype="multipart/form-data">
      @csrf
        <div class="form-group row">
          <div class="col-md-6">
            <label for="license">License No</label>
            <input type="text" class="form-control" id="license" name="lno" placeholder="License Number">
          </div>
		  <div class="col-sm-6">
            <label for="inputcid">CID No</label>
            <input type="text" class="form-control" name="cno" placeholder="CID Number">
          </div>
		</div>
        <div class="form-group row">
          <div class="col-sm-6">
            <label for="inputname">Name of Licensee</label>
            <input type="text" class="form-control" name="lna" id="inputname" placeholder="License Holder Name">
          </div>
		  <div class="col-sm-6">
            <label>Date</label>
            <input type="date" class="form-control" name="lda" placeholder="DD/MM/YYYY"> 
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-6">
            <label for="inputCity">Establishment Name</label>
            <input type="text" class="form-control" name="ena" placeholder="Establishment Name">
          </div>
          <div class="col-sm-6">
            <label for="inputAddressLine2">Place</label>
            <input type="text" class="form-control" name="lp" placeholder="Place of bar/entertainment">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-12">
            <p class="font-weight-bold" style="font-size: 20px">Nature of Offence/Violations</p>
          </div>
        </div>
        <div class="alert alert-danger">
        <div class="form-container">
          <div class="form-group row">
            <div class="col-sm-4">
              <label for="dryday">1) Dry Day Violation</label>
            </div>
            <div class="col-sm-4"> 
            </div>
            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-8">
              <label for="before">2) Opening before 5PM</label>
            </div>
            
            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-8">
              <label for="after">3) Open after 11PM/12PM (Monday/Wednesday/Thursday/Sunday)</label>
            </div>
        
            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-8">
              <label for="underage">4) Open after 12PM/1AM (Friday/Saturday)</label>
            </div>
    
            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">
                </label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-8">
              <label for="fronting">5)  Open on Sunday/Monday/Thursday </label>
            </div>
            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">
                </label>
              </div>
            </div>
          </div> 

          <div class="form-group row">
            <div class="col-sm-8">
              <label for="underage">6) Selling of alcohol and alcoholic beverages/allowing entrance to underage/Monks/Students</label>
            </div>

            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">
                </label>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-8">
              <label for="before">7) Fronting/Leasing of License</label>
            </div>

            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">
                </label>
              </div>  
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-8">
              <label for="before">8) Selling alcohol to intoxicated person</label>
            </div>
            <div class="col-sm-4">
              <div class="form-check">
                <label class="form-check-label">
                <input type="checkbox" class="form-check-input" value="">
                </label>
              </div>
            </div>
          </div>
        </div> 
        </div>
    
        <div class="col-sm-12">
        <h4>Evidence Photos</h4>
        <div class="custom-file">
          <input type="file" class="form-control" name="image"  placeholder="images" multiple>
        </div>
        </div>
    </div>
  </div>
</div>
<br>
  <div class="container">
    <div class="row">
      <div class="col-md-9 mx-auto">
        <div class="container btn btn-center">
          <button class="btn btn-success text-white" type="submit" style="font-family: Verdana, Geneva, Tahoma, sans-serif">Issue EIN</button>
        </div>
      </div>
    </div>
    <br><br>
  </div>
  </form>


	<style>
	    
		.form-container
			{
				text-align: left;
			} 
</style>
	
	@endsection