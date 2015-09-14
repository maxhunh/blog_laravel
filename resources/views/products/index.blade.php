@extends('template.product_template')

@section('child_product_page')
 <h2>I am product page</h2>
 <ul>
   @foreach($list_product as $product)
    <li>Name: {{$product->name}} | Code: {{$product->pro_code}} | Desc: {{$product->desc}} </li>
   @endforeach
 </ul>
@stop