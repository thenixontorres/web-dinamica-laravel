<!-- Five -->
@if($Slider->visibility == '1')
<section id="Slider" class="wrapper style1 align-center">
	<div class="inner">
		@if(!empty($Slider->content->title))
			<h2>{{ $Slider->content->title }}</h2>
		@endif
		@if(!empty($Slider->content->subtitle))
			<p class="major">{{ $Slider->content->subtitle }} </p>
		@endif
		@if(!empty($Slider->content->body))
		<p>{{ $Slider->content->body }} </p>
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
<br>