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
        <form method="POST" action="{{ route('profile.update', Auth::user()->id) }}">
       
            @csrf
            @method('PATCH')
            <div class="form-group">

                <label for="name">name:</label>
                <input type="text" class="form-control" name="name" value={{ Auth::user()->name }} />
            </div>
            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" name="email" value={{ Auth::user()->email }} />
            </div>
            <div class="form-group">
                <label for="password">password:</label>
                <input type="password" class="form-control" name="password" value={{ Auth::user()->password  }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
</form>
            <form method="POST" action="{{ route('profile.destroy', Auth::user()->id) }}">
       
       @csrf
       @method('DELETE')
       <div class="form-group">

            <button type="submit" class="btn btn-primary">Delete</button>
        </form>
    </div>
</div>
@endsection