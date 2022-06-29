@extends('dashboard.layouts.master')
@section('title',$meta_title)
@section('description',$meta_description)
@section('keywords',$meta_keywords)
@section('content')

<form action="{{route('store-image')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image" placeholder="Password">
  </div>
  <div class="form-group" style="margin-top: 20px;">
              <label>Meta Title</label>
              <input type="text" name="meta_title" class="form-control" />
            </div>
            <div class="form-group">
              <label>Meta Desciption</label>
              <input type="text" name="meta_description" class="form-control" />
            </div>
            <div class="form-group">
              <label>Meta Keyboards (Comma Separated )</label>
              <input type="text" name="meta_keywords" class="form-control" />
            </div>

  <button  class="btn btn-primary" style="margin-top: 20px;">Submit</button>
</form>


@endsection
