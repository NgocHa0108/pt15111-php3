<!-- Ke thua view admin-layout master -->
@extends('layout.master')

<!-- Thay doi noi dung rieng ung voi @yield('title') ben master -->
@section('title', 'Test layout adminLTE')

<!-- Thay doi noi dung rieng ung voi @yield('content') ben master -->
@section('content')
<!-- Content Wrapper. Contains page content -->
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