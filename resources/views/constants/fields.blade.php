
@if(isset($constant))
 {!! Form::hidden('var', $constant->var, ['class' => 'form-control']) !!}
@else
<!-- Var Field -->
<div class="form-group col-sm-6">
    {!! Form::label('var', 'Variable:') !!}
    {!! Form::text('var', null, ['class' => 'form-control']) !!}
</div>
@endif

@if(isset($constant))
	@if($constant->var == "Contraseña de Email de contacto")
	<!-- Value Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('value', 'Valor:') !!}
	    {!! Form::password('value', ['class' => 'form-control']) !!}
	</div>
	@else
	<!-- Value Field -->
	<div class="form-group col-sm-6">
	    {!! Form::label('value', 'Valor:') !!}
	    {!! Form::text('value', null, ['class' => 'form-control']) !!}
	</div>
	@endif
@else
<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Valor:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>
@endif
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('constants.index') !!}" class="btn btn-default">Cancelar</a>
</div>
