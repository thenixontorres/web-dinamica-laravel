@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Redes Sociales
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('socials.show_fields')
                    <a href="{!! route('socials.index') !!}" class="btn btn-default">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection
