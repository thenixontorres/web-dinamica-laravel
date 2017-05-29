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

<!-- Body Field -->
<div class="form-group col-sm-6">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::text('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Button Text Field -->
<div class="form-group col-sm-6">
    {!! Form::label('button_text', 'Button Text:') !!}
    {!! Form::text('button_text', null, ['class' => 'form-control']) !!}
</div>

<!-- Button Link Field -->
<div class="form-group col-sm-6">
    {!! Form::label('button_link', 'Button Link:') !!}
    {!! Form::text('button_link', null, ['class' => 'form-control']) !!}
</div>

<!-- Visibility Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visibility', 'Visibility:') !!}
    {!! Form::text('visibility', null, ['class' => 'form-control']) !!}
</div>

<!-- Section Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('section_id', 'Section Id:') !!}
    {!! Form::text('section_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('contents.index') !!}" class="btn btn-default">Cancel</a>
</div>
