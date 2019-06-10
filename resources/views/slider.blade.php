@section('slider')
<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					
					<ul class="category-list">
				
						<li class="dropdown side-dropdown">
						<?php $all_published_category=DB::table('tbl_category') ->where('publication_status',1) ->get(); foreach($all_published_category as $v_category){?>
							<a href="#" >{{$v_category->category_name}} </a>
							<div class="custom-menu">
								<div class="row">
								
										
								
									</div>
									
								</div>
								<?php }  ?>
							</div>
							
						</li>
						
					</ul>
			
				
				</div>
				<!-- /category nav -->
                @endsection