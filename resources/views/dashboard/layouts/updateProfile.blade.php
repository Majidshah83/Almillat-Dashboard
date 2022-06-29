
@extends('dashboard.layouts.master')
@section('title',$meta_title)
@section('description',$meta_description)
@section('keywords',$meta_keywords)
@section('content')
 <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Update Profile
                    </h2>

                  @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
                </div>
                <div class="grid grid-cols-12 gap-6">

                    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                        <!-- BEGIN: Display Information -->
                        <div class="intro-y box lg:mt-5">


                        </div>
                        <!-- END: Display Information -->
                        <!-- BEGIN: Personal Information -->
                        <div class="intro-y box mt-5">
                         <form action="{{ route('update-profile') }}" method="POST" enctype="multipart/form-data">
                                       @csrf
                            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Personal Information
                                </h2>
                            </div>
                            <div class="p-5">
                                <div class="grid grid-cols-12 gap-x-5">

                                    <div class="col-span-12 xl:col-span-6">

                                        <div class="mt-3">
                                            <input type="hidden" name="id" value="{{$user->id}}">
                                            <label for="update-profile-form-7" class="form-label">First Name</label>
                                            <input id="update-profile-form-7" type="text" class="form-control" name="first_name" placeholder="First Name" value="{{$user->first_name}}">
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-7" class="form-label">Last Name</label>
                                            <input id="update-profile-form-7" type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{$user->last_name}}">
                                        </div>
                                        <div>
                                            <label for="update-profile-form-6" class="form-label">Email</label>
                                            <input id="update-profile-form-6" type="text" class="form-control" name="email" placeholder="Email" value="{{$user->email}}">
                                        </div>

                                        <div class="mt-3">
                                            <label for="update-profile-form-9" class="form-label">City</label>
                                            <input id="update-profile-form-9" type="text" class="form-control" placeholder="City" name="city" value="{{$user->city}}">
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-6">

                                        <div class="mt-3 xl:mt-0">
                                            <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                            <input id="update-profile-form-10" type="number" name="phone_no" class="form-control" placeholder="Phone Number" value="{{$user->phone_no}}">
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-11" class="form-label">Address</label>
                                            <input id="update-profile-form-11" type="text" class="form-control" placeholder="Address" name="adress" value="{{$user->adress}}">
                                        </div>

                                        <div class="mt-3">
                                            <label for="update-profile-form-13" class="form-label">Zip Code</label>
                                            <input id="update-profile-form-13" type="text" class="form-control" placeholder="Zip Code" name="zipCode" value="{{$user->zipCode}}">
                                        </div>
                                          <div class="mt-3">


                                            <label for="update-profile-form-13" class="form-label">Image</label>
                                            <input id="update-profile-form-13" type="file" class="form-control" placeholder="Image" name="image" >
                                            <img src="{{'upload/profile/'.$user->image}}" alt="image" style="width: 50px; height:50px">
                                        </div>

                                    </div>

                                </div>
                                <div class="flex justify-end mt-4">
                                    <button type="submit" class="btn btn-primary w-20 mr-auto">Update</button>

                                </div>
                                 </form>
                            </div>
                        </div>
                        <!-- END: Personal Information -->
                    </div>
                </div>
@endsection
