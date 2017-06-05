@extends('layouts.blog')

@section('content')
<!-- Six -->
<div class="container-fuid">
	<div class="row">
		<div class="col-sm-9 col-sm-offset-1">					
			<div class="row">
				<div class="col-sm-10">		
					<article class="wrapper style1 align-center">
						<div class="inner">
								<h2>{{ $article->title }}</h2>
						</div>
						<p class="align-left">{{ $article->tag->category }}</p>
						<div class="image">
							<img class="img img-responsive" src="{{ asset('/storage/images/').'/'.$article->thumb->thumb }}" alt="" />
						</div>
						<div class="inner text-justify">
							<p>{!! $article->content !!}</p>
						</div>
					</article>
					<article class="wrapper style1">
						<p class="align-right">  {{ $article->created_at }} </p>
					</article>
				</div>
			</div>
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