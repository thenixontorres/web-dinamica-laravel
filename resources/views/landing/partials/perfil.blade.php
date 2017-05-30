<!-- Two -->
@if($Perfil->visibility == "1")
<section id="Perfil" class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
	<div class="content">
		@if(!empty($Perfil->content->title))
		<h2>{{ $Perfil->content->title }}</h2>
		@endif
		@if(!empty($Perfil->content->subtitle))
		<p>{{ $Perfil->content->subtitle }} </p> <br>
		@endif
		@if(!empty($Perfil->content->body))
		<p> {{ $Perfil->content->body }}</p>
		@endif
		<ul class="actions vertical">
		@if(!empty($Perfil->content->button_text))
			<li><a href="{{ $Perfil->content->button_link }}" class="button">{{ $Perfil->content->button_text }}</a></li>
		@endif
		</ul>
	</div>
	@foreach($Perfil->imgs as $img)
		@if($img->visibility == '1')
		<div class="image">
			<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
		</div>
		@endif
	@endforeach	
</section>
@endif