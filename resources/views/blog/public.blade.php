@extends('layouts.blog')

@section('content')
<!-- Six -->
<div class="row">
	<div class="col-sm-8 col-sm-offset-1">					
	@foreach($articles as $article)
	<div class="row">
		<div class="col-sm-10">		
			<article class="wrapper style1 align-center">
				<div class="inner">
						<h2><a href="{{ route('article', $article->id) }}">{{ $article->title }}</h2></a>
				</div>
				<p class="align-left">{{ $article->tag->category }}</p>
				<div class="image">
					<img class="img img-responsive" src="{{ asset('/storage/images/').'/'.$article->thumb->thumb }}" alt="" />
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
	</div>
	<div class="col-sm-3">
		<div class="row">
		Barra
		</div>
	</div>					
</div>

@include('landing.partials.footer')

@endsection