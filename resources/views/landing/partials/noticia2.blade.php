<!-- Three -->
@if($Noticia2->visibility == "1")
<section id="Noticias" class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
	<div class="content">
		@if(!empty($Noticia2->content->title))
			<h2>{{ $Noticia2->content->title }}</h2>
		@endif
		@if(!empty($Noticia2->content->subtitle))
			<p class="major">{{ $Noticia2->content->subtitle }} <br>
        @endif
        @if(!empty($Noticia2->content->body))
			<p>{{ $Noticia2->content->body }}</p>
		@endif
		@if(!empty($Noticia2->content->button_text))
		<ul class="actions vertical">
			<li><a href="{{ $Noticia2->content->button_link }}" class="button">{{ $Noticia2->content->button_text }}</a></li>
		</ul>
		@endif
	</div>
	@foreach($Noticia2->imgs as $img)
		@if($Noticia2->visibility == '1')
		<div class="image">
			<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach
</section>
@endif