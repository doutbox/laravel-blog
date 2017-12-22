<html>
<head></head>
<body>
<h1>Editar Post</h1>
<form method="post" action="/post/{{$post->id}}">
    {!! csrf_field() !!}
    <label>Título</label>
    <input type="text" name="title" value="{{$post->title}}">
    <br/><br/>
    <label>Conteúdo</label>
    <br/>
    <textarea name="content">{{$post->content}}</textarea>
    <br/><br/>
    <button type="submit">Salvar</button>
    <a href="/post">Voltar</a>
</form>
</body>
</html>