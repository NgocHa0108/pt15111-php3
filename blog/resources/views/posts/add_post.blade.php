@extends('layout.master')

@section('title', 'ADD post')

@section('content-header', "ADD  post ")
@section('content')
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul> 
    @endif

 <form
        method="POST"
        action="{{ route('postss.store') }}"
        enctype='multipart/form-data'
    >
        <!-- Them token gui len -->
        @csrf
       
        <div>
            <label >Desc</label>
            <input  type="text" name="desc" value="" />
        </div>
        <div>
            <label >content</label>
            <input  type="text" name="content" value="" />
        </div>
        <div>
            <label >image</label>
            <input  type="file" name="image_url" value="" />
        </div>
        
        <div>
            <label>Gender</label>
           <select name="student_id" id="">
               @foreach($students as $student)
                    <option value="{{ $student->id }}">{{ $student->name }}</option>

               @endforeach
           </select>
        </div>
        <div>
            Publish
            <input type="radio" name="status" value="1">
        </div>

         <div>
            UnPublish
            <input type="radio" name="status" value="0">
        </div>
        
        <div>
            <button type='submit'>ADD</button>
        </div>
    </form>

@endsection
