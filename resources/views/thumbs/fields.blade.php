<!-- Thumb Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumb', 'Thumb:') !!}
    {!! Form::file('thumb') !!}
</div>
<div class="clearfix"></div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('thumbs.index') !!}" class="btn btn-default">Cancel</a>
</div>
