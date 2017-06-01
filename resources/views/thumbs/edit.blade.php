@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Thumb
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($thumb, ['route' => ['thumbs.update', $thumb->id], 'method' => 'patch']) !!}

                        @include('thumbs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection