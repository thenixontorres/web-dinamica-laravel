<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $thumb->id !!}</p>
</div>

<!-- Thumb Field -->
<div class="form-group">
    {!! Form::label('thumb', 'Thumb:') !!}
    <p>{!! $thumb->thumb !!}</p>
</div>

<!-- Article Id Field -->
<div class="form-group">
    {!! Form::label('article_id', 'Article Id:') !!}
    <p>{!! $thumb->article_id !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $thumb->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $thumb->updated_at !!}</p>
</div>

