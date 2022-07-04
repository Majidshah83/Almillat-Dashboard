@extends('dashboard.layouts.master')
@section('content')

<form  method="POST" action="{{route('update-blog')}}" enctype="multipart/form-data">
    @csrf
<input type="hidden" name='id' value="{{$blog->id}}">
   <div class="form-group">
    <label for="exampleInputPassword1"><strong>Title:</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" value="{{$blog->title}}" name="title" placeholder="Title">
      @if ($errors->has('title'))
     <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
  </div>
</br>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Feature Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1" name="image">
       @if ($errors->has('image'))
     <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
 <img src="{{asset('upload/blog/'.$blog->image)}}" alt="image" style="width: 30px; height:30px">
  </div>
</br>




                <!-- /.form group -->
                </br>
<div class="form-group">
<label><strong>Description:</strong> </label>
<textarea class="form-control" id="body" placeholder="Enter the Description" name="content" required>{{$blog->content}}</textarea>
  @if ($errors->has('content'))
     <span class="text-danger">{{ $errors->first('content') }}</span>
    @endif
</div>
</br>
<div class="form-group">
                     <label><strong>Tags :</strong></label>
                        <input style="width: 100%;" class="form-control" type="text" data-role="tagsinput" value="{{$blog->tag}}" name="tag">
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
