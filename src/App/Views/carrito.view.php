<!DOCTYPE html>
<html lang="es">
<head>
  <?php require 'parts/head.view.php'?>
  <link rel="stylesheet" href="/assets/css/carrito.css">
  <link rel="stylesheet" href="/assets/css/elements.css">
</head>
<body>
<?php require 'parts/header.view.php' ?>
<main>
    <h1>Carrito</h1>
    <section class="books">
        <form action="/checkout" method="POST">
            <table>
                <tr>
                    <th>Producto</th>
                    <th></th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
            <td class="td-figure">       
              <figure>
                <picture>
                  <img src="/assets/img/libro-abierto.png" alt="">
                </picture>
              </figure>
            </td>
            <td>
              <p>Libro</p>
            </td>
            <td>$123123</td>
            <td>
              <div class="quantity-wrapper">
                <button class="button-book minus">−</button>
                <input type="number" class="input-number" name="cantidad_nexus" id="ejemplo" value="1" min="1" step="1">
                <button class="button-book plus">+</button>
              </div>
            </td>
            <td>$123123</td>
          </tr>
          <tr>
            <td class="td-figure">
              <figure>
                <picture>
                  <img src="/assets/img/libro-abierto.png" alt="">
                </picture>
              </figure>
            </td>
            <td>
              <p>Libro</p>
            </td>
            <td>$123123</td>
            <td>
              <div class="quantity-wrapper">
                <button class="button-book minus">−</button>
                <input type="number" class="input-number" name="cantidad_nexus" id="ejemplo" value="1" min="1" step="1">
                <button class="button-book plus">+</button>
              </div>
            </td>
            <td>$123123</td>
          </tr>
        </table>
        <a href="/tienda" class="button-submit">Seguir Comprando</a>
      </section>
      <section class="finish-purchase">
        <h2>Total del carrito</h2>
        <table>
          <tr>
            <th>Subtotal</th>
            <td>$123123</td>
          </tr>
          <tr>
            <th>Envio</th>
            <td>$111</td>
          </tr>
          <tr>
            <th>Total</th>
            <td>$123234</td>
          </tr>
        </table>
        <a href="/compraDestino" class="button-submit">Finalizar compra</a>
      </form>
    </section>
  </main>
<?php require 'parts/footer.view.php' ?>
</body>
</html>
