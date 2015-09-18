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
        <a href="/products/{{$product->id}}/edit" class='btn btn-info'>Edit</a> |
        <a href="/products/{{$product->id}}" class='btn btn-success'>Show</a>
         {!! Form::open(['method' => 'delete', 'action' => ['ProductsController@destroy', $product->id]]) !!}
          {!! Form::submit('Delete this product ?', array('class' => 'btn btn-danger')) !!}
         {!! Form::close() !!}
    </li>
   @endforeach
 </ol>
 <a href="products/create" class="btn btn-success">New product</a>
@stop