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
                        <form>
                            <select class="input-select">
                                <?php foreach($categoria as $n) { ?>
                                    <option value= <?php echo $n->idCategoria; ?> > <?php echo $n->categoria; ?> </option>
                                <?php } ?>
                            </select>
                            <input class="input" placeholder="Que articulo buscas?">
                            <button class="btn-buscar">Buscar</button>
                        </form>
                    </div>
                </div>

                <?php if(isset($_SESSION["sessionID"])){ ?>
                    <div class="col-md-3 clearfix">
                        <div class="header-carrito">
                            <div>
                                <a href="#" onClick= <?php echo "envioDatos('paginas','verificarProducto',".$carrito.");" ?>>
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Carrito</span>
                                    <div class="qty"><?php echo $carrito ?></div>
                                </a>
                            </div>
                            <div>
                        </div>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>
</header>