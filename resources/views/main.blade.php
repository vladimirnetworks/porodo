<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Webpage description goes here" />
  <meta charset="utf-8">
  <title>{{$pageTitle}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href={{ asset('bs/css/bootstrap.min.css')}}> </head>
<style>
body {
  direction:rtl;
}
a,a:visited {
  text-decoration:none;
}
</style>
<body>

<div class="p-0 p-md-4 p-lg-5 text-white bg-dark text-center text-md-end">
shopid
</div>


<div class="container">
@yield('main')  
</div>



</body>
</html>