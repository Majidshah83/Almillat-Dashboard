@extends('dashboard.layouts.master')

@section('content')
 <div class="overflow-x-auto">
 @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div>
        @endif
     <table class="table mt-12">
        <div class="card-header">
                     
            </div>
         <thead class="table-light">
             <tr>

                 <th class="whitespace-nowrap">Serivce Name</th>
                  <th class="whitespace-nowrap">Image</th>
                  <th class="whitespace-nowrap">Short Description</th>
                 <th class="whitespace-nowrap">Action</th>
             </tr>
         </thead>
         <tbody>
@foreach($service as $logo)
             <tr>
                <td>{{$logo->name}}</td>
                <td><img src="{{'upload/service/'.$logo->image }}" width="80" height="90">
</td>
<td>{{$logo->short_descrition}}</td>

                        <td>



                                     <a class="btn btn-primary" href="{{ route('edit-service',$logo->id) }}">Edit</a>
                                      <a class="btn btn-danger" href="{{ route('destroy-service',$logo->id) }}">Delete</a>



                                  </td>

             </tr>

          @endforeach
         </tbody>
     </table>

 </div>

 </div>



<style>
    .toggle-group .toggle-off.btn {

    background-color: #1e40af !important;
    color: #fff !important;
}
</style>

@endsection
