@extends('dashboard.layouts.master')

@section('content')

<form action="{{route('store-service')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Service Name:</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name"  name="name" required>
      @if ($errors->has('name'))
     <span class="text-danger">{{ $errors->first('name') }}</span>
    @endif
  </div>
</br>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong> Service Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1"  name="image" required>
      @if ($errors->has('image'))
     <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif

  </div>

</br>

  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <label><strong>Short Description:</strong></label><br>
      <textarea id="w3review" name="short_descrition" rows="8" cols="122" placeholder="Short Descrition ">
</textarea>
      @if ($errors->has('short_descrition'))
     <span class="text-danger">{{ $errors->first('short_descrition') }}</span>
    @endif
  </div>
</br>
  <div class="form-group">
<label><strong>Long Description:</strong> </label>
<textarea class="form-control" id="body" placeholder="Enter the Description" name="long_descrition"></textarea>
  @if ($errors->has('content'))
     <span class="text-danger">{{ $errors->first('tag') }}</span>
    @endif
</div>
  <button  class="btn btn-primary" style="margin-top: 20px;">Submit</button>
</form>


@endsection

