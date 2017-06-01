<!-- Four -->
@if($Spotlight->visibility == "1")
<section id="Spotlight" class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in">
	<div class="content">
		@if(!empty($Spotlight->content->title))
			<h2>{{ $Spotlight->content->title }}</h2>
		@endif

		@if(!empty($Spotlight->content->subtitle))
			<p class="major">{{ $Spotlight->content->subtitle }}</p>
		@endif		

		@if(!empty($Spotlight->content->body))
			<p>{{ $Spotlight->content->body }}</p>
		@endif
		@if(!empty($Spotlight->content->button_text))
		<ul class="actions vertical">
			<li><a href="{{ $Spotlight->content->button_link }}" class="button">  {{ $Spotlight->content->button_text }}</a></li>
		</ul>
		@endif
	</div>
	@foreach($Spotlight->imgs as $img)
		@if($img->visibility == '1')
		<div class="image">
			<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach
</section>
@endif