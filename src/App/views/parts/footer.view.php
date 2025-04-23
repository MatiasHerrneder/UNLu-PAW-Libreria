<footer class="footer-app">
    <section class="social-net">
        <h1>Redes Sociales</h1>
        <address>
            <ul><?php foreach ($this->social_networks as $social) { ?>
                <li>
<!--Esto x ejemplo devuelve html <a href="/facebook..." alt="facebook" id="facebook">-->
                    <a href ="<?php $social["href"]?>" alt="<?php $social["name"]?>" id="<?php $social["name"]?>">
                        <img src="img/<?php $social["name"]?>.png" alt="<?php $social["name"]?>">
                    </a>
                </li>
            <?php } ?></ul>
        </address>
    </section>
    <section class="contact">
        <h1>Contacto</h1>
        <address>
        <ul>
            <?php foreach ($this->contactos as $contacto) { ?>
                <li>
                    <a href="<?php $contacto["href"]?>"><?php $contacto["data"]?></a>
                </li>
            <?php } ?>
        </ul>
        </address>
    </section>
</footer>
