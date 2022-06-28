
@extends('dashboard.layouts.master')
@section('title', 'UpdateProfile')
@section('content')
 <div class="intro-y flex items-center mt-8">
                    <h2 class="text-lg font-medium mr-auto">
                        Update Profile
                    </h2>
                </div>
                <div class="grid grid-cols-12 gap-6">

                    <div class="col-span-12 lg:col-span-8 2xl:col-span-9">
                        <!-- BEGIN: Display Information -->
                        <div class="intro-y box lg:mt-5">


                        </div>
                        <!-- END: Display Information -->
                        <!-- BEGIN: Personal Information -->
                        <div class="intro-y box mt-5">
                            <div class="flex items-center p-5 border-b border-slate-200/60 dark:border-darkmode-400">
                                <h2 class="font-medium text-base mr-auto">
                                    Personal Information
                                </h2>
                            </div>
                            <div class="p-5">
                                <div class="grid grid-cols-12 gap-x-5">
                                    <div class="col-span-12 xl:col-span-6">

                                        <div class="mt-3">
                                            <label for="update-profile-form-7" class="form-label">First Name</label>
                                            <input id="update-profile-form-7" type="text" class="form-control" name="first_name" placeholder="First Name" value="">
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-7" class="form-label">Last Name</label>
                                            <input id="update-profile-form-7" type="text" name="last_name" class="form-control" placeholder="Last Name" value="">
                                        </div>
                                        <div>
                                            <label for="update-profile-form-6" class="form-label">Email</label>
                                            <input id="update-profile-form-6" type="text" class="form-control" name="email" placeholder="Email" value="">
                                        </div>

                                        <div class="mt-3">
                                            <label for="update-profile-form-9" class="form-label">City</label>
                                            <input id="update-profile-form-9" type="text" class="form-control" placeholder="City" name="city" value="">
                                        </div>
                                    </div>
                                    <div class="col-span-12 xl:col-span-6">
                                        <div class="mt-3 xl:mt-0">
                                            <label for="update-profile-form-10" class="form-label">Phone Number</label>
                                            <input id="update-profile-form-10" type="number" name="phone_no" class="form-control" placeholder="Phone Number" value="">
                                        </div>
                                        <div class="mt-3">
                                            <label for="update-profile-form-11" class="form-label">Address</label>
                                            <input id="update-profile-form-11" type="text" class="form-control" placeholder="Address" name="adress" value="">
                                        </div>

                                        <div class="mt-3">
                                            <label for="update-profile-form-13" class="form-label">Zip Code</label>
                                            <input id="update-profile-form-13" type="text" class="form-control" placeholder="Zip Code" name="zipCode" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-end mt-4">
                                    <button type="button" class="btn btn-primary w-20 mr-auto">Save</button>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- END: Personal Information -->
                    </div>
                </div>
@endsection
