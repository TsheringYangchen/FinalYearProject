@extends('admin.layouts.master')

@section('page')
    Create BIN/EIN Providers
@endsection

@section('content')

<div class="row">

    <div class="col-md-12">

        <div class="card col-md-8">
            <div class="card-body">

                @include('admin.layouts.message')

                <h4 class="card-title">Add BIN/EIN Providers</h4>
                <hr>
                
                @if ( $errors->any() )

                    <div class="alert alert-success">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                <div class="jumbotron">

                <form action="/provider/register" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label><b>Provider Name:</b></label>
                        <input type="text" name="Issuername" placeholder="Provider Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label><b>CID Number:</b></label>
                        <input type="text" name="cid" placeholder="CID Number" class="form-control">
                    </div>
					<div class="form-group">
						<label><b>Designation:</b></label>
							<input id="desig" type="text" class="form-control " name="designation"> 
						</div>

					<div class="form-group">
						<label><b>Phone Number :</b></label>
							<input id="phone" type="text" class="form-control " name="pno"> 
						</div>
					
					<div class="form-group">
						<label><b>Email Address:</b></label>
							<input id="email" type="email" class="form-control " name="email">
						 </div>
					
					
					<div class="form-group">
						<label><b>Password</b></label>
							<input id="password" type="password" class="form-control " name="password">
						 </div>
					<div class="form-group">
						<label><b>Confirm Password</b></label>
							<input id="confirm_password" type="password" class="form-control" name="confirm_password"> 
						</div>
                    <!--div class="form-group">
                        <input type="file" name="image" class="form-control">
                    </div-->

                    <div class="form-group mb-5">
                        <button class="btn btn-outline-info col-md-2" style="margin-bottom: 20px"><b>Register</b></button>
                    </div>

                </form>
            </div>

            </div>
        </div>

    </div>

</div>


@endsection
    
