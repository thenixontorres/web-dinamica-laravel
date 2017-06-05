@extends('layouts.blog')

@section('content')
<div class="container-fuid">
	<div class="row">
		<div class="col-sm-12">
			<img class="img img-responsive" style="min-width:100%;" src="{{ asset('/storage/images/').'/'.$service->banner_img }}" alt="" />
		</div>
	</div>
	<section class="wrapper style1 align-center">
		<div class="inner">
				<h2>{{ $service->title }}</h2>
		</div>
	</section>
	<section class="wrapper style1 text-justify">
		<div class="inner">
				{{ $service->content }}
		</div>		
	</section>
	@include('landing.partials.contacto')
	@include('landing.partials.footer')
</div>
@endsection
