@extends('main')

@section('main')

<div class="container-fluid" >

    <div class="row">
    @foreach($products as $product)

        <div class="border border-dark col-sm-6 col-lg-3 p-2">@include('productItem')</div>

    @endforeach
    </div>

</div>
@stop