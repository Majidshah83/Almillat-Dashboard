@extends('dashboard.layouts.master')

@section('content')
 <div class="overflow-x-auto">
 @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
     <table class="table mt-12">

         <thead class="table-light">
             <tr>

                 <th class="whitespace-nowrap">Title</th>
                 <th class="whitespace-nowrap">Image</th>
                 <th class="whitespace-nowrap">Description</th>
                 <th class="whitespace-nowrap">Tags</th>
                 <th class="whitespace-nowrap">Action</th>
             </tr>
         </thead>

         <tbody>
            @foreach($blog as $blog)
             <tr>
                 <td>{{$blog->title}}</td>
                <td><img src="{{'upload/blog/'.$blog->image }}" width="80" height="90">
</td>

<td>{{$blog->content}}</td>
<td>{{$blog->tag}}</td>
                            <td style="margin-top: 22px;display: flex;margin-bottom: -21px;">


                                         <a class="btn btn-primary" href="{{ route('edit-blogo',$blog->id) }}" style="margin-right: 5px;">Edit</a>

                                         <a class="btn btn-danger" href="{{ route('destroy-blogo',$blog->id) }}">Delete</a>
                                          <a class="btn btn-success" style="margin-left: 7px;" href="">View</a>



                                  </td>

             </tr>

@endforeach
         </tbody>

     </table>

 </div>

 </div>



@endsection
