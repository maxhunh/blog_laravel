@extends('template.product_template')

@section('child_product_page')
  <h1>Edit product</h1>
  {{-- NOTE: Use Form of html service --}}
  {{--       Read More: http://laravelcollective.com/docs/5.1/html --}}
  {!! Form::model($pro,['method' => 'PATCH', 'action' => ['ProductsController@update', $pro->id]], array('class' => 'col col-md-5')) !!}
  <div class="col col-md-5">
    <div class="form-group">
      {!! Form::label('name','Name:') !!}
      {!! Form::text('name', $pro->name, array('class' => 'form-control')) !!}
    </div>
    <br/>
    <br/>
    <div class="form-group">
      {!! Form::label('pro_code','Product code:') !!}
      {!! Form::text('pro_code', $pro->pro_code, array('class' => 'form-control')) !!}
    </div>
    <br/>
    <br/>
    <div class="form-group">
      {!! Form::label('desc','Product desc:') !!}
      {!! Form::text('desc', $pro->desc, array('class' => 'form-control')) !!}
    </div>
    <br/>
    <br/>
    <div class="form-group">
      {!! Form::label('created_at','Created date:') !!}
      {{-- NOTE: date("Y-m-d") -> get current data for default value --}}
      {!! Form::input('date', 'created_at', date("Y-m-d"), array('class' => 'form-control')) !!}
    </div>
    <br/>
    <br/>
    {!! Form::submit('Update', array('class' => 'btn btn-success')) !!}
    {!! Form::close() !!}
  </div>
@stop