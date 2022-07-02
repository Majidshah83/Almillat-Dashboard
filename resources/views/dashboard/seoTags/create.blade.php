@extends('dashboard.layouts.master')
@section('content')


<form method="POST" action="{{route('store-tag')}}">
    @csrf
 <div style="display: flex; margin-top:20px">
    <div style="flex: 1;">
    <label>Title:</label><br>
      <input type="text" class="form-control" name="title" placeholder="Title" style="width: 81%;margin-bottom: 20px;">
    </br>
        @if ($errors->has('title'))
     <span class="text-danger">{{ $errors->first('title') }}</span>
    @endif
    </br>
       <label style="margin-top:20px;">Key Words:</label><br>
      <input type="text" class="form-control" name="key_words" placeholder="Key Words" style="width: 81%;margin-bottom:20px">
       </br>
        @if ($errors->has('key_words'))
     <span class="text-danger">{{ $errors->first('key_words') }}</span>
    @endif
      </br>
             <label  style="margin-top:20px;">Robots:</label><br>
      <input type="text" class="form-control" name="robots" placeholder="Robots Tag" style="width: 81%;margin-bottom:20px">
       </br>
       @if ($errors->has('robots'))
     <span class="text-danger">{{ $errors->first('robots') }}</span>
    @endif

</br>
             <label  style="margin-top:20px;">Twitter Title:</label><br>
      <input type="text" class="form-control" name="twitter_title" placeholder="Twitter Title" style="width: 81%;margin-bottom:20px">
       </br>
       @if ($errors->has('twitter_title'))
     <span class="text-danger">{{ $errors->first('twitter_title') }}</span>
    @endif
</br>
<label  style="margin-top:20px;">Description:</label><br>
      <textarea  name="description" rows="4" cols="50">
</textarea>
 </br>
       @if ($errors->has('description'))
     <span class="text-danger">{{ $errors->first('description') }}</span>
    @endif

      </br></br>
     <label  style="margin-top:20px;">Twitter Description:</label><br>
      <textarea  name="twitter_description" rows="4" cols="50">
</textarea>
 </br>
@if ($errors->has('twitter_description'))
     <span class="text-danger">{{ $errors->first('twitter_description') }}</span>
    @endif
    </div>
     <div style="flex: 1">
    <label>Twitter Card:</label><br>
      <input type="text" class="form-control" name="twitter_card" placeholder="twitter card" style="width: 81%;margin-bottom:20px">
       </br>
      @if ($errors->has('twitter_card'))
     <span class="text-danger">{{ $errors->first('twitter_card') }}</span>
    @endif
      </br>
         <label  style="margin-top:20px;">Twitter Site:</label><br>
      <input type="text" class="form-control" name="twitter_site" placeholder="Twitter Site" style="width: 81%;margin-bottom:20px">
       </br>
         @if ($errors->has('twitter_site'))
     <span class="text-danger">{{ $errors->first('twitter_site') }}</span>
    @endif
    </br>
    <label>Ogsite Title:</label><br>
      <input type="text" class="form-control" name="ogsite_title" placeholder="Ogsite Title" style="width: 81%;margin-bottom:20px">
       </br>
       @if ($errors->has('ogsite_title'))
     <span class="text-danger">{{ $errors->first('ogsite_title') }}</span>
    @endif
      </br>
      <label>Ogsite Name:</label><br>
      <input type="text" class="form-control" placeholder="Ogsite Name" name="ogsite_name" style="width: 81%;margin-bottom:20px">
       </br>
       @if ($errors->has('ogsite_name'))
     <span class="text-danger">{{ $errors->first('ogsite_name') }}</span>
    @endif
      </br>
         <label  style="margin-top:20px;">Select Page:</label><br>
      <select name="page_name" style=" width: 81%;">
   <option value="dashboard">Dashboard</option>
  <option value="home">Home</option>
  <option value="about">About</option></option>
  <option value="contact_us">Contact Us</option>

</select>
 </br>
  @if ($errors->has('page_name'))
     <span class="text-danger">{{ $errors->first('page_name') }}</span>
    @endif
    </br> </br>
    <label  style="margin-top:20px;">Ogsite Description:</label><br>
      <textarea id="w3review" name="ogsite_description" rows="4" cols="50">
</textarea>
 </br>
@if ($errors->has('ogsite_description'))
     <span class="text-danger">{{ $errors->first('ogsite_description') }}</span>
    @endif

    </div>


</div>
<div style="text-align: center;margin-top: 30px;">
<button style="    padding: 10px 80px;" type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

@endsection
