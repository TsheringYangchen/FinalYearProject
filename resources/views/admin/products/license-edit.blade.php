
@extends('admin.layouts.master')

@section('page')
    Edit License Holder
@endsection

@section('content')

<div class="row">

    <div class="col-md-12" id="register">

        <div class="card col-md-8">
            <div class="card-body">
                <h2 class="card-title">Edit License Holder</h2>
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

                <form action="/licenseupdate/{{ $license->id}}" method="POST">

                    {{ csrf_field() }} 
                    {{-- method_field('PUT')--}}
                    <input type="hidden" name="_method" value="PATCH">

                    <div class="form-group">
                        <label for="name">License Holder Name:</label>
                        <input type="text" name="LHname" value="{{ $licenses->LHname}}" placeholder="Name" id="LHname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="name">License Number:</label>
                        <input type="text" name="license" value="{{ $licenses->license}}" placeholder="License Number" id="license" class="form-control">
                    </div>

                    <div class="form-group mb-5">
                        <button type="submit" class="btn btn-primary" style="margin-bottom: 20px"> Update</button>
                        <a href="admin/viewLicense" class="btn btn-danger" style="margin-bottom: 20px"> Cancel </a>
                    </div>

                </form>

            </div>
        </div>

    </div>

</div>


@endsection
