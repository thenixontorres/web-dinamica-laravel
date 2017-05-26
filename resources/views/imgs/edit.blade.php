@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Img
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($img, ['route' => ['imgs.update', $img->id], 'method' => 'patch']) !!}

                        @include('imgs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection