<header>
    <div class="top-header">
        <div class="container">
            <ul class="header-links pull-right">
                <li>
                    <a href="#" onClick= <?php echo isset($_SESSION["sessionID"]) ? "envioDatos('usuario','cerrarSession');" : "envioDatos('paginas','login');" ?>>
                        <i class="fa fa-user"></i> 
                        <span> <?php echo isset($_SESSION["sessionID"]) ? "Cerrar session" : "Registrarse / Iniciar session" ?> </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="#" class="logo">
                            <img src="img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header-buscar">
                        <div class="buscador-container">
                            <input class="input inp" name="buscador" placeholder="Que articulo buscas?">
                            <button id="inp" onClick="envioCampos('paginas','categorias',this);" class="btn-buscar">Buscar</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 clearfix">
                    <div class="header-carrito">
                        <div>
                            <a href="#" onClick= <?php echo isset($_SESSION['carritoCompraG']) ? "envioDatos('paginas','procesarCompra','guardarDato=true');" : "";  ?>>
                                <i class="fa fa-shopping-cart"></i>
                                <span>Carrito</span>
                                <div class="qty"> <?php echo $carrito; ?> </div>
                            </a>
                        </div>
                        <div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>