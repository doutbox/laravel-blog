<!DOCTYPE html>
<html>
<head>
    <title>Header {{ $header->id }}</title>
</head>
<body>
<h1>Header {{ $header->id }} - {{ $header->title }}</h1>
<ul>
    <li>Content: {{ $header->content}}</li>
</ul>
</body>
</html>