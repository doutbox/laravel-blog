@extends('app')

@section('content')

    <h1>Lista de Footers</h1>

    <table class="table">
        @foreach ($footers as $footer)
            <tr>
                <td>{{$footer->id}}</td>
                <td>{{$footer->title}}</td>
                <td><a href="{{route('footers.edit', array('id' => $footer->id))}}">Editar</a></td>
                <td>

                    <form method="post" action="{{route('footers.destroy', ['id' => $footer->id])}}">

                        <input name="_method" type="hidden" value="DELETE">

                        {{ csrf_field() }}

                        <button type="submit">Remover</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </table>

    <button ><a href="{{route('footers.create')}}">Criar novo</a></button>

@endsection