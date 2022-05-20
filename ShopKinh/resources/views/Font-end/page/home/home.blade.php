@extends('Font-end.master')

@section('content')
@include('Font-end.layout.slide')
	<div class="section group">
		  <div class="cont span_2_of_3">
		  	<h2 class="head">Sản Phẩm Mới</h2>
			<div class="top-box1">
	
				@foreach($sanpham as $spm)
				<div class="top-box">
				<div class="col_1_of_3 span_1_of_3"> 
					<a href="{{route('Detail')}}">
						<div class="inner_content clearfix">
							<div class="product_image">
								<img style="width: 350px; height: 350px;" src="images/{{$spm->san_pham->hinh_anh ??'code defaul'}}" alt="{{$spm->ten_sp}}"/>
							</div>
							<div class="sale-box"><span class="on_sale title_shop">New</span></div>	
							<div class="price">
							<div class="cart-left">
									<p style="text-transform: uppercase;display:inline-block;white-space: nowrap;overflow: hidden;text-overflow: ellipsis;max-width: 30ch;">
										{{$spm->ten_sp}}
									</p>
									<div class="price1">
									<span class="actual">{{number_format((int)$spm->gia*((100-(int)$spm->giam_gia)/100),0,",",".")}} Đ</span>
									</div>
								</div>
								<div class="cart-right"> </div>
								<div class="clear"></div>
							</div>				
						</div>
						</a>
				 <div class="clear"></div>
				</div>
				</div>
				@endforeach
				<div class="clear"></div>
			</div>
			
			 
		  <h2 class="head">Staff Pick</h2>
		  <div class="top-box1">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="{{route('Detail')}}">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="web/images/pic8.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					 <a href="{{route('Detail')}}">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="web/images/pic4.jpg" alt=""/>
					</div>
				    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="web/images/pic2.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>	
	        <h2 class="head">New Products</h2>	
		    <div class="section group">
			  <div class="col_1_of_3 span_1_of_3">
			  	 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="web/images/pic5.jpg" alt=""/>
					</div>
                     <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
					<a href="single.html">
					<div class="inner_content clearfix">
					<div class="product_image">
						<img src="web/images/pic2.jpg" alt=""/>
					</div>
					 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="col_1_of_3 span_1_of_3">
				 <a href="single.html">
				 <div class="inner_content clearfix">
					<div class="product_image">
						<img src="web/images/pic3.jpg" alt=""/>
					</div>
                   	 <div class="sale-box"><span class="on_sale title_shop">New</span></div>	
                    <div class="price">
					   <div class="cart-left">
							<p class="title">Lorem Ipsum simply</p>
							<div class="price1">
							  <span class="actual">$12.00</span>
							</div>
						</div>
						<div class="cart-right"> </div>
						<div class="clear"></div>
					 </div>				
                   </div>
                   </a>
				</div>
				<div class="clear"></div>
			</div>			 						 			    
		  </div>
<!-- SLIDE RIGTH -->
		
	<div class="clear"></div>
	</div>
	
    @endsection