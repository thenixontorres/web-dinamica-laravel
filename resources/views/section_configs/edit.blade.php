@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Section Config
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($sectionConfig, ['route' => ['sectionConfigs.update', $sectionConfig->id], 'method' => 'patch']) !!}

                        @include('section_configs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection