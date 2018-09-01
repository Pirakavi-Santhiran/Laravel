@extends('layouts.app')

@section('content')

    <h1>Contact</h1>

    {!! Form::open(['url' => 'contact/submit']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}<br>
            {{Form::text('name', '',['class' => 'form-control' , 'placeholder' => 'Enter name'])}}
        </div>
    <br>
        <div class="form-group">
            {{Form::label('email', 'E-Mail address')}}<br>
            {{Form::text('email', '',['class' => 'form-control', 'placeholder' => 'example@gmail.com'])}}
        </div>
    <br>
        <div class="form-group">
            {{Form::label('message', 'Enter Message')}}<br>
            {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter message'])}}
        </div>
    <br>
        <div>
            {{Form::submit('Submit',['class' => 'btn btn-primary'])}}
        </div>

    {!! Form::close() !!}


@endsection
