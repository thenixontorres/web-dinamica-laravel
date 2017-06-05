@section('css')
<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script> -->
<script src="{{ url('js/tinyMCE/tinymce.min.js') }}"></script>
@endsection
<!-- Icon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('icon', 'Icono:') !!}
    <select name="icon_id" class="form-control">
    @foreach($icons as $icon)
        @if(isset($service))
            @if($service->icon_id == $icon->id)
                <option selected value="{{$icon->id}}"> {{$icon->name}}</option>
            @else
                <option value="{{$icon->id}}"> {{$icon->name}}</option>
            @endif
        @else
            <option value="{{$icon->id}}"> {{$icon->name}}</option>
        @endif
    @endforeach    
    </select> 
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Titulo:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12">
    {!! Form::label('description', 'Descripcion:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Content Field -->
<div class="form-group col-sm-12">
    {!! Form::label('content', 'Contenido:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control', 'id'=>'content']) !!}
</div>

<!-- Visibility Field -->
<div class="form-group col-sm-6">
    {!! Form::label('banner_img', 'Imagen de Banner: ') !!}
    {!! Form::file('banner_img', null, ['class' => 'form-control']) !!}
</div>

<!-- Visibility Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visibility', '¿Visibile?: ') !!}
    <br>
    @if(isset($service))
        @if($service->visibility == "1")
        <input type="radio" name="visibility" checked value="1"> Si
        <input type="radio" name="visibility" value="0"> No
        @else
        <input type="radio" name="visibility" value="1"> Si
        <input type="radio" name="visibility" checked value="0"> No
        @endif
    @else
        <input type="radio" checked name="visibility" value="1"> Si
        <input type="radio" name="visibility" value="0"> No
    @endif  
</div>
<!-- section_id -->
<input type="hidden" name="section_id" value="6">
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('services.index') !!}" class="btn btn-default">Cancelar</a>
</div>

@section('scripts')
 <script>tinymce.init({ 
    selector:'textarea#content',
    toolbar: "image",
    plugins: "image imagetools" 
 });</script>
@endsection