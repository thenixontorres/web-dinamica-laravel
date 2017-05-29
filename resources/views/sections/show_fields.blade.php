<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $section->id !!}</p>
</div>

<!-- Visibility Field -->
<div class="form-group">
    {!! Form::label('visibility', 'Visibilidad:') !!}
    <p>{!! $section->visibility !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{!! $section->name !!}</p>
</div>

<!-- Page Id Field -->
<div class="form-group">
    {!! Form::label('page_id', 'Pagina:') !!}
    <p>{!! $section->page->title !!}</p>
</div>

@if(isset($content))
<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{!! $content->title !!}</p>
</div>

<!-- Subtitle Field -->
<div class="form-group">
    {!! Form::label('subtitle', 'Subtitle:') !!}
    <p>{!! $content->subtitle !!}</p>
</div>

<!-- Body Field -->
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    <p>{!! $content->body !!}</p>
</div>

<!-- Button Text Field -->
<div class="form-group">
    {!! Form::label('button_text', 'Button Text:') !!}
    <p>{!! $content->button_text !!}</p>
</div>

<!-- Button Link Field -->
<div class="form-group">
    {!! Form::label('button_link', 'Button Link:') !!}
    <p>{!! $content->button_link !!}</p>
</div>

<!-- Visibility Field -->
<div class="form-group">
    {!! Form::label('visibility', 'Visibility:') !!}
    <p>{!! $content->visibility !!}</p>
</div>

@endif
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Creado:') !!}
    <p>{!! $section->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Editado:') !!}
    <p>{!! $section->updated_at !!}</p>
</div>

