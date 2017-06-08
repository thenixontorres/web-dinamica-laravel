@extends('layouts.blog')

@section('content')
<!-- Six -->
@include('flash::message')

@if($Banner->visibility == '1')
<div class="container-fuid">
	<div class="row">
		<div class="col-sm-12">
			@foreach($Banner->imgs as $img)
				@if($img->visibility == '1')
				<img class="img img-responsive" style="min-width:100%;" src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
				@endif
			@endforeach
		</div>
	</div>		
</div>
@endif
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-8">	
		@if(isset($articles))				
			@foreach($articles as $article)
			<div class="row">
				<div class="col-sm-12">		
						<div class="inner">
								<h2><a href="{{ route('blog.article', $article->slug) }}">{{ $article->title }}
								</a></h2>
						</div>
						<p style="line-height: 0px;" class="align-left"><a href="{{ route('blog.category', $article->tag->id) }}">{{ $article->tag->category }}</a></p>
						<div class="image">
							<a href="{{ route('blog.article', $article->slug) }}">
							<img class="img img-responsive" src="{{ asset('/storage/images/').'/'.$article->thumb->thumb }}" alt="" />
							</a>
						</div>
						<div class="inner">
							<p>{{ $article->summary }}</p>
							<p>{{ $article->created_at }} </p>
						</div>
				</div>
			</div>
			@endforeach
		{{ $articles->links() }}
		@endif
		</div>
		<div class="col-sm-4">
			<div class="row">
				@include('blog.partials.category')
			</div>
		</div>					
	</div>
	<div class="row">	
		<div class="col-sm-10 col-sm-offset-1">				
		@include('landing.partials.contacto')	
		</div>
	</div>
	<div class="row">	
		<div class="col-sm-12">				
		@include('landing.partials.footer')	
		</div>
	</div>	
</div>
@endsection