
@if(isset($constant))
 {!! Form::hidden('var', $constant->var, ['class' => 'form-control']) !!}
@else
<!-- Var Field -->
<div class="form-group col-sm-6">
    {!! Form::label('var', 'Var:') !!}
    {!! Form::text('var', null, ['class' => 'form-control']) !!}
</div>
@endif
<!-- Value Field -->
<div class="form-group col-sm-6">
    {!! Form::label('value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('constants.index') !!}" class="btn btn-default">Cancel</a>
</div>
