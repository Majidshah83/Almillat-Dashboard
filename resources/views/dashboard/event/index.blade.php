@extends('dashboard.layouts.master') @section('content')
<div class="overflow-x-auto"> @if (\Session::has('success'))
	<div class="alert alert-success">
		<p>{{ \Session::get('success') }}</p>
	</div> @endif
	<table class="table mt-12">
		<thead class="table-light">
			<tr>
				<th class="whitespace-nowrap">Title</th>
				<th class="whitespace-nowrap">Image</th>
				<th class="whitespace-nowrap">Event From</th>
                <th class="whitespace-nowrap">Event To</th>
				<th class="whitespace-nowrap">Event Date</th>
				<th class="whitespace-nowrap">Action</th>
			</tr>
		</thead>

		<tbody>
            @foreach($event as $events)

			<tr>

		<td>{{$events->title}}</td>



				<td><img src="{{'upload/event/'.$events->image}}" width="80" height="90"> </td>
                 <td>{{$events->event_from}}</td>
		<td>{{$events->event_to}}</td>
<td>{{$events->event_Date}}</td>
<td><a class="btn btn-primary" href="">Edit</a>
                                      <a class="btn btn-danger" href="{{ route('destroy-event',$events->id) }}">Delete</a></td>
			</tr>

             @endforeach
            </tbody>
	</table>
</div>
</div>

 @endsection
