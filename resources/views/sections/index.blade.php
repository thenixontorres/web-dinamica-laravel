@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Secciones</h1>
        @if(Auth::User()->tipo=='master')
        <h1 class="pull-right">
           <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('sections.create') !!}">Agregar</a>
        </h1>
        @endif
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                    @include('sections.table')
            </div>
        </div>
    </div>
@endsection

