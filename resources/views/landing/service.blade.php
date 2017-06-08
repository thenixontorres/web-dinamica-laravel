@extends('layouts.blog')
@section('content')

<div class="slider-wrapper theme-default">
    <div id="htmlcaption" class="nivo-html-caption">
        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
    </div>
	<div id="slider" class="nivoSlider">
		<img src="{{ asset('/storage/images/').'/'.$service->banner_img }}" data-thumb="{{ asset('/storage/images/').'/'.$service->banner_img }}" alt="" title="#htmlcaption{{$service->id}}" />
    </div>
	<div id="htmlcaption{{$service->id}}" class="nivo-html-caption">
        <b style="color: #fff; font-size: 25px;">{{ $service->title }}</b>
    </div>
</div>
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-8 font-body">			
			<p class="article-content">{!! $service->content !!} </p>
		</div>	
		<div class="col-sm-4">				
			<h2 class="align-center">Contacto r&aacute;pido</h2>
			{!! Form::open(['route' => 'contacto']) !!}
				<div class="row">
					<div class="form-group col-sm-6">
					    {!! Form::label('name', 'Nombre:') !!}
					    {!! Form::text('title', null, ['class' => 'form-control field']) !!}
					</div>

					<div class="form-group col-sm-6">
					    {!! Form::label('email', 'Email:') !!}
					    {!! Form::email('email', null, ['class' => 'form-control field']) !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
					    {!! Form::label('message', 'Mensaje:') !!}
					    {!! Form::textarea('message', null, ['class' => 'form-control field']) !!}
					</div>
				</div>
				<div class="row">	
					<div class="form-group col-sm-12 align-center">
						<input type="submit" name="submit" id="submit" value="{{ $Constant[1]->value }}" />
					</div>
				</div>	
       		{!! Form::close() !!}
		</div>
	</div>
	<!--
	<div class="row">	
		<div class="col-sm-18">				
			<h2 class="align-center">Contacto r&aacute;pido</h2>
			{!! Form::open(['route' => 'contacto']) !!}
				<div class="row">
					<div class="form-group col-sm-6">
					    {!! Form::label('name', 'Nombre:') !!}
					    {!! Form::text('title', null, ['class' => 'form-control field']) !!}
					</div>

					<div class="form-group col-sm-6">
					    {!! Form::label('email', 'Email:') !!}
					    {!! Form::email('email', null, ['class' => 'form-control field']) !!}
					</div>
				</div>
				<div class="row">
					<div class="form-group col-sm-12">
					    {!! Form::label('message', 'Mensaje:') !!}
					    {!! Form::textarea('message', null, ['class' => 'form-control field']) !!}
					</div>
				</div>
				<div class="row">	
					<div class="form-group col-sm-12 align-center">
						<input type="submit" name="submit" id="submit" value="{{ $Constant[1]->value }}" />
					</div>
				</div>	
       		{!! Form::close() !!}
		</div>
	</div> 
	-->
	<div class="row">	
		<div class="col-sm-12">				
		@include('landing.partials.footer')	
		</div>
	</div>
</div>
@endsection
