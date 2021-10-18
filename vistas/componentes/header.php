<header>
    <div class="top-header">
        <div class="container">
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-user-o"></i> Ver perfil</a></li>
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
                                <?php foreach($categoria as $categoria) { ?>
                                    <option value= <?php echo $categoria->idCategoria; ?> > <?php echo $categoria->categoria; ?> </option>
                                <?php } ?>
                            </select>
                            <input class="input" placeholder="Que articulo buscas?">
                            <button class="btn-buscar">Buscar</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-3 clearfix">
                    <div class="header-carrito">
                        <div>
                            <a href="#">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Carrito</span>
                                <!-- <div class="qty">2</div> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>