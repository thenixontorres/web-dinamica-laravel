<!-- Category Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Categoria:') !!}
    {!! Form::text('category', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tags.index') !!}" class="btn btn-default">Cancelar</a>
</div>
