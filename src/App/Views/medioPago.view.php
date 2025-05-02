<!DOCTYPE html>
<html lang="es">
<head>
	<?php require 'parts/head.view.php' ?>
	<link rel="stylesheet" href="/assets/css/medioPago.css">
</head>
<body>
<?php require 'parts/smallHeader.php' ?>
<main>
	<h1 class="title-cobro">Pagina de cobro</h1>
	<section class="details-pay">
		<h2>Detalles de mi compra</h2>
		<table> <!--RENDERIZAR DETALLES DE LA COMPRA ACA-->
			<tr>
				<th></th>
				<th>$123123</th>
			</tr>
			<tr>
				<td>Libro1</td>
				<td>$23123</td>
			</tr>
			<tr>
				<td>Libro2</td>
				<td>$23123</td>
			</tr>
		</table>
		<p>$$$</p>
	</section>
	<section class="contact-send">
		<h2>Información de contacto y envío</h2>
		<section>
			<section class="mail-box">
				<img src="/assets/img/mail.png" 
					alt="Mi correo" class="mail-icon">
				<p><strong>correo@example.com</strong></p>
			</section>
			<section class="location-box">
				<img src="/assets/img/location.png" 
					alt="Mi ubicación" class="location-icon">
				<section>  
					<p>Dirección</p>
					<p>Código postal</p>
					<p>Ciudad</p>
					<p>Teléfono</p>
				</section>
				<a class="button-1" href="/compraDestino">Cambiar</a>
			</section>
		</section>
	</section>
	<section>
		<form class="form-checkout" action="/realizar-pedido" method="POST">
			<legend class="legend-checkout">Medio de pago</legend>
			<label class="campo_obligatorio" for="tarjeta">
				Número de tarjeta *
			</label>
			<input class="form-input-text" type="text" id="tarjeta" 
				name="tarjeta" placeholder="Número de tarjeta" required>

			<label class="campo_obligatorio" for="titular">
				Titular de la tarjeta*
			</label>
			<input class="form-input-text" type="text" id="titular" 
				name="titular" placeholder="Titular de la tarjeta" required>

				<div class="tarjeta-wrapper">
					<label class="campo_obligatorio" for="vencimiento">
						Vencimiento (MM/AA)*
					</label>
					<input class="form-input-text" type="text" id="vencimiento"
						name="vencimiento" placeholder="MM/AA" required>

					<label class="campo_obligatorio" for="cvv">CVV *</label>
					<input class="form-input-text" type="text" id="cvv" 
						name="cvv" placeholder="CVV" required>
				</div>
			<label class="campo_obligatorio" for="cuotas">Cuotas *</label>
			<select class="select-big" id="cuotas" name="cuotas" required>
				<option class="campo_obligatorio" value="">
					Seleccionar *
				</option>
				<?php foreach ($cuotas as $cuota) { ?>
					<option value="<?= $cuota['cantidad_cuotas']?>">
						<?= $cuota['descripcion']?>
					</option>
				<?php } ?>
			</select>

			<label class="campo_obligatorio" for="tipo-doc">
				Tipo documento *
			</label>
			<select class="select-big" id="tipo-doc" name="tipo-doc" required>
				<option class="campo_obligatorio" value="">
					Seleccionar *
				</option>
				<option value="dni">DNI</option>
				<option value="cuit">CUIT</option>
			</select>

			<label class="campo_obligatorio" for="doc">Documento *</label>
			<input class="form-input-text" type="text" id="doc" name="doc" 
				placeholder="Documento (el anterior default)" required
			>

			<label class="campo_obligatorio" for="telefono">Teléfono *</label>
			<input class="form-input-text" type="text" id="telefono"
				name="telefono" 
				placeholder="Teléfono (el anterior default)" required
			>

			<input type="submit" class="button-submit" value="Realizar pedido">
		</form>
	</section>
</main>
</body>
</html>
