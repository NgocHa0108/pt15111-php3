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
    <th>content</th>
    <th>student_id</th>
    <th>post_id</th>
    <th>students</th>
    <th>desc</th>
    
   
    
  </thead>
  <tbody>
    @foreach($commentList as $comment)
    <tr>
      <td>{{ $comment->id }}</td>
      <td>{{ $comment->content }}</td>
      <td>{{ $comment->student_id }}</td>
      <td>{{ $comment->post_id }}</td>
       <td>{{ $comment->getStudentNameComment() }}</td>
       <td>{{ $comment->getPost_desc() }}</td>
    
     
    
     
                 
    </tr>
    @endforeach

    
  </tbody>
</table>
@endsection