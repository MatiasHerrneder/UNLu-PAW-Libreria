<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php' ?>
    <link rel="stylesheet" href="/assets/css/compraDestino.css">
</head>
<body>
<?php require 'parts/smallHeader.view.php' ?>
<main>
    <section class="details-pay">
        <h2>Detalles de mi compra</h2>
        <table>
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
                <td>$100000</td>
            </tr>
        </table>
        <p>$$$</p>
    </section>
    <form class="form-checkout" action="destinatario.php" method="POST">
        <fieldset class="fieldset-checkout">
            <legend class="legend-checkout">Datos del destinatario</legend>
            
            <label for="nombre campo_obligatorio">Nombre *</label>
            <input class="form-input-text" type="text" id="nombre" 
                name="nombre" placeholder="Nombre" required>

            <label for="apellido campo_obligatorio">Apellido *</label>
            <input class="form-input-text" type="text" id="apellido" 
                name="apellido" placeholder="Apellido" required>

            <label for="telefono campo_obligatorio">Teléfono *</label>
            <input class="form-input-text" type="tel" id="telefono" 
                name="telefono" placeholder="Teléfono" required>

            <label for="codigoPostal campo_obligatorio">Código postal *</label>
            <input class="form-input-text" type="text" id="codigoPostal" 
                name="codigoPostal" placeholder="Código postal" required>

            <label for="calle campo_obligatorio">Calle *</label>
            <input class="form-input-text" type="text" id="calle" 
                name="calle" placeholder="Calle" required>

            <label for="numero campo_obligatorio">Número *</label>
            <input class="form-input-text" type="text" id="numero" 
                name="numero" placeholder="Número" required>

            <label for="departamento">Departamento</label>
            <input class="form-input-text" type="text" id="departamento" 
                name="departamento" placeholder="Departamento">

            <label for="barrio">Barrio</label>
            <input class="form-input-text" type="text" id="barrio" 
                name="barrio" placeholder="Barrio">

            <label for="ciudad">Ciudad *</label>
            <input class="form-input-text campo_obligatorio" type="text" id="ciudad" 
                name="ciudad" placeholder="Ciudad" required>
        </fieldset>
        <fieldset class="fieldset-checkout">
            <legend class="legend-checkout">Datos de facturación</legend>
            <label for="dni" class="campo_obligatorio">DNI o CUIT *</label>
            <input class="form-input-text" type="text" id="dni" 
                name="dni" placeholder="DNI o CUIT" required>
        </fieldset>
        <input type="submit" class="button-submit" value="Continuar con el pago">
    </form>
  </main>
</body>
</html>
