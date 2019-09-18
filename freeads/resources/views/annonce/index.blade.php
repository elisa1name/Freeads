@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <a href="{{ URL::to('/home') }}">Home</a>
            <a href="{{ URL::to('annonce/show') }}">Retour</a>
                <div class="card-header">Toutes les annonces</div>
                <!-- <form  method="get">
                     <input type="submit" value="Go to my link location" 
                         name="Submit" id="frm1_submit" onclick="window.location='view/annonce/create';" />
                </form>  -->
            </div>
        </div>
    </div>
</div>
@endsection
