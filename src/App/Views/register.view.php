<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php' ?>
    <link rel="stylesheet" href="/assets/css/auth.css">
</head>
<body>
<?php require 'parts/header.view.php' ?>
	<main>
    <h1>Crear cuenta</h1>
    <?php if($procesado) {?>
        <h2>Formulario completado!!</h2>
        <p><?=$resultados['nombre']?></p>
        <p><?=$resultados['correo']?></p>
        <p><?=$resultados['contrasenia']?></p>
        <p><?=$resultados['confirmarContrasenia']?></p>
    <?php } ?>
    <form class="form-checkout" action="/register" method="POST">
        <label for="nombre">Nombre y apellido *</label>
        <input class="form-input-text" type="text" id="nombre" name="nombre" required>
        <label for="correo">Correo *</label>
        <input class="form-input-text" type="email" id="correo" name="correo" required>
        <label for="contrasenia">Contraseña *</label>
        <input class="form-input-text" type="password" id="contrasenia" name="contrasenia" required>
        <label for="confirmarContrasenia">Confirmar contraseña *</label>
        <input class="form-input-text" type="password" id="confirmarContrasenia" name="confirmarContrasenia" required>
        <input class="button-submit" type="submit" value="Acceder">
    </form>
    <p>¿Ya tienes una cuenta? <a href="/login">Iniciar sesión</a></p>
  </main>
<?php require 'parts/footer.view.php' ?>
</body>
</html>
