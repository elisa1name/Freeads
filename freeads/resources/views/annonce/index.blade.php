@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <form  method="get">
                     <input type="submit" value="Go to my link location" 
                         name="Submit" id="frm1_submit" onclick="window.location='view/annonce/create';" />
                         <p>Aucune annonce trouvé</p>
                </form>   
            </div>
        </div>
    </div>
</div>
@endsection
