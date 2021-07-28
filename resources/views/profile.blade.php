@extends('layouts.layout')

@section('title', 'User Profile')

@section('content')
<div class="container text-light">

  <div class="page-header">
    <h1>Welcome {{ $user['name'] }}!!!</h1>      
  </div>
  
    <p>This is some text.</p>      
    <p>This is another text.</p> 

    <form action="{{ route('user.logout') }}" method="POST">
	    <input type="submit" value="Logout" class="btn">
    </form>     

</div>
@endsection