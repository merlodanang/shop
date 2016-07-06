@extends('layouts.master')
@section('content')

<br/>
<div class="container">   
    <div class="row">
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Fullname</th>
            <th>email</th>
            <th>address1</th>
            <th>address2</th>
            <th>facebook</th>
            <th>country</th>
            <th>phone</th>
            <th>items</th>
            <th>note</th>
        </tr>
        @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->fullname }}</td>
            <td>{{ $order->email }}</td>
            <td>{{ $order->address1 }}</td>
            <td>{{ $order->address2 }}</td>
            <td>{{ $order->facebook }}</td>
            <td>{{ $order->country }}</td>
            <td>{{ $order->phone }}</td>
            <td>
                <ul>
                @foreach($order->items as $item)
                <li><a href="{{route('home.detail.show',$item->product->id)}}">{{$item->product->name}}</a></li>
                @endforeach
                </ul>
            </td>
            <td>{{ $order->note }}</td>
        </tr>
        @endforeach
    </table>
    </div>
    <ul class="pagination">
        {!! $orders->render() !!}
    </ul>
    </div>
@stop