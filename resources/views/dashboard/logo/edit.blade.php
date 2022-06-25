@extends('dashboard.layouts.master')
@section('content')

<form action="{{route('edit-logo')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image" placeholder="Password">
  </div>

  <button  class="btn btn-primary" style="margin-top: 20px;">Update</button>
</form>


@endsection
