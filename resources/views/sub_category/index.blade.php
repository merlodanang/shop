@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
       <a type="button" class="btn btn-primary" href="{!! route('admin.subCategory.create') !!}">Primary</a>
    </div>
</div>
<div class="container">   
    <div class="row">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        @foreach ($subCategories as $subCategory)
        <tr>
            <td>{{ $subCategory->id }}</td>
            <td>{{ $subCategory->name }}</td>
        </tr>
        @endforeach
    </table>
    </div>
    <ul class="pagination">
        {!! $subCategories->render() !!}
    </ul>
    </div>
@stop