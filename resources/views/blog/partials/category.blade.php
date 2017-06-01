<div class="col-sm-12 col-sm-offset-1">	
Categorias
</div>
<div class="col-sm-12 col-sm-offset-1">	
@foreach($tags as $tag)
<a href="{{ route('blog.category', $tag->id) }}"><p>{{ $tag->category }} </p></a>
@endforeach
</div>
