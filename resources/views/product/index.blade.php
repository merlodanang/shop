@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
       <a type="button" class="btn btn-primary" href="{!! route('admin.product.create') !!}">Primary</a>
    </div>
</div>
<div class="container">   
    <div class="row">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Title</th>
            <th>About</th>
            <th>Price</th>
            <th>Img</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->title }}</td>
            <td>{{ $product->about }}</td>
            <td>{{ $product->price }}</td>
            <td><img src="{{asset("public/"$product->img)}}" alt="Smiley face" height="42" width="42"></td>
            
        </tr>
        @endforeach
    </table>
    </div>
    <ul class="pagination">
        {!! $products->render() !!}
    </ul>
    </div>
@stop