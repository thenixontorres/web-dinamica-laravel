<!-- Five -->
@if($Testimonio->visibility == '1')
<section id="Testimonio" class="wrapper style1 align-center">
	<div class="inner">
		@if(!empty($Testimonio->content->title))
			<h2>{{ $Testimonio->content->title }}</h2>
		@endif
		@if(!empty($Testimonio->content->subtitle))
			<p class="major">{{ $Testimonio->content->subtitle }} </p>
		@endif
		@if(!empty($Testimonio->content->body))
		<p>{{ $Testimonio->content->body }} </p>
		@endif
	</div>

<!-- Gallery -->
	<div class="gallery style2 medium lightbox onscroll-fade-in">
	@foreach($Testimonio->imgs as $img)	
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