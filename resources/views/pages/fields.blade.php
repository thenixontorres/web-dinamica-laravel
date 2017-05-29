<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Visibility Field -->
<div class="form-group col-sm-2">
    {!! Form::label('visibility', '¿Visibile?: ') !!}
    <br>
    @if(isset($page))
    	@if($page->visibility == "1")
    	<input type="radio" name="visibility" checked value="1"> Si
    	<input type="radio" name="visibility" value="0"> No
    	@else
    	<input type="radio" name="visibility" value="1"> Si
    	<input type="radio" name="visibility" checked value="0"> No
    	@endif
   	@else
   		<input type="radio" name="visibility" value="1"> Si
    	<input type="radio" name="visibility" value="0"> No
   	@endif 	
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pages.index') !!}" class="btn btn-default">Cancelar</a>
</div>
