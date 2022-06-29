@extends('dashboard.layouts.master')
@section('title',$logo->meta_title)
@section('description',$logo->meta_description)
@section('keywords',$logo->meta_keywords)
@section('content')
<form action="{{route('update-logo')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <input type="hidden" name='id' value="{{$logo->id}}">
    <label for="exampleInputPassword1"><strong>Image:</strong></label>

    <input type="file" class="form-control" id="exampleInputPassword1" name="image" value="{{$logo->image}}" placeholder="Password">
  </div>

  <button  class="btn btn-primary" style="margin-top: 20px;">Update</button>
</form>


@endsection
