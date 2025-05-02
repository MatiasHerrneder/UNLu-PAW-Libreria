<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php'?>
    <link rel="stylesheet" href="/assets/css/auth.css">
</head>
<body>
    <?php require 'parts/header.view.php' ?>
	<main>
        <h1>Iniciar sesión</h1>
        <?php if ($procesado) {?>
            <h2>Formulario procesado!!</h2>
            <?= var_dump($_POST)?>
            <?= var_dump($resultados)?>
            <p><?=$resultados['correo']?></p>
            <p><?=$resultados['contrasenia']?></p>
        <?php }?>
        <form class="form-checkout" action="/login" method="POST">
            <label for="correo">Correo *</label>
            <input class="form-input-text" type="email" id="correo" name="correo" required>
            <label for="contrasenia">Contraseña *</label>
            <input class="form-input-text" type="password" id="contrasenia" name="contrasenia" required>
            <a href="recuperar.html">¿Olvidaste tu contraseña?</a>
            <input class="button-submit" type="submit" value="Acceder">
        </form>
        <p>¿No tienes una cuenta? <a href="/register">Crear cuenta</a></p>
    </main>
    <?php require 'parts/footer.view.php' ?>
</body>
</html>
