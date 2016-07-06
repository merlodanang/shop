           <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($recommended as $item)
                            @if($item==reset($recommended))
                            <div class="item active">	
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="{{route('home.detail.show',$item[0]['slug'])}}"><img src="{{asset($item[0]['img'])}}" width="255px" height="255px" alt="" /></a>
                                                <h2>${{$item[0]['price']}}</h2>
                                                <p>{{$item[0]['name']}}</p>
                                                <form action="{{route('home.checkout.storeSession')}}" method="POST" role="form">
                                                <div class="col-sm-5">
                                                    <input type="number" name="quantity" value="1" min= "1" max="100" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                                <input type="hidden" name="id_product" value="{{$item[0]['id']}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="{{route('home.detail.show',$item[1]['slug'])}}"><img src="{{asset($item[1]['img'])}}" width="255px" height="255px" alt="" /></a>
                                                 <h2>${{$item[1]['price']}}</h2>
                                                <p>{{$item[1]['name']}}</p>
                                                <form action="{{route('home.checkout.storeSession')}}" method="POST" role="form">
                                                <div class="col-sm-5">
                                                    <input type="number" name="quantity" value="1" min= "1" max="100" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                                <input type="hidden" name="id_product" value="{{$item[1]['id']}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="{{route('home.detail.show',$item[2]['slug'])}}"><img src="{{asset($item[2]['img'])}}" width="255px" height="255px" alt="" /></a>
                                                <h2>${{$item[2]['price']}}</h2>
                                                <p>{{$item[2]['name']}}</p>
                                                <form action="{{route('home.checkout.storeSession')}}" method="POST" role="form">
                                                <div class="col-sm-5">
                                                    <input type="number" name="quantity" value="1" min= "1" max="100" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                                <input type="hidden" name="id_product" value="{{$item[2]['id']}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="item">	
                                @foreach($item as $product)
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <a href="{{route('home.detail.show',$product['slug'])}}"><img src="{{asset($product['img'])}}" width="255px" height="255px"alt="" /></a>
                                                <h2>${{$product['price']}}</h2>
                                                <p>{{$product['name']}}</p>
                                                <form action="{{route('home.checkout.storeSession')}}" method="POST" role="form">
                                                <div class="col-sm-5">
                                                    <input type="number" name="quantity" value="1" min= "1" max="100" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                                </div>
                                                <input type="hidden" name="id_product" value="{{$product['id']}}">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            @endforeach
                        </div>
                         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                          </a>
                          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                          </a>			
                    </div>
                </div><!--/recommended_items-->