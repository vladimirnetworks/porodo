<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="description" content="Webpage description goes here" />
  <meta charset="utf-8">
  <title>shopid</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="">

  <link rel="stylesheet" href={{ asset('bs/css/bootstrap.min.css')}}> 

<style>
.dev {
  border:1px solid black;
}
body {
  direction:rtl;
}

a,a:visited {
  text-decoration:none;
}
</style>

</head>

<body>
  

<div class="p-4 p-md-5 mb-4 text-white bg-dark">
shopid.ir
</div>

<div class="container">
<div class="row">

@foreach($products as $product)

 <div class="col"><div><a href="{{$product['path']}}">{{$product['title']}}</a>
 <br>
 <img src="{{$product['thumb']}}" style="max-width:100%">
 <br>
 {{number_format($product['price'])}}
 <br>

@if(isset($inprodpage))
 {{($product['caption'])}}
@endif

 </div></div>
@endforeach

</div>
</div>

<script>
</script>

</body>
</html>