@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Iconos
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($icon, ['route' => ['icons.update', $icon->id], 'method' => 'patch']) !!}

                        @include('icons.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection