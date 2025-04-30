<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php' ?>
    <link rel="stylesheet" href="/assets/css/tienda.css">
</head>
<body>
    <?php require 'parts/header.view.php'?>
<main>
    <section>
        <h1>Tienda</h1>
        <section>
            <label for="ordenar">Ordenar por:</label>
            <select class="select-big" id="ordenar" name="ordenar">
                <?php foreach ($opcionesOrdenamiento as $opcion) {?>
                    <option value="<?php $opcion['value']?>">
                        <?php $opcion['descripcion']?>
                    </option>
                <?php } ?>
            </select>
        </section>
    </section>
    <section>
        <search>
            <section class="filter-editorial">
                <h2>Filtrar por Editorial</h2>
                <label for="editorial">Selecciona una editorial:</label>
                <select id="editorial" name="editorial">
                    <option value="">Selecciona una editorial</option>
                </select>
            </section>
            <section class="filter-precio">
                <h2>Filtrar por Precios</h2>
                <form>
                    <label for="min-precio">Mín:</label>
                    <input type="number" id="min-precio" placeholder="Min" 
                        name="min-precio" min="2000" max="100000">

                    <label for="max-precio">Máx:</label>
                    <input type="number" id="max-precio" placeholder="Max" 
                        name="max-precio" min="2000" max="100000">
                    <input type="submit" value="Filtrar">
                </form>
            </section>
            <section class="filter-categorias">
                <h2 id="filter-categorias">Categorías</h2>
                <ol>
                    <?php foreach ($categoriasFiltro as $categoria) {?>
                        <li>
                            <a href="<?php $categoria['href']?>">
                                <?php $categoria['categoria']?>
                            </a>
                        </li>
                    <? } ?>
                </ol>
            </section>
        </search>
    </section>
    <section class="all-books-container">
        <ul><?php foreach ($this->libros as $libro) { ?>
            <li>
                <article>
                    <figure>
                        <img src="<?php $libro['src'] ?>" 
                            alt="<?php $libro['titulo']?>">
                    </figure>
                    <h2><?php $libro['titulo']?></h2>
                    <p><?php $libro['autor']?></p>
                    <p><?php $libro['precio']?></p>
                </article>
            </li>
        <?php }?></ul>
    </section>
</main>
<?php include 'parts/footer.view.php' ?>
</body>
</html>