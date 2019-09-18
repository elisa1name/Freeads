@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous êtes bien connecté !
                    <li><a href="{{ URL::to('annonce/show') }}">Voir les annonces</a></li>
                    <li><a href="{{ URL::to('annonce/create') }}">Crée une annonce</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
