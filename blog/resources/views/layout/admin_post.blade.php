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
    <th>desc</th>
    <th>content</th>
    <th>image_url</th>
    <th>status</th>
    <th>student</th>
    <th>action  <a href="{{ route('postss.create') }}">
                      <button>Add new</button>
                    </a>
    </th>
    
  </thead>
  <tbody>
    @foreach($postList as $post)
    <tr>
      <td>{{ $post->id }}</td>
      <td>{{ $post->desc }}</td>
      <td>{{ $post->content }}</td>

      <td><img src="{{ substr($post->image_url, 0, 4) == 'http' ? $post->image_url : asset($post->image_url) }}" height="50"></td>
      <td>{{ $post->status == 1?'co':'khong' }}</td>
       <td>{{ $post->getStudentName()}}</td>
    
     
     
                 
    </tr>
    @endforeach

    
  </tbody>
</table>
@endsection