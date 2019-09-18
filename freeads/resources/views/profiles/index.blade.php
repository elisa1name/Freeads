@extends('layouts.layout')

@section('content')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Mes infos</h1>    
  <table class="table table-striped">
  <a href="{{ URL::to('/home') }}">Home</a>
    <thead>
        <tr>
          <td>id</td>
          <td>name</td>
          <td>email</td>
          <td>password</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
            </td>
            <td>
                <form action="{{ URL::to('/profile', $user->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Suprimer</button>
                </form>
                <form action="{{ route('profile.edit', $user->id)}}" method="get">
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