@extends('dashboard.layouts.master')
@section('title',$meta_title)
@section('description',$meta_description)
@section('keywords',$meta_keywords)
@section('content')

<form action="{{route('store-image')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image" style="border: 1px solid #eee; background: #fff;">
      @if ($errors->has('image'))
     <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif
  </div>

  <button  class="btn btn-primary" style="margin-top: 20px;">Submit</button>
</form>
@endsection
