<!DOCTYPE html>
<html>
<head>
    <title>Profil</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('/') }}">Home</a>
    </div>
</nav>
<h1>Show</h1>
<h3>Profil</h3>
    <div class="jumbotron text-center">
        <h2>{{ $user[0]->name }} {{ $user[0]->email }} {{ $user[0]->password }}</h2>
    </div>
</div>
</body>
</html>