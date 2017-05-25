<!-- Count Img Field -->
<div class="form-group col-sm-6">
    {!! Form::label('count_img', 'Count Img:') !!}
    {!! Form::text('count_img', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('configs.index') !!}" class="btn btn-default">Cancel</a>
</div>
