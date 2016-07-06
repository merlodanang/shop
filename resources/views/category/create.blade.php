@extends('layouts.master')
@section('content')
<h2>CATEGORY</h2>
<div class="form-inner">
    {!! Former::open()->route('admin.category.store')->method('POST') !!}

        {!! Former::text('name')
        ->label('Name category')
        ->addGroupClass('col-md-6')
        ->addClass('form-group')
        !!}
    </div>
    {!! Former::actions()
    ->primary_submit('create')
    !!}
    {!! Former::close()!!}
</div>
@stop