<html>
<head>
  <meta charset="UTF-8">
  <title>Form to create new product</title>
</head>
  <body>
    <h1>Edit product</h1>
    {{-- NOTE: Use Form of html service --}}
    {{--       Read More: http://laravelcollective.com/docs/5.1/html --}}
    {!! Form::model($pro,['method' => 'PATCH', 'action' => ['ProductsController@update', $pro->id]]) !!}
    {!! Form::label('name','Name:') !!}
    {!! Form::input('text', 'name') !!}
    <br/>
    <br/>
    {!! Form::label('pro_code','Product code:') !!}
    {!! Form::input('text', 'pro_code') !!}
    <br/>
    <br/>
    {!! Form::label('desc','Product desc:') !!}
    {!! Form::input('text', 'desc') !!}
    <br/>
    <br/>
    {!! Form::label('created_at','Created date:') !!}
    {{-- NOTE: date("Y-m-d") -> get current data for default value --}}
    {!! Form::input('date', 'created_at', date("Y-m-d")) !!}
    <br/>
    <br/>
    {!! Form::submit('Update') !!}
    {!! Form::close() !!}
  </body>
</html>