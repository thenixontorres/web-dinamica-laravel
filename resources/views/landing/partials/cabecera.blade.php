<!-- One -->
@if($Cabecera->visibility == "1")
<section id="Cabecera" class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
	<div class="content">
		<img src="{{ asset('/storage/images/').'/images/isotipo-pisanu.png' }}" alt="" />
		@if(!empty($Cabecera->content->title))
			<h2 class="title-header">{{ $Cabecera->content->title }}</h2>
		@endif
		@if(!empty($Cabecera->content->subtitle))
			<strong><p class="major subtitle-header">{{ $Cabecera->content->subtitle }} </p></strong>
        @endif
		@if(!empty($Cabecera->content->body))
			<p>{{ $Cabecera->content->body }}</p>
		@endif
		@if(!empty($Cabecera->content->button_text))
			<ul class="actions vertical">
				<li><a href="{{ $Cabecera->content->button_link }}" class="button big wide smooth-scroll-middle">{{ $Cabecera->content->button_text }}</a></li>
			</ul>
		@endif
	</div>
		@foreach($Cabecera->imgs as $img)
			@if($img->visibility == '1')	
				<div class="image">
				<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
				</div>
			@endif	
		@endforeach
</section>
@endif