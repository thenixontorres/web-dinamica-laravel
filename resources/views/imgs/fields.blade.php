<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Imagen:') !!}
        {!! Form::file('img', null, ['class' => 'form-control']) !!}
    <span>Preferiblemente 450x150 para sliders y banners </span>
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    @if(isset($img))
    {!! Form::label('position', 'Posicion:') !!}
    <select name="position" class="form-control">
        @for($i=0; $i < $positions; $i++)
            @if($img->position == $i+1) 
                <option selected value="{{ $i+1 }}">{{ $i+1 }}</option>
            @else
                <option value="{{ $i+1 }}">{{ $i+1 }}</option>
            @endif
        @endfor 
    </select>
    @else
    {!! Form::hidden('position', 1, ['class' => 'form-control']) !!}
    @endif
</div>

<!-- Visibility Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visibility', '¿Visibile?: ') !!}
    <br>
    @if(isset($img))
        @if($img->visibility == "1")
        <input type="radio" name="visibility" checked value="1"> Si
        <input type="radio" name="visibility" value="0"> No
        @else
        <input type="radio" name="visibility" value="1"> Si
        <input type="radio" name="visibility" checked value="0"> No
        @endif
    @else
        <input type="radio" checked name="visibility" value="1"> Si
        <input type="radio" name="visibility" value="0"> No
    @endif  
</div>

<!-- Section_id Field -->
<div class="form-group col-sm-6">
    @if(isset($img))
        <input type="hidden" name="section_id" value="{{ $img->section_id }}">
    @else
        {!! Form::label('section_id', 'Seccion:') !!}
        <select class="form-control" name="section_id">
        @foreach($sections as $section)
            @if($section->sectionConfig->imgs != 'no-img')
            <option value="{{ $section->id}}"> {{ $section->name.' - '.$section->page->title }}</option>
            @endif
        @endforeach
        </select>
    @endif
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle', 'Subtitulo:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('imgs.index') !!}" class="btn btn-default">Cancelar</a>
</div>
