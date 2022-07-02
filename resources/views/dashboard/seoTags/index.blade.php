@extends('dashboard.layouts.master')

@section('content')
<div class="overflow-x-auto">
 @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
@if (\Session::has('error'))
            <div class="alert alert-success">
                <p>{{ \Session::get('error') }}</p>
            </div>
        @endif
     <table class="table mt-12">
        <div class="card-header">
                     <span class="float-right">
                        <a class="btn btn-primary" href="{{route('create-tag')}}">Create Tags</a>
                    </span>
            </div>
         <thead class="table-light">
             <tr>
                 <th class="whitespace-nowrap">Id</th>
                 <th class="whitespace-nowrap">Title</th>
                 <th class="whitespace-nowrap">Description</th>
                 <th class="whitespace-nowrap">Page</th></th>
                 <th class="whitespace-nowrap">key Words</th></th>
                 <th class="whitespace-nowrap">Action</th>

             </tr>
         </thead>
         <tbody>
       @foreach($result  as $results)
             <tr>
                <td>{{$results->id}}</td>
                <td>{{$results->title}}</td>
                <td>{{$results->description}}</td>
                <td>{{$results->page_name}}</td>
                <td>{{$results->key_words}}</td>


                            <td style="display: flex;padding-top: 32px;padding-bottom: 34px;">


                                        <a class="btn btn-primary" style="margin-right:7px;" href="{{ route('tag-edit',$results->id) }}">Edit</a>

                                         <a class="btn btn-danger" href="{{ route('tag-delete',$results->id) }}">Delete</a>



                                  </td>

             </tr>
 @endforeach

         </tbody>
     </table>

 </div>

 </div>






@endsection
