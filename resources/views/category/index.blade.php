@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
       <a type="button" class="btn btn-primary" href="{!! route('admin.category.create') !!}">Create Category</a>
    </div>
</div>
<div class="container">   
    <div class="row">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->id }}</td>
            <td>{{ $category->name }}</td>
            <td>
                <a type="button" class="btn btn-info" href="{!! route('admin.category.edit',$category->id) !!}">Edit</a>
            </td>
            <td>
                {!! Former::open('')->route('admin.category.destroy',$category->id)->method('DELETE')!!}
                {!! Former::actions()
                    ->danger_submit('Delete')
                !!}
                {!! Former::close()!!}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    <ul class="pagination">
        {!! $categories->render() !!}
    </ul>
    </div>
@stop