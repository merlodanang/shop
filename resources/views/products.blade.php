@extends('home.master')
@section('slide')
  @include('home.slide')
@endsection
@section('content')
<section>
		<div class="container">
			<div class="row">
				@include('home.menu')
				
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        @foreach($products as $product)
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div>
									<div class="productinfo text-center">
										<a href="{{route('home.detail.show',$product->slug)}}">
                                        <img src="{{asset($product->img)}}" alt="" />
                                        </a>
										<h2>${{$product->price}}</h2>
										<p>{{$product->title}}</p>
									<form action="{{route('home.checkout.storeSession')}}" method="POST" role="form">
                                        <div class="col-sm-5">
                                            <input type="number" name="quantity" value="1" min= "1" max="100" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                        </div>
                                        <input type="hidden" name="id_product" value="{{$product->id}}">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
									</div>								
								</div>
                            </div>
						</div>
                        @endforeach
                	<div class="col-sm-12">
						<ul class="pagination">
							 {!! $products->render() !!}
						</ul>
					</div>
                    </div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	@endsection