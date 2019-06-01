@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container ">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>

			</div>
			<div class="table-responsive cart_info">
			<?php
			$contents=Cart::content();
			// echo "<pre>";
			//print_r($contents);
			//echo "</pre>";

			?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($contents as $v_contents) {?>
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($v_contents->options->image) }}" height="80px" width="80px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$v_contents->name}}</a></h4>
								
							</td>
							<td class="cart_price">
								<p>${{$v_contents->price}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<form action="{{url('/update-cart')}}" method="post">
								{{csrf_field()}}
									<input class="cart_quantity_input" type="text" name="qty" value="{{$v_contents->qty}}" autocomplete="off" size="2">
									<input type="hidden" name="rowId" value="{{$v_contents->rowId}}" >
									<input type="submit" name="submit" value="update" class="btn btn-sn btn-default">
								</form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">${{$v_contents->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{('/delete-to-cart/'.$v_contents->rowId)}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
						<?php } ?>
						
					</tbody>
				</table>
			</div>
		</div>
	</section> 
				<div class="container ">
					<div class="breadcrumbs">
				<table class="alt">
          
							
				
						<tr>
							<th>Cart Sub Total</th>
							<td><span>${{Cart::subtotal()}}</span></td>
						</tr>
						<tr>
							<th>Eco Tax </th>
							<td><span>${{Cart::tax()}}</span></td>
						</tr>
						<tr>
							<th>Shipping Cost </th>
							<td><span>Free</span></td>
						</tr>
						<tr>
							<th>Total</th>
							<td><span>${{Cart::total()}}</span></td>
						</tr>
						</table>
						<br>
						<table>
						
						<tr>
							<a  href=""><button class="primary-btn"> Update</button></a>
							<?php
								 $customer_id=Session::get('customer_id');
								 ?>
							<?php if($customer_id !=  NULL){?>
								<a href="{{URL::to('/checkout')}}"><button class="primary-btn"> Checkout</button></a>
								 <?php }else{?> 
								<a href="{{URL::to('/login-check')}}"><i class="fa fa-check"></i> Checkout</a>
									<?php } ?>
									</tr>
						
						</table>	
					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->



@endsection