<div class="col-sm-6 col-lg-3 p-2 text-center ">

<div class="border border-secondary h-100">
<a href="{{$product->path}}" class="d-block"><img class="mw-100" src="{{$product->thumb}}"></a>
         
         <a href="{{$product->path}}" class="d-block">{{$product->title}}</a>


         {{number_format($product->price)}} تومان

</div>

</div>