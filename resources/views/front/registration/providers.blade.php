    @extends('admin.layouts.sidebar')

    @section('page')
        Create BIN/EIN Providers
    @endsection

    @section('content')
    
        <br>

        <div style="position: absolute; float:right; border-radius: 2px; margin:0; border: 1px solid #f2f2f2; margin-left:480px; width:42%; padding:10px;">
            <div style="text-align: center; font-weight: bold; font-size: 18px;">Create BIN/EIN Issuer</div>
            <hr>
            <div style="text-align: center;">
                @if(count($errors)>0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                                @endforeach
                        </ul>
                    </div>
                @endif
                @if(\Session::has('success'))
                    <div class="alert alert-success">
                        <p>{{Session::get('success')}}</p>
                    </div>
                    @endif
                <form method="post" action="{{url('/admin/providers')}}">
                    {{csrf_field()}}
                    <div class="form-group">
                    Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="name" type="text" style="border:2px solid #3399ff; border-radius:6px;"><br><br>
                    </div>
                    <div class="form-group">
                    CID No: &nbsp;<input type="text" name="cid" style="border:2px solid #3399ff; border-radius:6px;"><br><br>
                    </div>
                    <div class="form-group">
                    Designation: &nbsp;<input type="text" name="desig" style="border:2px solid #3399ff; border-radius:6px;"><br><br>
                    </div>
                    <div class="form-group">
                    Email Address: &nbsp;<input type="text" name="email" style="border:2px solid #3399ff; border-radius:6px;"><br><br>
                    </div>
                    <div class="form-group">
                    Password: &nbsp;<input type="text" name="pwd" style="border:2px solid #3399ff; border-radius:6px;"><br><br>
                    </div>
                    <div class="form-group">
                       Confirm Password: &nbsp;<input type="text" name="c_pwd" style="border:2px solid #3399ff; border-radius:6px;"><br><br>
                    </div>
    
                <div>
                    <input type="reset" class="btn btn-outline-primary">
                    <input type="submit" class="btn btn-outline-primary" style="margin-left:100px;">
                </div>
                </form><br>

            </div>
        </div>   
@endsection
