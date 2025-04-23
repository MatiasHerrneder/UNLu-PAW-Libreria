<header class="header-app">
    <nav>
      <section class="nav-icons">
        <a href="index.html" class="logo">
          <img src="Resources/img/PAWPrints.svg" alt="Mi sitio">
        </a>
        <search>
            <!--ATENCION A ESTE FORMULARIO-->
            <form action="search.php" method="get" class="search-bar">
            <input type="search" name="campo" placeholder="Buscar..." class="input-search">
            <button type="submit" class="submit-search">
              <img src="Resources/img/lupa.png" alt="Buscar">
            </button>
          </form>
        </search>
        <!--Encontrar la manera de pasarlo a index para que lo redireccione correctamente-->
        <a href="login.html" class="account">
          <img src="Resources/img/usuario.png" alt="Mi cuenta">
        </a>
        <a href="carrito.html" class="shopping-cart">
          <img src="Resources/img/carrito-de-compras.png" alt="Mi carrito">
        </a>
      </section>
      <section class="nav-links">
            <ul>
                <?php foreach($this->menu as $item) : ?>
                    <li><a href="<?= $item["href"] ?>"><?= $item["name"] ?></a></li>
                <?php endforeach ; ?>
            </ul>
        </section>
    </nav>
</header>
