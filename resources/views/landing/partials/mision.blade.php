
@if($Mision->visibility == "1")
<section id="Perfil" class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
	<div class="content">
		@if(!empty($Mision->content->title))
		<h2>{{ $Sobre->content->title }}</h2>
		@endif
		@if(!empty($Mision->content->subtitle))
		<p>{{ $Sobre->content->subtitle }} </p> <br>
		@endif
		@if(!empty($Mision->content->body))
			<p class="text-justify"> 
				@foreach($Mision->imgs as $img)
					@if($img->visibility == '1')
							<img style="float:right; padding-left:60px;" src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
					@endif
					{{ $Mision->content->body }}
				@endforeach	
			</p>
		@endif
	</div>
</section>
@endif