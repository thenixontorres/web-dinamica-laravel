<!-- Section Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('section_id', 'Section Id:') !!}
    {!! Form::text('section_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Multiimg Field -->
<div class="form-group col-sm-6">
    {!! Form::label('multiImg', 'Multiimg:') !!}
    {!! Form::text('multiImg', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    {!! Form::text('type', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sectionConfigs.index') !!}" class="btn btn-default">Cancel</a>
</div>
