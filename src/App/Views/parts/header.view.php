<header class="header-app">
    <nav>
      <section class="nav-icons">
        <a href="/" class="logo">
          <img src="/assets/img/PAWPrints.svg" alt="Al indice">
        </a>
        <search>
            <!--ATENCION A ESTE FORMULARIO-->
            <form action="search.php" method="get" class="search-bar">
            <input type="search" name="campo" placeholder="Buscar..." class="input-search">
            <button type="submit" class="submit-search">
              <img src="/assets/img/lupa.png" alt="Buscar">
            </button>
          </form>
        </search>
        <!--Encontrar la manera de pasarlo a index para que lo redireccione correctamente-->
        <a href="/login" class="account">
          <img src="/assets/img/usuario.png" alt="Mi cuenta">
        </a>
        <a href="/carrito" class="shopping-cart">
          <img src="/assets/img/carrito-de-compras.png" alt="Mi carrito">
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
