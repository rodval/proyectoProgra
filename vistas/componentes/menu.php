<nav class="navigation">
    <div class="container">
        <div id="responsive-nav">
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="#"  onClick=<?php echo "envioDatos('paginas','categorias');" ?> >Categorias</a></li>
                <?php if(isset($_SESSION["sessionID"])){ ?>
                    <li><a href="#"  onClick=<?php echo "envioDatos('paginas','categorias');" ?> >Mis pedidos</a></li>
                    <li><a href="#"  onClick=<?php echo "envioDatos('paginas','verificarProducto');" ?> >Adm. producto</a></li>
                <?php } ?>
            </ul>
    </div>
</nav>