<div class="col-sm-12">
  	<form method="GET" >
	    <div class="input-group">	    	
		      <input type="text" style="height: 44px;" name="title" class="form-control">
		      <span class="input-group-btn">
		        <button style="height: 44px;" type="submit" class="btn btn-default">BUSCAR</button>
		      </span>  
	    </div>
  	</form>
</div> 
<div class="col-sm-12 col-sm-offset-1">	
	Categorias:
</div>
<div class="col-sm-12 col-sm-offset-1">	
	<div class="row">
		@foreach($tags as $tag)
		<div class="col-sm-12">
			<a class="text-left" href="{{ route('blog.category', $tag->id) }}">
			{{ $tag->category }} ( {{ @count($tag->articles) }} )
			</a>
		</div>
		@endforeach
	</div>
</div>

<div class="col-sm-12 col-sm-offset-1">	
	Ultimos Post:
</div>
<div class="col-sm-12 col-sm-offset-1">	
	<div class="row">
		@foreach($lastest as $last)
		<div class="col-sm-12">
			<a class="text-left" href="{{ route('blog.article', $last->slug) }}">
			{{ $last->title }} ( {{ $last->created_at }} )
			</a>
		</div>
		@endforeach
	</div>
</div>