<html>
<head>
  <meta charset="UTF-8">
  <title>Form to create new product</title>
</head>
  <body>
    <h1>Add new product</h1>
    {{-- NOTE: Use Form of html service --}}
    {{--       Read More: http://laravelcollective.com/docs/5.1/html --}}
    {!! Form::open(['url' => 'product']) !!}
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name') !!}
    <br/>
    <br/>
    {!! Form::label('pro_code','Product code:') !!}
    {!! Form::text('pro_code') !!}
    <br/>
    <br/>
    {!! Form::label('desc','Product desc:') !!}
    {!! Form::text('desc') !!}
    <br/>
    <br/>
    {!! Form::submit('Add New') !!}
    {!! Form::close() !!}
  </body>
</html>