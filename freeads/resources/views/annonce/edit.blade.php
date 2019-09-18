@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Modifier mes annonces</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('annonce.update', $annonce->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="titre">titre:</label>
                <input type="text" class="form-control" name="titre" value={{ $annonce->titre }} />
            </div>

            <div class="form-group">
                <label for="description">description</label>
                <input type="text" class="form-control" name="description" value={{ $annonce->description }} />
            </div>
            <div class="form-group">
                <label for="prix">prix :</label>
                <input type="text" class="form-control" name="prix" value={{ $annonce->prix}} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection