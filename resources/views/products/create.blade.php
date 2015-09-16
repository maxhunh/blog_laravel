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
    {!! Form::submit('Add New') !!}
    {!! Form::close() !!}
    {{-- NOTE: part to show errors validate when create new products --}}
    <p>
      @if ( $errors->any() )
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif
    </p>
  </body>
</html>