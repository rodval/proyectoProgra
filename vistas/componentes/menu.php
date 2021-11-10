<nav class="navigation">
    <div class="container">
        <div id="responsive-nav">
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="#" onClick="envioDatos('paginas','inicio');" >Inicio</a></li>
                <li><a href="#" onClick="envioDatos('paginas','categorias');" >Productos</a></li>
                    <?php 
                        if(isset($_SESSION["sessionID"])){ 
                            if($_SESSION["user"]["idRol"] == 2){
                    ?>
                        <li><a href="#"  onClick="envioDatos('paginas','categorias');" >Mis pedidos</a></li>
                    <?php
                            } else {
                    ?>
                        <li><a href="#"  onClick="envioDatos('paginas','tableProductos');" >Pedidos</a></li>
                        <li><a href="#"  onClick="envioDatos('paginas','tableProductos');" >Adm. producto</a></li>
                    <?php
                            }
                        } 
                    ?>
            </ul>
    </div>
</nav>