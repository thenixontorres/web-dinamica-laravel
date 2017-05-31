<!-- Seven -->
<section id="Contacto" class="wrapper style1 align-center">
	<div class="inner medium">
		<h2>Contacto r&aacute;pido</h2>
		<form method="post" action="#">
			<div class="field half first">
				<label for="name">Nombre</label>
				<input type="text" name="name" id="name" value="" />
			</div>
			<div class="field half">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" value="" />
			</div>
			<div class="field">
				<label for="Mensaje">Mensaje</label>
				<textarea name="message" id="message" rows="6"></textarea>
			</div>
			<ul class="actions">
				<li><input type="submit" name="submit" id="submit" value="{{ $Constant[1]->value }}" /></li>
			</ul>
		</form>

	</div>
</section>