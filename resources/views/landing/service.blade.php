@extends('layouts.blog')
@section('content')
<div class="container-fuid">
	<div class="row">
		<div class="col-sm-12">
			<img class="img img-responsive" style="min-width:100%;" src="{{ asset('/storage/images/').'/'.$service->banner_img }}" alt="" />
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1 font-body">			
			<h2>{{ $service->title }}</h2>
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
		<div class="col-sm-10 col-sm-offset-1">				
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
		<div class="col-sm-10 col-sm-offset-1">				
		@include('landing.partials.footer')	
		</div>
	</div>		
</div>
@endsection
