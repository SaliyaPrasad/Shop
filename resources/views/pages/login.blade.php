@extends('layout')
@section('content')

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
					
					
						<form action="{{url('/customer_login')}}" method="post">
						
							{{csrf_field()}}
							<div class="section-title">
								<h3 class="title">Login to your account</h3>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="customer_email" placeholder="Email Addres" required="">
							</div>
							<div class="form-group">
								<input class="input" type="password" name="password" placeholder="Password" required="">
							</div>
							
							
                            <div class="pull-right">
								<button class="primary-btn">Login</button>
							</div>
						</form>
						
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
				
					<div class="signup-form"><!--sign up form-->
						
						
						<form action="{{url('/customer_registration')}}" method="post"
						>
							{{csrf_field()}}
							
							
					
					
					<div class="section-title">
								<h3 class="title">New User Signup!</h3>
							</div>
							<div class="form-group">
								<input class="input" type="text" name="customer_name" placeholder="Full Name" required="">
							</div>
							<div class="form-group">
								<input class="input" type="email" name="customer_email" placeholder="Email Address" required="">
							</div>
							<div class="form-group">
								<input class="input" type="password" name="password" placeholder="Password" required="">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="mobile_number" placeholder="Mobile Number" required="">
							</div>
							
                            <div class="pull-right">
								<button class="primary-btn">Signup</button>
							</div>
							</form>
					</div>
					<!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

	
@endsection