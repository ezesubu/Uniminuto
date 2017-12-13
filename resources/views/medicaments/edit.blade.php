@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Medicament
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($medicament, ['route' => ['medicaments.update', $medicament->id], 'method' => 'patch']) !!}

                        @include('medicaments.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection