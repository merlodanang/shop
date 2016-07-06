<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
</head>
<body style="height:1500px">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admin</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="{{route('admin.category.index')}}">Category</a></li>
      <li><a href="{{route('admin.sub-category.index')}}">Sub-Category</a></li>
      <li><a href="#">Product</a></li>
      <li><a href="#">order</a></li>
    </ul>
  </div>
</nav>
@yield('content')
    <script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('js')
</body>
</html>

