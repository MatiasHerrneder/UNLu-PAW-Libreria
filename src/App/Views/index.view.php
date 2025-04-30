<!DOCTYPE html>
<html lang="es">
<head>
    <?php require 'parts/head.view.php'?>
    <link rel="stylesheet" href="/assets/css/index.css">
    <script type="text/javascript" src="/assets/js/slide.js" defer> </script>
</head>
<body>
<?php require 'parts/header.view.php';?>
<main>
    <!--Las secciones slides sera pre-procesadas por el servidor-->
    <div class="slideshow-container"><?php foreach ($slides as $slide) {?>
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="<?=$slide["src"]?>" alt="<?=$slide["alt"]?>">
            <div class="text">Caption</div>
        </div>
    <?php }?>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
    </div>
    <section class="sell-section">
        <h1>Mas vendidos</h1>
        <section class="sell-slide">
            <button class="arrow left">&#8249;</button>
            <ul><?php foreach ($this->libros as $libro) {?>
                <li>
                    <a href="/libro?titulo=<?=urlencode($libro['titulo'])?>&autor=<?=urlencode($libro['autor'])?>&precio=<?=$libro['precio']?>&src=<?=$libro['src']?>">
                    <article>
                        <figure class="book">
                            <img src="<?=$libro["src"]?>" alt="<?=$libro["titulo"]?>">
                            <figcaption class="figcaption_center">
                                <?=$libro["titulo"]?>
                            </figcaption>
                        </figure>
                        <h2><?=$libro["titulo"]?></h2>
                        <p><?=$libro["autor"]?></p>
                        <p>$<?=$libro["precio"]?></p>
                    </article>
                    </a>
                </li>
            <?php } ?>
        <button class="arrow right">&#8250;</button>
      </section>
    </section>
</main>
<?php require 'parts/footer.view.php'; ?>
</body>
</html>