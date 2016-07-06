@extends('layouts.master')
@section('content')
<h2>PRODUCT</h2>
<div class="form-inner">
        {!! Former::open_for_files()->route('admin.product.store')->method('POST')->files('true') !!}
    <div class="row">
        {!! Former::text('name')
        ->label('Name product')
        ->addGroupClass('col-md-6')
        ->addClass('form-group')
        !!}
    </div>
    <div class="row">
        {!! Former::text('title')
        ->label('Title')
        ->addGroupClass('col-md-6')
        ->addClass('form-group')
        !!}
    </div>
    <div class="row">
        {!! Former::textarea('about')
        ->label('About')
        ->addGroupClass('col-md-6')
        ->addClass('form-group')
        !!}
    </div>
    <div class="row">
        {!! Former::number('price')
        ->label('Price')
        ->addGroupClass('col-md-6')
        ->addClass('form-group')
        !!}
    </div>
    <div class="row">
        {!! Former::file('file')
        ->label('File Image')
        ->addGroupClass('col-md-6')
        ->addClass('form-group')
        ->accept('image') 
        !!}
    </div>
    <div class="row">
    {!! Former::select('sub_category_id')
    ->label('Sub Category')
    ->addClass('form-group')
    ->addGroupClass('col-md-6')
    ->addOption('' ,'')
    ->options($cate)
    !!}
    </div>
</div>
{!! Former::actions()
->primary_submit('create')
!!}
{!! Former::close()!!}
</div>
@stop
@section('js')
<script src="public/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script src="public/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
<script>
  $('textarea').ckeditor({
    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token={{csrf_token()}}',
    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token={{csrf_token()}}'
  });
</script>
@stop