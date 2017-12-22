<html>
<head></head>
<body>
<h1>Litagem de POSTS</h1>
<a href="/post/create">Novo Post</a>
<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Título</td>
        <td>Conteúdo</td>
        <td>Cadastrado em</td>
        <td>Atualizado em</td>
        <td>Ação</td>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td><a href="/post/{{$post->id}}/edit">Editar</a></td>
            <td><a href="/post/{{$post->id}}">Excluir</a></td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>