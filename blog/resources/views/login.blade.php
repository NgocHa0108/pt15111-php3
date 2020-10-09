@extends('layout.master')
@section('title','login')
@section('header','Header dung chung voi List')
@section('content')

	<form method="POST" action="{{ route('post_login') }}">
		@csrf
		<input type="text" name="name">
		<input type="password" name="password">
		<button type="submit">submit</button>
	</form>
@endsection
@section('footer','footer login')
