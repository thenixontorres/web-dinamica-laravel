@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Articulos
        </h1>
    </section>
    <div class="content">
        @include('flash::message')
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'articles.store','files' => true]) !!}

                        @include('articles.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
