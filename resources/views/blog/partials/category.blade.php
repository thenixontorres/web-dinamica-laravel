<div class="col-sm-12">
  	<form method="GET" >
	    <div class="input-group">	    	
		      <input type="text" name="title" class="form-control">
		      <span class="input-group-btn">
		        <button type="submit" class="btn btn-default">BUSCAR</button>
		      </span>  
	    </div>
  	</form>
</div> 
<div class="col-sm-12 col-sm-offset-1">	
Categorias
</div>
<div class="col-sm-12 col-sm-offset-1">	
@foreach($tags as $tag)
<a href="{{ route('blog.category', $tag->id) }}"><p>{{ $tag->category }} </p></a>
@endforeach
</div>
