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

	<div class="slider-wrapper theme-default">
	    <div id="htmlcaption" class="nivo-html-caption">
	        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
	    </div>

		<div id="slider" class="nivoSlider">
		    @foreach($Slider->imgs as $img)	
				@if($img->visibility == '1')
					<img src="{{ asset('/storage/images/').'/'.$img->img }}" data-thumb="{{ asset('/storage/images/').'/'.$img->img }}" alt="" title="#htmlcaption{{$img->id}}" />
				@endif
			@endforeach
	    </div>
		@foreach($Slider->imgs as $img)	
			@if($img->visibility == '1')
				<div id="htmlcaption{{$img->id}}" class="nivo-html-caption">
	                <b style="color: #fff; font-size: 25px;">{{ $img->title }}</b> <br>
	                @if(!empty($img->subtitle))
						{{ $img->subtitle }}
					@endif
	            </div>
			@endif
		@endforeach
	</div>
</section>
@endif
