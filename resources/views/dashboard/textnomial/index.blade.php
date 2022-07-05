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
                 <th class="whitespace-nowrap">Id</th>
                 <th class="whitespace-nowrap">Image</th>
                  <th class="whitespace-nowrap">Message</th>

                 <th class="whitespace-nowrap">Action</th>
             </tr>
         </thead>
         <tbody>
@foreach($textnomial as $logo)
             <tr>
                <td>{{$logo->id}}</td>
                <td><img src="{{'upload/textnomial/'.$logo->image }}" width="80" height="90">
</td>
<td>{{$logo->message}}</td>





                                      <td>  <a class="btn btn-danger" href="{{ route('destroy-textnomial',$logo->id) }}">Delete</a>



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
