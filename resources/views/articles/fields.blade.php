<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Categorie Field--> 
<div class="form-group col-sm-6">
    {!! Form::label('categories', 'Categoria:') !!}
    <select class="form-control" name="tag_id">
    	@foreach($tags as $tag)
    	@if(isset($article))
            @if($article->tag_id == $tag->id)
            <option selected value="{{$tag->id}}">
        		{{ $tag->category }}
        	</option>
            @else
            <option value="{{$tag->id}}">
                {{ $tag->category }}
            </option>
            @endif
        @else
        <option value="{{$tag->id}}">
            {{ $tag->category }}
        </option>
        @endif
    	@endforeach
    </select>
</div>

<!-- Content Field -->
<div class="form-group col-sm-12">
    {!! Form::label('content', 'Content:') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<!-- Summary Field -->
<div class="form-group col-sm-12">
    {!! Form::label('summary', 'Summary:') !!}
    {!! Form::textarea('summary', null, ['class' => 'form-control']) !!}
</div>

<!-- previw Field -->
<div class="form-group col-sm-6">
    {!! Form::label('thumb', 'Imagen para mostrar:') !!}
    {!! Form::file('thumb', null, ['class' => 'form-control']) !!}
</div>
<!-- Visibility Field -->
<div class="form-group col-sm-6">
    {!! Form::label('visibility', '¿Visibile?: ') !!}
    <br>
    @if(isset($article))
        @if($article->visibility == "1")
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


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articles.index') !!}" class="btn btn-default">Cancel</a>
</div>
