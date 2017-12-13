@extends('layouts.app')

@section('content')
    <style>
        .row{
            text-align: center;
            padding: 20px;
        }
    </style>
<div class="container">
    <div class="row">
        @foreach($users as $user)
            <div class="card col-md-3">
                <div class="card-body">
                    <h4 class="card-title">{!! $user->name !!}</h4>
                    <h6 class="card-subtitle mb-2 text-muted">{!! $user->email !!}</h6>
                    <p class="card-text">{!! $user->identification !!}</p>
                    <a href="#" class="btn btn-danger">Eliminar</a>
                </div>
            </div>
        @endforeach

   </div>
</div>
@endsection
