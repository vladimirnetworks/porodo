@extends('main')

@section('main')

    @foreach($products as $product)
        @include('productItem')
    @endforeach

@stop