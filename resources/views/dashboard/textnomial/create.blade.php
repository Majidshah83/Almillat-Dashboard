@extends('dashboard.layouts.master')

@section('content')

<form action="{{route('store-textnomial')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Name:</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" name="name" required>
      @if ($errors->has('name'))
     <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
</br>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1"  name="image" required>
      @if ($errors->has('image'))
     <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif
  </div>

</br>
  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <label>Message:</label><br>
      <textarea id="w3review" name="message" rows="8" cols="122" placeholder="Enter Message">
</textarea>
      @if ($errors->has('message'))
     <span class="text-danger">{{ $errors->first('message') }}</span>
    @endif
  </div>

  <button  class="btn btn-primary" style="margin-top: 20px;">Submit</button>
</form>


@endsection
