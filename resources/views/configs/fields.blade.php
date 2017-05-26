<!-- Count Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('count_img', 'Cantidad de Imagenes:') !!}
    {!! Form::text('count_img', null, ['class' => 'form-control']) !!}
</div>

<!-- Section_id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('section_id', 'Seccion:') !!}
    <select class="form-control" name="section_id">
    @foreach($sections as $section)
    	@if(isset($config))
    		@if($config->section_id == $section->id)
    		<option checked value="{{ $section->id}}"> {{ $section->name }}</option>
    		@else
    		<option value="{{ $section->id}}"> {{ $section->name }}</option>
    		@endif
    	@else
    	<option value="{{ $section->id}}"> {{ $section->name }}</option>
    	@endif
    @endforeach
    </select>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('configs.index') !!}" class="btn btn-default">Cancelar</a>
</div>
