@extends('app')

@section('content')

    <h1>Adicionando um novo footer</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => route('footers.store'), 'method' => 'post']) !!}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title') !!}

    <br>

    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content') !!}

    <br>

    {!! Form::submit('Cadastrar') !!}

    {!! Form::close() !!}

@endsection