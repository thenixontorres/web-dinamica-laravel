@extends('layouts.blog')

@section('content')
<!-- Six -->
<div class="container-fuid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-1">	
		@if(isset($articles))				
			@foreach($articles as $article)
			<div class="row">
				<div class="col-sm-10">		
					<article class="wrapper style1 align-center">
						<div class="inner">
								<h2><a href="{{ route('blog.article', $article->id) }}">{{ $article->title }}
								</a></h2>
						</div>
						<p class="align-left">{{ $article->tag->category }}</p>
						<div class="image">
							<a href="{{ route('blog.article', $article->id) }}">
							<img class="img img-responsive" src="{{ asset('/storage/images/').'/'.$article->thumb->thumb }}" alt="" />
							</a>
						</div>
						<div class="inner">
							<p>{{ $article->summary }}</p>
						</div>
					</article>
					<article class="wrapper style1">
						<p class="align-right">  {{ $article->created_at }} </p>
					</article>
				</div>
			</div>
			@endforeach
		{{ $articles->links() }}
		@endif
		</div>
		<div class="col-sm-2">
			<div class="row">
				@include('blog.partials.category')
			</div>
		</div>					
	</div>

	<div class="row">	
		<div class="col-sm-10 col-sm-offset-1">				
		@include('landing.partials.footer')	
		</div>
	</div>	
</div>
@endsection