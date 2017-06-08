@extends('layouts.blog')
@section('css')
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
@endsection
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
							<hr>
							<div class="inner">
								<p>{{ $article->summary }}</p>
								<p>{{ $article->created_at }} </p>
							</div>
							<hr>
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
		<div class="col-md-10 col-md-offset-1" >				
			<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-mobile="true" fb-xfbml-state="rendered" data-href="https://developers.facebook.classom/docs/plugins/comments#configurator" data-width="800" data-numposts="5"></div>
		</div>
	</div>	
	<div class="row">	
		<div class="col-sm-12 align-center">				
		@include('landing.partials.footer')	
		</div>
	</div>	
</div>
@endsection