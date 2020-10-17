<!-- <!DOCTYPE html>
<html>
<head>
	<title>Demo student list</title>
	<style type="text/css">
		h3{
			color: red;
		}
	</style>
</head>
<body>
<h1>002007012020_list</h1><br>
<h3>{{$err}}</h3>
<br> -->
<!-- header se dung chung voi list -->
	<!-- <header><h1 class="">Header List</h1></header> -->
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
<!-- <footer>footer list</footer>
</body>
</html> -->