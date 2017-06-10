<!-- Five -->
@if($Noticia3->visibility == '1')
<section id="Equipo" class="wrapper style1 align-center">
	<div class="inner">
		@if(!empty($Noticia3->content->title))
			<h2>{{ $Noticia3->content->title }}</h2>
		@endif
		@if(!empty($Noticia3->content->subtitle))
			<p class="major">{{ $Noticia3->content->subtitle }} </p>
		@endif
		@if(!empty($Noticia3->content->body))
		<p>{{ $Noticia3->content->body }} </p>
		@endif
	</div>

<!-- Gallery -->
	<div class="gallery style2 medium lightbox onscroll-fade-in">
	@foreach($Noticia3->imgs as $img)	
		@if($img->visibility == '1')
		<article>
			<a href="{{ asset('/storage/images/').'/'.$img->img }}" class="image">
				<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
			</a>
			<div class="caption">
				<h3>{{ $img->title }} </h3>
				@if(!empty($img->subtitle))
				<p>
					{{ $img->subtitle }}
				</p>
				@endif
			</div>
		</article>
		@endif
	@endforeach	
	</div>	
</section>
@endif