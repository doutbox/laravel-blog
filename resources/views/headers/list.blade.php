@extends('app')

@section('content')

    <h1>Lista de Headers</h1>

    <table class="table">
        @foreach ($headers as $header)
            <tr>
                <td>{{$header->id}}</td>
                <td>{{$header->title}}</td>
                <td><a href="{{route('headers.edit', array('id' => $header->id))}}">Editar</a></td>
                <td>

                    <form method="post" action="{{route('headers.destroy', ['id' => $header->id])}}">

                        <input name="_method" type="hidden" value="DELETE">

                        {{ csrf_field() }}

                        <button type="submit">Remover</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>

    <button ><a href="{{route('headers.create')}}">Criar novo</a></button>

@endsection