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
    <th>action  <a href="{{ route('students.create') }}">
                      <button>Add new</button>
                    </a>
    </th>
    
  </thead>
  <tbody>
    @foreach($studentList as $student)
    <tr>
      <td>{{ $student->id }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->phone }}</td>
      <td>{{ $student->age }}</td>
      <td>{{$student->gender==0?"nu":"nam"}}</td>
     <!--  <td>
        <form 
        action="{{ route('students.destroy', $student->id) }}" 
        method=" POST" 
        >
        @csrf
        <input type='hidden' name='_method' value='DELETE'>
          <button style="background-color: red; border: none" type="submit">Delete</button> 

        </form>
        <a href="{{ route('students.edit', $student->id) }}"><button style="background-color: yellow; border: none">Edit</button></a>
   
       
      </td> -->
     
                  <td>
                    <form
                      action="{{ route('students.destroy', $student->id) }}"
                      method="POST"
                    >
                      @csrf
                      <input type='hidden' name='_method' value='DELETE'>
                      <button style="background-color: red; border: none" type='submit'>Delete</button>
                    </form>
                    <a href="{{ route('students.edit', $student->id) }}">
                      <button>Edit</button>
                    </a>
                    
                  </td>
    </tr>
    @endforeach

    <tr><td colspan="7">{{ $studentList->links() }}</td></tr>
  </tbody>
</table>
@endsection