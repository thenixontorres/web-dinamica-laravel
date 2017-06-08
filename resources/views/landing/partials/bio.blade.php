<!-- Three -->
@if($Bio->visibility == "1")
<section id="Noticias" class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
	<!--texto -->
	<div class="content">
		@if(!empty($Bio->content->title))
			<h2>{{ $Bio->content->title }}</h2>
		@endif
		@if(!empty($Bio->content->subtitle))
			<p class="major">{{ $Bio->content->subtitle }} <br>
        @endif
        @if(!empty($Bio->content->body))
			<p>{{ $Bio->content->body }}</p>
		@endif
		@if(!empty($Bio->content->button_text))
		<ul class="actions vertical">
			<li><a href="{{ $Bio->content->button_link }}" class="button">{{ $Bio->content->button_text }}</a></li>
		</ul>
		@endif
	</div>
	<!-- fin texto -->
	<!--imagen -->
	@foreach($Bio->imgs as $img)
		@if($img->visibility == '1')
		<div class="image">
			<img class="img img-responsive" src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach
	<!-- fin texto -->
</section>
@endif