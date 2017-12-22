@extends('app')

@section('content')

    <h1>Adicionando um novo header</h1>

    {!! Form::open(['url' => route('headers.store'), 'method' => 'post']) !!}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}

    <br>

    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content') !!}

    <br>

    {!! Form::submit('Cadastrar') !!}

    {!! Form::close() !!}

@endsection