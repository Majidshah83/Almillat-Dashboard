@extends('dashboard.layouts.master')

@section('content')

<form action="{{route('store-event')}}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputPassword1"><strong>Event Title:</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Title"  name="title" required>
      @if ($errors->has('title'))
     <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
  </div>
</br>
  <div class="form-group">
    <label for="exampleInputPassword1"><strong> Event Image:</strong></label>
    <input type="file" class="form-control" id="exampleInputPassword1"  name="image" required style="border: 1px solid #eee; background: #fff;">
      @if ($errors->has('image'))
     <span class="text-danger">{{ $errors->first('image') }}</span>
    @endif

  </div>
</br>
<div class="form-group">
    <label for="exampleInputPassword1"><strong>Event Date:</strong></label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Name"  name="event_Date" required>
      @if ($errors->has('event_Date	'))
     <span class="text-danger">{{ $errors->first('event_Date') }}</span>
    @endif
  </div>
</br>
<div class="form-group">
    <label for="exampleInputPassword1"><strong>Event From:</strong></label>
    <input type="time" class="form-control" id="exampleInputPassword1"   name="event_from" required>
      @if ($errors->has('event_from'))
     <span class="text-danger">{{ $errors->first('event_from') }}</span>
    @endif
  </div>
</br>
<div class="form-group">
    <label for="exampleInputPassword1"><strong>Event To:</strong></label>
    <input type="time" class="form-control" id="exampleInputPassword1"   name="event_to" required>
      @if ($errors->has('event_to'))
     <span class="text-danger">{{ $errors->first('event_to') }}</span>
    @endif
  </div>
</br>
<div class="form-group">
    <label for="exampleInputPassword1"><strong>Event Location:</strong></label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Event Location"  name="location" required>
      @if ($errors->has('location'))
     <span class="text-danger">{{ $errors->first('location') }}</span>
    @endif
  </div>
</br>

  <div class="form-group">
    <label for="exampleInputPassword1"></label>
    <label><strong>Short Description:</strong></label><br>
      <textarea id="w3review" name="short_description" rows="8" cols="122" placeholder="Short Descrition ">
</textarea>
      @if ($errors->has('short_description'))
     <span class="text-danger">{{ $errors->first('short_description') }}</span>
    @endif
  </div>
</br>
  <div class="form-group">
<label><strong>Long Description:</strong> </label>
<textarea class="form-control" id="body" placeholder="Enter the Description" name="long_description"></textarea>
  @if ($errors->has('long_description'))
     <span class="text-danger">{{ $errors->first('long_description') }}</span>
    @endif
</div>
  <button  class="btn btn-primary" style="margin-top: 20px;">Submit</button>
</form>


@endsection

