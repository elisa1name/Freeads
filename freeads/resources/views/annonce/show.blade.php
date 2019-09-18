<!DOCTYPE html>
<html>
<head>
    <title>annonces</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('annonce') }}">Mes annonces</a></li>
        <li><a href="{{ URL::to('annonce/create') }}">Crée une annonce</a>
    </ul>
</nav>

<h1>Show {{ $annonce }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $annonce }}</h2>
       
    </div>

</div>
</body>
</html>