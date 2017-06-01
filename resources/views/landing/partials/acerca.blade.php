<!-- Four -->
@if($Acerca->visibility == "1")
<section id="Acerca" class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in">
	<div class="content">
		@if(!empty($Acerca->content->title))
			<h2>{{ $Acerca->content->title }}</h2>
		@endif
		@if(!empty($Acerca->content->subtitle))
			<p class="major">{{ $Acerca->content->subtitle }} </p>
		@endif
		@if(!empty($Acerca->content->body))
			<p>{{ $Acerca->content->body }}</p>
		@endif
		@if(!empty($Acerca->content->button_text))
		<ul class="actions vertical">
			<li><a href="{{ $Acerca->content->button_link }}" class="button">  {{ $Acerca->content->button_text }}</a></li>
		</ul>
		@endif
	</div>
	@foreach($Acerca->imgs as $img)
		@if($img->visibility == '1')
		<div class="image">
			<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach
</section>
@endif