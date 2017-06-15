<!-- One -->
@if($Cabecera->visibility == "1")
<section id="Cabecera" class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
	<div class="content" style="padding-top:30px;">
		<center>
			<img src="{{ asset('/storage/images/').'/images/isotipo-pisanu.png' }}" alt="" style="height:150px; margin-left:80px;" />
		</center>
		@if(!empty($Cabecera->content->title))
			<h2 class="title-header" style="text-align:right;" style="margin-bottom:0;">{{ $Cabecera->content->title }}</h2>
		@endif
		@if(!empty($Cabecera->content->subtitle))
			<strong><p class="major subtitle-header" style="text-align:right;margin-bottom: 10px;">{{ $Cabecera->content->subtitle }} </p></strong>
        @endif
        @if(!empty($Cabecera->content->body))
			<h3 class="title-sub-header">
			{{ $Cabecera->content->body }}
			</h3>
		@endif
		<div class="ajust-header-content">

			<ul class="icons" style="margin-bottom:15px;padding-left:80px;">
				@foreach($Constant as $const)
					@if($const->var == "Enlace a Twitter")
					<!--<li><a href="{{ $const->value }}" style="font-size: 12px;" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>-->
					@elseif($const->var == "Enlace a Facebook")
					<li><a href="{{ $const->value }}" style="font-size: 12px;" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
					@elseif($const->var == "Enlace a Instagram")
					<li><a href="{{ $const->value }}" style="font-size: 12px;" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
					@elseif($const->var == "Enlace a Linked in")
					<!--<li><a href="{{ $const->value }}" style="font-size: 12px;" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>-->
					@elseif($const->var == "Telefono/Whatsapp")
					<li><a href="whatsapp://send?text=Pisanu!&phone={{ $const->value }}" style="font-size: 12px;" class="icon style2 fa-whatsapp"><span class="label">Telefono</span></a></li>
					@elseif($const->var == "Email")
					<!--<li><a href="mailto:{{ $const->value }}?Subject=Contacto%20Pisanu" target="_top" style="font-size: 12px;"  class="icon style2 fa-envelope"><span class="label">Email</span></a></li>-->
					@endif
				@endforeach
			</ul>
			
			@if(!empty($Cabecera->content->button_text))
				<ul class="actions vertical" style="padding-left:45px;">
					<li><a href="{{ $Cabecera->content->button_link }}" class="button big wide smooth-scroll-middle">{{ $Cabecera->content->button_text }}</a></li>
				</ul>
			@endif
		</div>
	</div> 
		@foreach($Cabecera->imgs as $img)
			@if($img->visibility == '1')	
				<div class="image">
				<img src="{{ asset('/storage/images/').'/'.$img->img }}" alt="" />
				</div>
			@endif	
		@endforeach
</section>
@endif