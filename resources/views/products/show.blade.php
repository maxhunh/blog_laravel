@extends('template.product_template')

@section('child_product_page')
 Name: {{$pro->name}} <br/>
 Code: {{$pro->pro_code}} <br/>
 Desc: {{$pro->desc}} <br/>
 Created at: {{$pro->created_at}} <br/>
@stop