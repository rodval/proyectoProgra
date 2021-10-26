<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <div class="catalogo">
                    <div class="catalogo-img">
                        <img src="img/Denim_woman.png" alt="">
                    </div>
                    <div class="catalogo-body">
                        <h3>Damas</h3>
                        <a href="#" onClick= <?php echo "envioDatos('paginas','categorias','genero=0');" ?> class="btn-verCatalogo">Catalogo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-6">
                <div class="catalogo">
                    <div class="catalogo-img">
                        <img src="img/Newin_man.png" alt="">
                    </div>
                    <div class="catalogo-body">
                        <h3>Caballeros</h3>
                        <a href="#" onClick= <?php echo "envioDatos('paginas','categorias','genero=1');" ?>  class="btn-verCatalogo">Catalogo <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">

            <div class="col-md-12" >
                <div class="section-title">
                    <h3 class="title">Productos mas vedidos</h3>
                </div>
            </div>

            <?php
                foreach($articulo as $n) {
            ?>

                <div class="col-md-4 col-xs-6">
                    <div class="producto">
                        <div class="producto-img">
                            <img src= <?php echo ("img/" . $n->image); ?> alt="">
                            <div class="producto-label">
                                <span class="sale"><?php echo "-" . $n->descuento . "%"; ?></span>
                            </div>
                        </div>
                        <div class="producto-body">
                            <p class="producto-categoria"> <?php echo $n->categoria . " / ". $n->marca; ?> </p>
                            <h3 class="producto-nombre"><b> <?php echo $n->articulo; ?> </b></h3>
                            <h4 class="producto-precio"> 
                                <?php
                                    $precioAct = $n->precio - (($n->precio) * ($n->descuento / 100));
                                    echo ("$" . round($precioAct, 2)); 
                                ?> 
                                <del class="product-old-precio"><?php echo ("$" . $n->precio); ?></del>
                            </h4>
                            <div class="producto-line"></div>
                            <div class="producto-btn">
                                <div class="add-carrito">
                                    <button class="add-carrito-btn" onClick= <?php echo "envioDatos('paginas','producto','producto=".$n->idArticulo."');" ?> ><i class="fa fa-shopping-cart"></i> Ver producto </button>
                                </div>									
                            </div>
                        </div>
                    </div>
                </div>

            <?php
                }
            ?>

        </div>
    </div>
</div>