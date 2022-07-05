@extends('dashboard.layouts.master')

@section('content')

<form action="{{route('update-service')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <input type="hidden" name="id" value="{{$service->id}}">
    <label for="exampleInputPassword1"><strong>Service Name:</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name" value="{{$service->name}}" name="name" required>
      @if ($errors->has('name'))
     <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
</br>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong> Service Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image" value="{{$service->image}}" style="border: 1px solid #eee; background: #fff;">
    <img src="{{asset('upload/service/'.$service->image)}}" alt="image" style="width: 50px; height:50px">
      @if ($errors->has('image'))
     <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif

  </div>
</br>


  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <label><strong>Short Description:</strong></label><br>
      <textarea id="w3review" name="short_descrition" rows="8" cols="122" placeholder="Short Description">{{$service->short_descrition}}
</textarea>
      @if ($errors->has('short_descrition'))
     <span class="text-danger">{{ $errors->first('short_descrition') }}</span>
    @endif
  </div>
</br>
<div class="form-group">
<label><strong>Long Description:</strong> </label>
<textarea class="form-control" id="body" placeholder="Enter the Description" name="long_descrition">{{$service->long_descrition}}</textarea>
  @if ($errors->has('content'))
     <span class="text-danger">{{ $errors->first('tag') }}</span>
    @endif
</div>
</br>
  <button  class="btn btn-primary" style="margin-top: 20px;">Submit</button>
</form>


@endsection
