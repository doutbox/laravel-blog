@extends('app')

@section('content')

    <h1>Edição do footer: {{$footer->title}}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => route('footers.update', $footer->id), 'method' => 'put']) !!}

    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', $footer->title) !!}

    <br>

    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', $footer->content) !!}

    {!! Form::submit('Alterar') !!}

    {!! Form::close() !!}

@endsection