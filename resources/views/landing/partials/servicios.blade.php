<!-- Six -->
@if($Servicios->visibility == "1")
<section id="Servicios" class="wrapper style1 align-center">
	<div class="inner">
		@if(!empty($Servicios->content->title))
			<h2> {{ $Servicios->content->title }}</h2>
		@endif
		@if(!empty($Servicios->content->subtitle))
			<p class="major">{{ $Servicios->content->subtitle }} </p>
		@endif
		@if(!empty($Servicios->content->body))
		<p>{{ $Servicios->content->body }}</p>
		@endif
		<div class="items style1 medium onscroll-fade-in">
		@if(!empty($Servicios->services))
		@foreach($Servicios->services as $service)
			@if($service->visibility == "1")
			<section>
				<span class="icon style2 major {{ $service->icon->css_value }}"></span>
				<h3><a href="{{ route('servicios', $service->id)}}">{{ $service->title }}</a></h3>
				@if(!empty($service->description))
				<p style="word-wrap: break-word;">{{ $service->description }}</p>
				@endif
			</section>
			@endif
		@endforeach
		@endif
		</div>
	</div>
</section>
@endif 