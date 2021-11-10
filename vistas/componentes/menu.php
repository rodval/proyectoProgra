<nav class="navigation">
    <div class="container">
        <div id="responsive-nav">
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="#" onClick="envioDatos('paginas','inicio');" >Inicio</a></li>
                <li><a href="#" onClick="envioDatos('paginas','categorias');" >Productos</a></li>
                    <?php 
                        if(isset($_SESSION["sessionID"])){ 
                    ?>
                        <li><a href="#"  onClick="envioDatos('paginas','tablePedidos');" >Pedidos</a></li>
                    <?php
                            if($_SESSION["user"]["idRol"] == 1){
                    ?>
                        <li><a href="#"  onClick="envioDatos('paginas','tableProductos');" >Adm. producto</a></li>
                    <?php
                            }
                        } 
                    ?>
            </ul>
    </div>
</nav>