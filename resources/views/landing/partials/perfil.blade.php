<!-- Two -->
@if($Perfil->visibility == "1")
<section id="Perfil" class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
	<div class="content">
		@if(!empty($Cabecera->content->title))
		<h2>{{ $Perfil->content->title }}</h2>
		@endif
		<p>Detalles sobre el resumen curricular, experiencia, trabajo, objetivos y visi&oacute;n.</p>
		<ul class="actions vertical">
			<li><a href="#" class="button">M&aacute;s informaci&oacute;n</a></li>
		</ul>
	</div>
	<div class="image">
		<img src="images/spotlight01.jpg" alt="" />
	</div>
</section>
@endif