@extends('layouts.app')

@section('after-scripts')
<link rel="stylesheet" type="text/css" href="{{asset('auth/css/main.css')}}">
@endsection
@section('content')
	<form method="POST" action="{{url('register')}}">
		@csrf
	    <div class="container">
	        <h1>Sign Up</h1>
	        <p>Please fill in this form to create an account.</p>
	        <label for="name"><b>Username</b></label>
	        <input type="text" name="name" placeholder="Enter name" required>
	        <label for="email"><b>Email</b></label>
	        <input type="text" placeholder="Enter Email" name="email" required>
	        <label for="password"><b>Password</b></label>
	        <input type="password" placeholder="Enter Password" name="password" required>
	        <label for="password"><b>Confirm Password</b></label>
	        <input type="password" placeholder="Confirm Password" name="password_confirmation" required>
	        <p>By creating an account you agree to our <a href="#" style="color:red">Terms & Privacy</a>.</p>
	        <div class="clearfix">
	            <button type="submit" class="btn">Sign Up</button>
	        </div>
	    </div>
	</form>

	<div class="youtubeBtn">
      <a href="{{url('login')}}">
          <span>Login</span>
          <i class="fab fa-youtube"></i>
      </a>
    </div>
@endsection