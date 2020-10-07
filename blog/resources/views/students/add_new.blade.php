@extends('layout.master')

@section('title', 'ADD student')

@section('content-header', "ADD  student ")
@section('content')

 <form
        method="POST"
        action="{{route('students.store') }}"
    >
        <!-- Them token gui len -->
        @csrf
       
        <div>
            <label for='name'>Name</label>
            <input id='name' type="text" name="name" value="" />
        </div>
        <div>
            <label for='phone'>Phone</label>
            <input id='phone' type="text" name="phone" value="" />
        </div>
        <div>
            <label for='age'>Age</label>
            <input id='age' type="number" name="age" value="" />
        </div>
        
        <div>
            <label>Gender</label>
            Nu
            <input type="radio" name="gender" value="0"  />
            Nam
            <input type="radio" name="gender" value="1"  />
            Khong xac dinh
            <input type="radio" name="gender" value="2"  />
        </div>
        
        <div>
            <button type='submit'>ADD</button>
        </div>
    </form>

@endsection