@extends('layouts.blog')

@section('content')
<div class="row">
	<div class="col-sm-12">
		<div class="image img img-responsive">
			<img style="width: 100%;" src="{{ asset('/storage/images/').'/'.$service->banner_img }}" alt="" />
		</div>
	</div>
</div>
<section class="wrapper style1 align-center">
	<div class="inner">
			<h2>{{ $service->title }}</h2>
	</div>
	<div class="inner">
			<p>{{ $service->content }}</p>
	</div>
</section>
@include('landing.partials.contacto')
@include('landing.partials.footer')
@endsection
