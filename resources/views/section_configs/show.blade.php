@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Section Config
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('section_configs.show_fields')
                    <a href="{!! route('sectionConfigs.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
