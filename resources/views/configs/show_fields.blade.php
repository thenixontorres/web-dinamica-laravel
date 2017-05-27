<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $config->id !!}</p>
</div>

<!-- Count Img Field -->
<div class="form-group">
    {!! Form::label('count_img', 'Cantidad de Imagenes:') !!}
    <p>{!! $config->count_img !!}</p>
</div>

<!-- Section Id Field -->
<div class="form-group">
    {!! Form::label('section_id', 'Seccion:') !!}
    <p>{!! $config->section->name !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{!! $config->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Actualizado:') !!}
    <p>{!! $config->updated_at !!}</p>
</div>

