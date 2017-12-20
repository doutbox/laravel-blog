<html>
    <head></head>
    <body>
        <h1>Criar Post</h1>
    <form method="post" action="/post">
        {!! csrf_field() !!}
        <label>Título</label>
        <input type="text" name="title">
        <br/><br/>
        <label>Conteúdo</label>
        <br/>
        <textarea name="content" ></textarea>
        <br/><br/>
        <button type="submit">Salvar</button>
        <a href="/post">Voltar</a>
    </form>
    </body>
</html>