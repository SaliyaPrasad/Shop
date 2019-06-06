@extends('layout')
@section('content')

<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<form action="{{url('/save-shipping-details')}}" method="post" id="checkout-form" class="clearfix">
				{{csrf_field()}}
					<div class="col-md-6">
					<form action="{{url('/save-shipping-details')}}" method="post">
							{{csrf_field()}}
						<div class="billing-details">
						
							<div class="section-title">
								<h3 class="title">Billing Details</h3>
							</div>
							<div class="form-group">
								<input class="input" type="email" name="shipping_email" placeholder="Email">
							</div>

							<div class="form-group">
								<input class="input" type="text" name="shipping_first_name" placeholder="First Name">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="shipping_last_name" placeholder="Last Name">
							</div>
							
							<div class="form-group">
								<input class="input" type="text" name="shipping_address" placeholder="Address">
							</div>
							<div class="form-group">
								<input class="input" type="mobile_number" name="shipping_mobile_number" placeholder="Telephone">
							</div>
							<div class="form-group">
								<input class="input" type="text" name="shipping_city" placeholder="City">
							</div>
							
							
						</div>
					</div>

					<div class="col-md-6">
						<div class="shiping-methods">
							<div class="section-title">
								<h4 class="title">Shiping Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="shipping" id="shipping-1" checked>
								<label for="shipping-1">Free Shiping -  $0.00</label>
								<div class="caption">
									<p>All Shipping cost are free......!!
										<p>
								</div>
							</div>
							
						</div>

						  <div class="pull-right">
								<button class="primary-btn">Done</button>
							</div>
						</div>
					</div>

							
                          
							
					</form>
				
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

@endsection