    {!! Form::hidden('position', 0, ['class' => 'form-control']) !!}

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

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

<!-- Visibility Field -->
<div class="form-group col-sm-2">
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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sections.index') !!}" class="btn btn-default">Cancelar</a>
</div>
