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
    <th>parent_id</th>
    <th>name</th>
    <th>status</th>
    <th>total : {{count($categoryList)}}</th>
   
   
    
  </thead>
  <tbody>
    @foreach($categoryList as $category)
    <tr>
      <td>{{ $category->id }}</td>
      <td>{{ $category->parent_id }}</td>
      <td>{{ $category->name }}</td>
      <td>{{ $category->status }}</td>

     
    
     
     
                 
    </tr>
    @endforeach

    
  </tbody>
</table>
@endsection