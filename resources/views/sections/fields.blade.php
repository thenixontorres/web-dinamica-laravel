<!-- Name Field -->
@if(isset($section))
{!! Form::hidden('name', $section->name, ['class' => 'form-control']) !!}
@else
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
@endif
@if(isset($section))
    <input type="hidden" name="page_id" value="{{ $section->page_id}}">
@else   
<!-- Page Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('page_id', 'Pagina:') !!}
    <select class="form-control" name="page_id">
        @foreach ($pages as $page)
            @if(isset($section))
                @if($page->id == $section->page_id)
                    <option selected value="{{ $page->id }}"> {{ $page->title }}</option>
                @else
                    <option value="{{ $page->id }}"> {{ $page->title }}</option>
                @endif
            @else
            <option value="{{ $page->id }}"> {{ $page->title }}</option>
            @endif
        @endforeach 
    </select>
</div>
@endif
<!-- Visibility Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visibility', '¿Visibile?: ') !!}
    <br>
    @if(isset($section))
        @if($section->visibility == "1")
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
<!--De la tabla contents -->
@if(isset($content))
@if($section->sectionConfig->structure != 'banner')
<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Titulo:') !!}
    {!! Form::text('title', $content->title, ['class' => 'form-control']) !!}
</div>

<!-- Subtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle', 'Subtitulo:') !!}
    {!! Form::text('subtitle', $content->subtitle, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-6">
    {!! Form::label('body', 'Cuerpo:') !!}
    {!! Form::text('body', $content->body, ['class' => 'form-control']) !!}
</div>
@endif
    @if($section->sectionConfig->btns == 'btn')
    <!-- Button Text Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('button_text', 'Texto del boton:') !!}
        {!! Form::text('button_text', $content->button_text, ['class' => 'form-control']) !!}
    </div>

    <!-- Button Link Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('button_link', 'Enlace del boton:') !!}
        {!! Form::text('button_link', $content->button_link, ['class' => 'form-control']) !!}
    </div>
    @endif
@else
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

<!-- Body Field -->
<div class="form-group col-sm-6">
    {!! Form::label('body', 'Cuerpo:') !!}
    {!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Button Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('button_text', 'Texto del Boton:') !!}
    {!! Form::text('button_text', null, ['class' => 'form-control']) !!}
</div>

<!-- Button Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('button_link', 'Enlace del Boton:') !!}
    {!! Form::text('button_link', null, ['class' => 'form-control']) !!}
</div>
@endif

<!-- Img -->
@if(isset($section))
    @if($section->sectionConfig->imgs != 'no-img')
    <div class="form-group col-sm-6">
        {!! Form::label('img', 'Imagen para mostrar:') !!}
        <select name="img" class="form-control" id="">
            @foreach($imgs as $img)
                @if($img->visibility == "1")
                <option selected value="{{$img->id}}"> {{ $img->title }} (Imagen Mostrada)</option>
                @else
                <option value="{{$img->id}}"> {{ $img->title }} </option>
                @endif
            @endforeach
        </select>
    </div>
    @endif
@endif
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sections.index') !!}" class="btn btn-default">Cancelar</a>
</div>
