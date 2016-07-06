@extends('home.master')
@section('content')
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->


            <div class="row">

                <div class="col-md-6">
                    <div class="bill-to">
                        <p>Bill To</p>
                        <div class="form-one">
                            <form action="{{route('home.order.store')}}" method="POST">
                                <input type="text" placeholder="fullname*" name="fullname">
                                <input type="text" placeholder="email*" name="email">
                                <input type="text" placeholder="Address 1 *" name="address1">
                                <input type="text" placeholder="Address 2" name="address2">
                                <input type="text" placeholder="facebook*" name="facebook">
                                <input type="text" placeholder="phone*" name="phone">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div> 
                    </div>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <div class="order-message">
                            <p>Shipping Order</p>
                            <textarea name="note" placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
                        </div>	
                    </div>
                    <div class="col-sm-12">
                        <div class="shopper-info pull-right">
                            <button class="btn btn-primary" href="">Continue</button>
                        </div>
                    </div>
                            </form>
                        </div>

		  <div class="review-payment">
				<h2>Review & Payment</h2>
			</div>
                @if(isset($cart['products']))
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <th class="small image text-center">Image</th>
                                 <th class="small description text-center">Name</th>
                                <th class="small price text-center">Price</th>
                                <th class="small quantity text-center">Quantity</th>
                                <th class="small text-center">Remove</th>
                            </tr>
                         </thead>
                        <tbody>
               
                    @foreach($cart['products'] as $key => $value)
					 <tr>
							<td class="text-center">
                                <a href=""><img class="img-retina" src="{{asset("public/".$value['product']->img)}}" width="100px" height="100px" alt=""></a>
                            </<td>
							<td class="text-center">
								<h4 class="label label-warning small"><a href="#" style="color: white;">{{$value['product']->name}}</a></h4>
							</<td>
							<td class="text-center">
								<p class="label label-warning">${{$value['product']->price}}</p>
							</<td>
							<td class="text-center">
									<p class="badge badge-warning">{{$value['quantity']}}</p>
							</<td>
							<td class="text-center">
								<form action="{{route('home.checkout.deleteCart',$key)}}" method="DELETE" role="form">
                                    <button class="cart_quantity_delete" href=""><i class="fa fa-times"></i></button>
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                </form>
                           </<td>
                   </tr>
                    @endforeach
                    </tbody>
                    </table>
                </div>
                @endif
			</div>
		</div>
	</section> <!--/#cart_items-->
    @endsection