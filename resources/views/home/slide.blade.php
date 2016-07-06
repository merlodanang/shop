<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
				
						
						<div class="carousel-inner">
                            @foreach($pro as $item)
                            @if($item == reset($pro))
							<div class="item active">
								<div class="col-sm-6">
									<h2>{{$item['name']}}</h2>
									<p>{{$item['title']}}</p>
                                    <p>${{$item['price']}}</p>
									<a href="{{route('home.detail.show',$item['id'])}}"><button type="button" class="btn btn-default get">Get it now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="{{asset($item['img'])}}" class="girl img-responsive" alt="" />
								</div>
							</div>
                            @else
							<div class="item">
								<div class="col-sm-6">
									<h2>{{$item['name']}}</h2>
									<p>{{$item['title']}}</p>
                                    <p>${{$item['price']}}</p>
                                    <a href="{{route('home.detail.show',$item['id'])}}"><button type="button" class="btn btn-default get">Get it now</button></a>
								</div>
								<div class="col-sm-6">
									<img src="{{asset($item['img'])}}" class="girl img-responsive" alt="" />
								</div>
							</div>
							@endif
                            @endforeach
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->