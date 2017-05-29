<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Css Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('css_value', 'Css Value:') !!}
    {!! Form::text('css_value', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('icons.index') !!}" class="btn btn-default">Cancel</a>
</div>
