@extends('layouts.app')

@section ('title', 'Login Page')

@section('after-scripts')
<link rel="stylesheet" type="text/css" href="{{asset('auth/css/main.css')}}">
@endsection
@section('content')
	<form enctype="POST" action="{{url('login')}}" method="POST">
		@csrf
	    <div class="container">
	        <h1>Login</h1>
	        <p>Please fill in this form to SignIn.</p>
	        <label for="email"><b>Email</b></label>
	        <input type="text" placeholder="Enter Email" name="email" required>
	        <label for="password"><b>Password</b></label>
	        <input type="password" placeholder="Enter Password" name="password" required>
	        <label for="email"><b>Phone Number</b></label><br>
	        <div class="clearfix">
	            <button type="submit" class="btn">Login</button>
	        </div>
	    </div>
	</form>
@endsection