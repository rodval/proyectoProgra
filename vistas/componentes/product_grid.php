<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Productos mas vedidos</h3>
                </div>
            </div>

            <?php
                foreach($articulo as $articulo) {
            ?>

                <div class="col-md-4 col-xs-6">
                    <div class="producto">
                        <div class="producto-img">
                            <img src= <?php echo ("img/" . $articulo->image); ?> alt="">
                            <div class="producto-label">
                                <span class="sale"><?php echo "-" . $articulo->descuento . "%"; ?></span>
                            </div>
                        </div>
                        <div class="producto-body">
                            <p class="producto-categoria"> <?php echo $articulo->categoria . " / ". $articulo->marca; ?> </p>
                            <h3 class="producto-nombre"><a href="#"> <?php echo $articulo->articulo; ?> </a></h3>
                            <h4 class="producto-precio"> 
                                <?php
                                    $precioAct = $articulo->precio - (($articulo->precio) * ($articulo->descuento / 100));
                                    echo ("$" . round($precioAct, 2)); 
                                ?> 
                                <del class="product-old-precio"><?php echo ("$" . $articulo->precio); ?></del>
                            </h4>
                            <div class="producto-line"></div>
                            <div class="producto-btn">
                                <div class="add-carrito">
                                    <button class="add-carrito-btn"><i class="fa fa-shopping-cart"></i> Agregar al carrito </button>
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