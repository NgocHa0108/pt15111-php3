<!-- Ke thua view admin-layout master -->
@extends('layout.master')

<!-- Thay doi noi dung rieng ung voi @yield('title') ben master -->
@section('title', ' 1 student ')
@section('ha','của em nó ra 4 bản ghi cùng một đối tượng id truyền vào')
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
    @foreach($studentObj as $key )
   
    <tr>
      <td>{{ $studentObj->id }}</td>
      <td>{{ $studentObj->name }}</td>
      <td>{{ $studentObj->phone }}</td>
      <td>{{ $studentObj->age }}</td>
      <td>{{$studentObj->gender==0?"nu":"nam"}}</td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection