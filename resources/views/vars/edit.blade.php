@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Var
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($var, ['route' => ['vars.update', $var->id], 'method' => 'patch']) !!}

                        @include('vars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection