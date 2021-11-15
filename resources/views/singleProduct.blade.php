@extends('main')

@section('main')

<h1>{{$product->title}}</h1>

<div>
 <img src="{{$product->thumb}}" style="max-width:100%"><br>
{{$product->caption}}
</div>

@stop