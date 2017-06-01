<!-- Three -->
@if($Mision->visibility == "1")
<section id="Noticias" class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
	<div class="content">
		@if(!empty($Mision->content->title))
			<h2>{{ $Mision->content->title }}</h2>
		@endif
		@if(!empty($Mision->content->subtitle))
			<p class="major">{{ $Mision->content->subtitle }} <br>
        @endif
        @if(!empty($Mision->content->body))
			<p>{{ $Mision->content->body }}</p>
		@endif
		@if(!empty($Mision->content->button_text))
		<ul class="actions vertical">
			<li><a href="{{ $Mision->content->button_link }}" class="button">{{ $Mision->content->button_text }}</a></li>
		</ul>
		@endif
	</div>
	@foreach($Mision->imgs as $img)
		@if($img->visibility == '1')
		<div class="image">
			<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach
</section>
@endif