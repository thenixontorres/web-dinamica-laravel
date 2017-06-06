<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Css Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('css_value', 'Valor Css:') !!}
    {!! Form::text('css_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('icons.index') !!}" class="btn btn-default">Cancelar</a>
</div>
