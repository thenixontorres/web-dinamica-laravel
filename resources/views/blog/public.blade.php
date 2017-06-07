@extends('layouts.blog')

@section('content')
<!-- Six -->
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-8">	
		@if(isset($articles))				
			@foreach($articles as $article)
			<div class="row">
				<div class="col-sm-12">		
					<article class="">
						<div class="inner">
							<h2><a href="{{ route('blog.article', $article->id) }}">{{ $article->title }}
							</a></h2>						
							<p class="align-left">  {{ $article->created_at }} </p>
						</div>
						<b style="line-height: 0px;" class="align-left">{{ $article->tag->category }}</b>
						<div class="image">
							<a href="{{ route('blog.article', $article->slug) }}">
							<img class="img img-responsive" src="{{ asset('/storage/images/').'/'.$article->thumb->thumb }}" alt="" />
							</a>
						</div>
						<div class="inner">
							<p>{{ $article->summary }}</p>
						</div>
					</article>
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