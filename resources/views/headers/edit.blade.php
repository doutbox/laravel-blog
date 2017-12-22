@extends('app')

@section('content')

    <h1>Edição do header: {{$header->title}}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => route('headers.update', $header->id), 'method' => 'put']) !!}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', $header->title) !!}

    <br>

    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', $header->content) !!}

    {!! Form::submit('Alterar') !!}

    {!! Form::close() !!}

@endsection