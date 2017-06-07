@extends('layouts.blog')

@section('content')
<!-- Six -->
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-8">	
			<div class="row">
				<div class="col-sm-12">		
						<div class="inner">
								<h2><a href="{{ route('blog.article', $article->slug) }}">{{ $article->title }}
								</a></h2>
						</div>
						<p style="line-height: 0px;" class="align-left">{{ $article->tag->category }}</p>
						<div class="image">
							<a href="{{ route('blog.article', $article->slug) }}">
							<img class="img img-responsive" src="{{ asset('/storage/images/').'/'.$article->thumb->thumb }}" alt="" />
							</a>
						</div>
						<div class="inner">
							<p>{!! $article->content !!}</p>
						</div>
				</div>
			</div>
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