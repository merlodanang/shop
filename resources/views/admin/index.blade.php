@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
       <a type="button" class="btn btn-primary" href="{!! route('admin.category.create') !!}">Primary</a>
    </div>
</div>
<div class="container">   
    <div class="row">
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
        </tr>
        @endforeach
    </table>
    </div>
    <ul class="pagination">
        {!! $users->render() !!}
    </ul>
    </div>
@stop