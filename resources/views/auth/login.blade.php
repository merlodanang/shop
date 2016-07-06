@extends('layouts.master')
@section('content')
<h2>Register</h2>
<form role="form" method="POST" action="login">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        Password
        <input type="password" name="password" id="password" class="form-control" placeholder="Enter password">
    </div>

     <div class="checkbox">
        <input type="checkbox" name="remember"> Remember Me
    </div>

    <div>
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</form>
@stop