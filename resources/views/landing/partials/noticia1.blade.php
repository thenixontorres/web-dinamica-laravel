<!-- Two -->
@if($Noticia1->visibility == "1")
<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
	<div class="content">
		@if(!empty($Noticia1->content->title))
		<h2>{{ $Noticia1->content->title }}</h2>
		@endif
		@if(!empty($Noticia1->content->subtitle))
		<p>{{ $Noticia1->content->subtitle }} </p> <br>
		@endif
		@if(!empty($Noticia1->content->body))
		<p> {{ $Noticia1->content->body }}</p>
		@endif
		<ul class="actions vertical">
		@if(!empty($Noticia1->content->button_text))
			<li><a href="{{ $Noticia1->content->button_link }}" class="button">{{ $Noticia1->content->button_text }}</a></li>
		@endif
		</ul>
	</div>
	@foreach($Noticia1->imgs as $img)
		@if($img->visibility == '1')
		<div class="image">
			<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach	
</section>
@endif