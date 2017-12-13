@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Eps
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($eps, ['route' => ['eps.update', $eps->id], 'method' => 'patch']) !!}

                        @include('eps.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection