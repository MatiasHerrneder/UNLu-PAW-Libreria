<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php'?>
    <link rel="stylesheet" href="/assets/css/libro.css">
</head>
<body>
<?php require 'parts/header.view.php'?>
<main>
    <section class="section-book">
      <h1 class="book-title"><?=$libro['titulo']?></h1>
      <article>
        <figure>
          <img src="<?=$libro['image']?>" alt="<?=$libro['titulo']?>">
        </figure>
        <section class="book-info">
          <h3><?=$libro['titulo']?></h3>
          <p><?=$libro['autor']?></p>
          <p><?=$libro['precio']?></p>
          <p>ISBN: 123123123</p>
          <form method="POST">
            <label for="ejemplo">Cantidad:</label>
            <div class="quantity-wrapper">
              <button class="button-book minus">−</button>
              <input type="number" class="input-number" name="cantidad_nexus" id="ejemplo" value="1" min="1" step="1">
              <button class="button-book plus">+</button>
            </div>
            <button type="submit" class="button-submit">Comprar</button>
          </form>
        </section>
      </article>
    </section>
    <section class="section-description">
      <h2 class="description-title">Descripción</h2>
      <p class="description">
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
      </p>
    </section>
  </main>
<?php require 'parts/footer.view.php' ?>
</body>
</html>
