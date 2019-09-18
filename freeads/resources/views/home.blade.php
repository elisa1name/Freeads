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

                    Vous êtes bien connecté !<br>
       <a href="{{ URL::to('profile/edit', auth()->id()) }}">Editer mon profil</a><br>
        <a href="{{ URL::to('profile/show', auth()->id()) }}">Show</a><br>
        <a class="nav-link" href="{{ route('profile.edit', auth()->id()) }}">@lang('Profil')</a>
                    <li><a href="{{ URL::to('annonce/show/'.Auth::id()) }}">Voir les annonces</a></li>
                    <li><a href="{{ URL::to('annonce/create') }}">Crée une annonce</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
