@extends('layout.master')
	@section('title','002007012020_list')
	@section('header','Header List')

	@section('content')
<table border="1" class="table">
	<thead>
		<th>id</th>
		<th>name</th>
		<th>phone</th>
		<th>age</th>
		<th>gender</th>
		
	</thead>
	<tbody>
		@foreach($studentList as $student)
		<tr>
			<td>{{ $student->id }}</td>
			<td>{{ $student->name }}</td>
			<td>{{ $student->phone }}</td>
			<td>{{ $student->age }}</td>
			<td>{{$student->gender==0?"nu":"nam"}}</td>
			
		</tr>
		@endforeach
	</tbody>
</table>
@endsection
@section('footer','footer list')