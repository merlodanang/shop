<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>Category</h2>
        <div class="panel-group" id="accordian"><!--category-productsr-->
            @foreach($category as $cat)
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#{{$cat->id}}">
                            <span class="pull-right"><i class="fa fa-plus fa"></i></span>
                            {{$cat->name}}
                        </a>
                    </h4>
                </div>
                <div id="{{$cat->id}}" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            @foreach($cat->subCategories as $sub)
                            <li>
                                <a href="{{route('home.product.show',$sub->id)}}">{{$sub->name}} </a><span class="badge badge-success">2</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach

        </div><!--/category-products-->
    </div>
</div>