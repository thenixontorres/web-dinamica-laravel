@extends('layouts.blog')

@section('content')
<!-- Six -->
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-8">					
			<div class="row">
				<div class="col-sm-12">		
					<article class="">
						<div class="inner">
							<h2>{{ $article->title }}</h2>
						</div>
						<p style="line-height: 0px;" class="align-left">  {{ $article->created_at }} </p>
						<b class="align-left">{{ $article->tag->category }}</b>
						<div class="image">
							<img class="img img-responsive" src="{{ asset('/storage/images/').'/'.$article->thumb->thumb }}" alt="" />
						</div>
						<div class="">
							<p>{!! $article->content !!}</p>
						</div>
					</article>
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