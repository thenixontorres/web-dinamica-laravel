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
			<p class="text-justify"> 
				@foreach($Sobre->imgs as $img)
					@if($img->visibility == '1')
							<img style="float:left; padding-right:60px;" src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
					@endif
					{{ $Sobre->content->body }}
				@endforeach	
			</p>
		@endif
	</div>
</section>
@endif