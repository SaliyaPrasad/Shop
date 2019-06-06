@extends('layout')
@section('content')


<section id="do_action">
	<div class="container">
	<div class="col-md-12">
	<?php
                     $contents=Cart::content();

				?>
						<div class="order-summary clearfix">
							<div class="section-title">
								<h3 class="title">Order Review</h3>
							</div>
							<table class="shopping-cart-table table">
								<thead>
									<tr>
										<th>Product</th>
										<th></th>
										<th class="text-center">Price</th>
										<th class="text-center">Quantity</th>
										<th class="text-center">Total</th>
										<th class="text-right"></th>
									</tr>
								</thead>
								<tbody>
								<?php foreach ($contents as $v_contents) {?>
									<tr>
										<td class="thumb"><img src="{{URL::to($v_contents->options->image)}}" alt=""></td>
										<td class="details">
											<a href="#">{{$v_contents->name}}</a>
											<ul>
												<li><span>Size: XL</span></li>
												<li><span>Color: Camelot</span></li>
											</ul>
										</td>
										<td class="price text-center"><strong>${{$v_contents->price}}</strong><br><del class="font-weak"><small>$40.00</small></del></td>
										<td class="qty text-center">
										
										<form action="{{url('/update-cart')}}" method="post">
									{{ csrf_field()}}
								
										<input class="input" type="number" name="qty" value="{{$v_contents->qty}} ">
										<input  type="hidden" name="rowId" value="{{$v_contents->rowId}}"  >
									<input type="submit" name="submit" value="update" class="btn btn-sm btn-default"></form></td>
										<td class="total text-center"><strong class="primary-color">${{$v_contents->total}}</strong></td>
										<td class="text-right"><button class="main-btn icon-btn"><a href="{{('/delete-to-cart/'.$v_contents->rowId)}}" > <i class="fa fa-close"></i></button></td>
									</tr>
									
								</tbody>
								<tfoot>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SUBTOTAL</th>
										<th colspan="2" class="sub-total">${{$v_contents->total}}</th>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>SHIPING</th>
										<td colspan="2">Free Shipping</td>
									</tr>
									<tr>
										<th class="empty" colspan="3"></th>
										<th>TOTAL</th>
										<th colspan="2" class="total">${{$v_contents->total}}</th>
									</tr>
								</tfoot>
								<?php }?>
							</table>
							
						</div>

					</div>
		
		 <div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
					<form action="{{url('/order-place')}}" method="post">
					{{csrf_field()}}
					<input type="radio" name="payment_method" value="visa">Credit Or Debit Card<br>
					<input type="radio" name="payment_method" value="paypal">paypal<br>
					<input type="radio" name="payment_method" value="ezcash">ezcash<br>
					
					<div class="pull-right">
								<button class="primary-btn">Place Order</button>
							</div>
					</form>
				</div>
				</div>
	</div>
</section><!--/#do_action-->

@endsection