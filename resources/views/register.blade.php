@extends('layouts.layout')

@section('title', 'Sign Up')

@section('content')
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">

            <div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			
			<div class="card-body">
				<form action="{{ route('user.register') }}" method="POST">

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="name" class="form-control" placeholder="name" name="name">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
						</div>
						<input type="email" class="form-control" placeholder="email" name="email">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="retype password" name="password_confirmation">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Register" class="btn float-right login_btn">
					</div>

				</form>
			</div>

		</div>
	</div>
</div>
@endsection