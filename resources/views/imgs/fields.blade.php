<!-- Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('img', 'Img:') !!}
        {!! Form::file('img', null, ['class' => 'form-control']) !!}
</div>

<!-- Position Field -->
<div class="form-group col-sm-6">
    {!! Form::label('position', 'Position:') !!}
    {!! Form::text('position', null, ['class' => 'form-control']) !!}
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
        <input type="radio" name="visibility" value="1"> Si
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
            <option value="{{ $section->id}}"> {{ $section->name }}</option>
        @endforeach
        </select>
    @endif
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('subtitle', 'Subtitle:') !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('imgs.index') !!}" class="btn btn-default">Cancel</a>
</div>
