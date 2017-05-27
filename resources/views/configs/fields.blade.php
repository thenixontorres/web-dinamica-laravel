<!-- Count Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('count_img', 'Cantidad de Imagenes:') !!}
    {!! Form::text('count_img', null, ['class' => 'form-control']) !!}
</div>

<!-- Section_id Field -->
<div class="form-group col-sm-6">
    @if(isset($config))
    	<input type="hidden" value="{{ $config->section_id }}">
    @else
        {!! Form::label('section_id', 'Seccion:') !!}
        <select class="form-control" name="section_id">
        @foreach($sections as $section)
            <option value="{{ $section->id}}"> {{ $section->name }}</option>
        @endforeach
        </select>
    @endif
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('configs.index') !!}" class="btn btn-default">Cancelar</a>
</div>
