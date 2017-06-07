<!-- Footer -->
<footer class="wrapper style1 align-center">
	<div class="inner">
		<ul class="icons">
			@foreach($Constant as $const)
				@if($const->var == "Enlace a Twitter")
				<li><a href="{{ $const->value }}" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
				@elseif($const->var == "Enlace a Facebook")
				<li><a href="{{ $const->value }}" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
				@elseif($const->var == "Enlace a Instagram")
				<li><a href="{{ $const->value }}" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
				@elseif($const->var == "Enlace a Linked in")
				<li><a href="{{ $const->value }}" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
				@elseif($const->var == "Telefono/Whatsapp")
				<li><a href="{{ $const->value }}" class="icon style2 fa-whatsapp"><span class="label">Telefono</span></a></li>
				@elseif($const->var == "Email")
				<li><a href="{{ $const->value }}" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
				@endif
			@endforeach
		</ul>
		<p>&copy; Dise&ntilde;o y desarrollo: <a href="http://tylmarketing.com">Torres Lapilover Marketing</a>.</p>
	</div>
</footer>
<!--end footer -->