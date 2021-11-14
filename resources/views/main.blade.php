<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Webpage description goes here" />
  <meta charset="utf-8">
  <title>{{$pageTitle}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href={{ asset('bs/css/bootstrap.min.css')}}> </head>

<body>

<div class="p-4 p-md-5 mb-4 text-white bg-dark">
shopid.ir
</div>


<div class="container">
@yield('main')  
</div>



</body>
</html>