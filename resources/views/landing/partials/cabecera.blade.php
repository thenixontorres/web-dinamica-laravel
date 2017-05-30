<!-- One -->
@if($Cabecera->visibility == "1")
<section id="Cabecera" class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
	<div class="content">
		@if(!empty($Cabecera->content->title))
			<h1>{{ $Cabecera->content->title }}</h1>
		@endif
		@if(!empty($Cabecera->content->subtitle))
			<p class="major">{{ $Cabecera->content->subtitle }} </p>
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