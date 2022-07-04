@extends('dashboard.layouts.master')
@section('content')

<form  method="POST" action="{{route('store-blog')}}" enctype="multipart/form-data">
    @csrf

   <div class="form-group">
    <label for="exampleInputPassword1"><strong>Title:</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="title" placeholder="Title" required>
      @if ($errors->has('title'))
     <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
  </div>
</br>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Feature Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image" required>
       @if ($errors->has('image'))
     <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
  </div>
  </br>





                <!-- /.form group -->

<div class="form-group">
<label><strong>Description:</strong> </label>
<textarea class="form-control" id="body" placeholder="Enter the Description" name="content"></textarea>
  @if ($errors->has('content'))
     <span class="text-danger">{{ $errors->first('tag') }}</span>
    @endif
</div>
</br>
<div class="form-group">
                     <label><strong>Tag</strong></label>
                        <input style="width: 100%;" class="form-control" type="text" data-role="tagsinput" name="tag">
                         @if ($errors->has('tag'))
     <span class="text-danger">{{ $errors->first('tag') }}</span>
    @endif
                    </div>
  <button  class="btn btn-primary" style="margin-top: 20px;">Submit</button>
</form>


<style>
    .bootstrap-tagsinput .tag{
        color: #000 !important;
    }
    .bootstrap-tagsinput input{
        width: 100% !important;
    }
</style>




@endsection
