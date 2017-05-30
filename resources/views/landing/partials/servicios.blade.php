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
		@foreach($Servicios->services as $service)
			<section>
				<span class="icon style2 major {{ $service->icon->css_value }}"></span>
				<h3>{{ $service->title }} </h3>
				@if(!empty($service->description))
				<p>{{ $service->description }}</p>
				@endif
			</section>
		@endforeach
		</div>
	</div>
</section>
@endif