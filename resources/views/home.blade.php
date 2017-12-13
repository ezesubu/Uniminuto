@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <table class="table">
            <thead>
            <tr>
                <th scope="col">Fecha</th>
                <th scope="col">Usuario</th>
            </tr>
            </thead>
            <tbody>
            @foreach($formulas as $formula)
            <tr>
                <td>{!! $formula->created_at !!}</td>
                <td>{!! $formula->user_id !!}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
   </div>
</div>
@endsection
