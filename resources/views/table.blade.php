@extends('layouts')
@section('title', 'Data Members')
@section('content')
<a href="{{url('content/add')}}" class="btn btn-success">Add Data</a>
<table class="table table-striped">
	<thead>
		<tr>
			<th>No</th>
			<th>Fullname</th>
			<th>Email</th>
			<th></th>
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
	
		@foreach($data as $d)
		<tr>
			<td>{{ $d->fullname }}</td>
			<td>{{ $d->email }}</td>
			<td><a href="{{ url('content/edit/'.$d->id)}}" class='btn btn-warning'>Edit</a></td>
			<td><a href="{{ url('content/detail/'.$d->id)}}" class='btn btn-info'>Detail</a></td>
			<td><a href="{{ url('content/del/'.$d->id)}}" class='btn btn-danger'>Delete</a></td>
		</tr>
		@endforeach
	</tbody>
</table>
{{ $data->links() }}
@endsection

