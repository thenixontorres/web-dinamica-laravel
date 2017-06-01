<!-- Two -->
@if($Sobre->visibility == "1")
<section id="Perfil" class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
	<div class="content">
		@if(!empty($Sobre->content->title))
		<h2>{{ $Sobre->content->title }}</h2>
		@endif
		@if(!empty($Sobre->content->subtitle))
		<p>{{ $Sobre->content->subtitle }} </p> <br>
		@endif
		@if(!empty($Sobre->content->body))
		<p> {{ $Sobre->content->body }}</p>
		@endif
		<ul class="actions vertical">
		@if(!empty($Sobre->content->button_text))
			<li><a href="{{ $Sobre->content->button_link }}" class="button">{{ $Sobre->content->button_text }}</a></li>
		@endif
		</ul>
	</div>
	@foreach($Sobre->imgs as $img)
		@if($img->visibility == '1')
		<div class="image">
			<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach	
</section>
@endif