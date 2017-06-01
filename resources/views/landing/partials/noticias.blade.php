<!-- Three -->
@if($Noticias->visibility == "1")
<section id="Noticias" class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
	<div class="content">
		@if(!empty($Noticias->content->title))
			<h2>{{ $Noticias->content->title }}</h2>
		@endif
		@if(!empty($Noticias->content->subtitle))
			<p class="major">{{ $Noticias->content->subtitle }} <br>
        @endif
        @if(!empty($Noticias->content->body))
			<p>{{ $Noticias->content->body }}</p>
		@endif
		@if(!empty($Noticias->content->button_text))
		<ul class="actions vertical">
			<li><a href="{{ $Noticias->content->button_link }}" class="button">{{ $Noticias->content->button_text }}</a></li>
		</ul>
		@endif
	</div>
	@foreach($Noticias->imgs as $img)
		@if($img->visibility == '1')
		<div class="image">
			<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach
</section>
@endif