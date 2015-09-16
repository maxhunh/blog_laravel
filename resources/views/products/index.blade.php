@extends('template.product_template')

@section('child_product_page')
 <h2>I am product page</h2>
 <ol>
   @foreach($list_product as $product)
    <li>Name: {{$product->name}} | Code: {{$product->pro_code}} | Desc: {{$product->desc}} | Created at: {{$product->created_at}} </li>
   @endforeach
 </ol>
 <a href="/product/create">New product</a>
@stop