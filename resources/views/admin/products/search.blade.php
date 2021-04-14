@extends('admin.layouts.master')
@section('content')
<div>
  <h3>View License Holders</h3>
</div><br>
<form action="{{URL::to('/search')}}" method="get" role="search" style="width: 43%">
  {{ csrf_field() }}
  <div class="input-group">
      
      <input type="text" class="form-control mr-2" name="q" placeholder="Search License Holders">
        <span class="input-group-btn mr-1">
          <button class="btn btn-info" type="submit">
              <span class="fa fa-search mt-2"></span>
          </button>
      </span>
  </div>
</form>
<br>
<div class="row">
    <div class="col-md-8 offset-2">
<table class="table table-responsive table-bordered">
    <thead class="table-dark text-center">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>License Number</th>
        <th>Image</th>
        <th>EDIT</th>
        <th>DELETE</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($licenses as $license)
        <tr>
          <td>{{ $license->id }}</td>
          <td>{{ $license->LHname }}</td>
          <td>{{ $license->license }}</td>
          <td>
            <img src="{{ url('uploads').'/'.$license->image}}" alt="{{ $license->image }}" class="mx-auto d-block img-thumbnail" style="width: 120px; height : 100px">
          </td>
          <td class="text-center">
            <a href="/license-edit/{{$license->id}}" class="btn btn-primary mt-4">EDIT</a>
          </td>
          <td>  
            <a href="/deleteLH/{{$license->id}}" class="btn btn-danger mt-4" onclick="return confirm('Are you sure you want to delete?')">DELETE</a>
          </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
</div>
@endsection



                