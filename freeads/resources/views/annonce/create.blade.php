@extends('layouts.layout')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
  <a href="{{ URL::to('annonce/show') }}">Retour</a><br>
    Ajoutez une annonce
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('annonce.store') }}">
          <div class="form-group">
              @csrf
              <label for="name">titre:</label>
              <input type="text" class="form-control" name="titre"/>
          </div>
          <div class="form-group">
              <label for="price">description:</label>
              <input type="text" class="form-control" name="description"/>
          </div>
          <div class="form-group">
              <label for="quantity">photo:</label>
              <input type="file" class="form-control" name="photo"/>
          </div>
          <div class="form-group">
              <label for="quantity">prix:</label>
              <input type="text" class="form-control" name="prix"/>
          </div>
          <input type="submit" class="btn btn-primary">
      </form>
  </div>
</div>
@endsection