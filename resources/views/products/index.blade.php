@extends('template.product_template')

@section('child_product_page')
 <h2>I am product page</h2>
 <ol>
   @foreach($list_product as $product)
    <li>
        Name: {{$product->name}} |
        Code: {{$product->pro_code}} |
        Desc: {{$product->desc}} |
        Created at: {{$product->created_at}} |
        <a href="/products/{{$product->id}}/edit">Edit</a> |
        <a href="/products/{{$product->id}}">Show</a>
         {!! Form::open(['method' => 'delete', 'action' => ['ProductsController@destroy', $product->id]]) !!}
          {!! Form::submit('Delete this product ?') !!}
         {!! Form::close() !!}
    </li>
   @endforeach
 </ol>
 <a href="products/create">New product</a>
@stop