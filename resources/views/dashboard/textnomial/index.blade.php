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
                  <th class="whitespace-nowrap">Status</th>
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
  <td><input type="checkbox" id="toggle-two" data-id="{{$logo->id}}" class="toggle-class"
                                    data-toggle="toggle" data-style="slow" data-on="Enabled" data-off="Disabled"
                                    {{$logo->satatus==true ? 'checked':''}}></td>
                            <td>




                                         <a class="btn btn-danger" href="{{ route('destroy-textnomial',$logo->id) }}">Delete</a>



                                  </td>

             </tr>

          @endforeach
         </tbody>
     </table>

 </div>

 </div>
<script>
    //disabale enable
    $(function() {
        $('#toggle-two').bootstrapToggle({
            on: 'Enabled',
            off: 'Disabled'
        });
    })
    //get data toggle
    $('.toggle-class').on('change', function() {

        var satatus = $(this).prop('checked') == true ? 1 : 0; //prop is a slector which slect attribute
        var id = $(this).data('id');
       al
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: 'textnomi-list/changeStatus',
            data: {
                'satatus': satatus,
                'id': id,
            },

            success: function(data) {
                alert(data.success);
            }
        });
    });
</script>
<script>
    $(document).ready(function(){

    });
</script>
<style>
    .toggle-group .toggle-off.btn {

    background-color: #1e40af !important;
    color: #fff !important;
}
</style>

@endsection
