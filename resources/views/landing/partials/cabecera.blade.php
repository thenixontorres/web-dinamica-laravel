<!-- One -->
@if($Cabecera->visibility == "1")
<section id="Cabecera" class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
	<div class="content">
		@if(!empty($Cabecera->content->title))
		<h1>{{ $Cabecera->content->title }}</h1>
		@endif
		@if(!empty($Cabecera->content->subtitle))
		<p class="major">{{ $Cabecera->content->subtitle }} <br>
        {{ $Cabecera->content->body }}</p>
		<ul class="actions vertical">
			<li><a href="{{ $Cabecera->content->button_link }}" class="button big wide smooth-scroll-middle">{{ $Cabecera->content->button_text }}</a></li>
		</ul>
		@endif
	</div>
	<div class="image">
		@if(!empty($Cabecera->imgs))
		@foreach($Cabecera->imgs as $img)
		<img src="{{ asset('storage/images/').'/'.$img->img }}" alt="" />
		@endforeach
		@else
		<img src="{{ asset('storage/images/').'/images/default.jpg' }}" alt="" />
		@endif
	</div>
</section>
@endif