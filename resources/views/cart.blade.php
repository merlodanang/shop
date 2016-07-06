@extends('home.master')
@section('content')	
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="container">		
                <div class="page-header">
                    <h1>Checkout <small>goodluck</small></h1>
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

	<section id="do_action">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-7">
                    <div class="row">
                    <p class="pull-right">Total : <span class="badge badge-success">${{$cart['total']}}</span></p>
                    </div>
                    <div class="row">
                    <a class="btn btn-default check_out pull-right" href="{{route('home.order.index')}}">Check Out</a>
                    </div>
                    </div>
			</div>
		</div>
	</section><!--/#do_action-->
@endsection