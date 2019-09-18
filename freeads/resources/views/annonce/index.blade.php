@extends('layouts.layout')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Annonces</h1>    
  <table class="table table-striped">
  <a href="{{ URL::to('/home') }}">Home</a>
    <thead>
        <tr>
          <td>id</td>
          <td>titre</td>
          <td>prix</td>
          <td>description</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($annonces as $annonce)
        <tr>
            <td>{{$annonce->id}}</td>
            <td>{{$annonce->titre}}</td>
            <td>{{$annonce->prix}}</td>
            <td>{{$annonce->description}}</td>
            <td>
            </td>
            <td>
                <form action="{{ URL::to('/annonce', $annonce->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Suprimer</button>
                </form>
                <form action="{{ route('annonce.edit', $annonce->id)}}" method="get">
                  @csrf
                  
                  <button class="btn btn" type="submit">update</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection