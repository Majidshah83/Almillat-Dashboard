@extends('dashboard.layouts.master')
@section('title',$meta_title)
@section('description',$meta_description)
@section('keywords',$meta_keywords)
@section('content')
 <div class="overflow-x-auto">
 @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
     <table class="table mt-12">
        <div class="card-header">
                     <span class="float-right">
                        <a class="btn btn-primary" href="{{route('create-logo')}}">Create Logo</a>
                    </span>
            </div>
         <thead class="table-light">
             <tr>
                 <th class="whitespace-nowrap">Id</th>
                 <th class="whitespace-nowrap">Image</th>
                 <th class="whitespace-nowrap">Action</th>
             </tr>
         </thead>
         <tbody>
@foreach($logo as $logo)
             <tr>
                <td>{{$logo->id}}</td>
                <td><img src="{{'upload/logo/'.$logo->images }}" width="80" height="90">
</td>
                            <td>


                                        <a class="btn btn-primary" href="{{ route('edit-logo',$logo->id) }}">Edit</a>

                                         <a class="btn btn-danger" href="{{ route('destroy-logo',$logo->id) }}">Delete</a>



                                  </td>

             </tr>

          @endforeach
         </tbody>
     </table>

 </div>

 </div>



@endsection
