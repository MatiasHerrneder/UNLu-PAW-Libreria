<!DOCTYPE html>
<html lang="es">
<head>
	<?php require 'parts/head.view.php' ?>
	<link rel="stylesheet" href="/assets/css/contact.css">
</head>
<body>
<?php require 'parts/header.view.php' ?>
<main>
	<h1 class="title-contact">Contacto</h1>
	<form class="form-contact" action="contact.php" method="POST">
        <label for="nombre campo_obligatorio">Nombre y apellido *</label>
        <input class="form-input-text" type="text" id="nombre" name="nombre" required>

        <label for="correo campo_obligatorio">Correo *</label>
        <input class="form-input-text" type="email" id="correo" name="correo" required>

        <label for="asunto campo_obligatorio">Asunto *</label>
        <select class="select-big" id="asunto" name="asunto">
            <option value="" disabled selected hidden>Elegí una opción</option>
            <option value="opcion1">Opcion1</option>
            <option value="opcion2">Opcion2</option>
            <option value="opcion3">Opcion3</option>
        </select>

        <label for="orden">Número de orden</label>
        <input class="form-input-text" type="text" id="orden" name="orden">

        <label for="mensaje">Tu mensaje</label>
        <textarea class="form-input-text" name="mensaje" id="mensaje"></textarea>

        <input class="button-submit" type="submit" value="Enviar">
    </form>
  </main>
<?php require 'parts/footer.view.php' ?>
</body>
</html>

