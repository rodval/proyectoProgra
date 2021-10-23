<div class="descripcionSitio" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="descripcionSitio-header">Productos</h3>
                <ul class="descripcionSitio-tree">
                    <li><a href="#" onClick= <?php echo "envioDatos('paginas','inicio');" ?>>Inicio</a></li>
                    <li class="active">Detalle</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="section-producto">
                <div class="col-md-5">
                    <div class="product-details">
                        <div class="container">
                            <div id="galley">
                                <ul class="pictures">
                                    <?php
                                        foreach($imagenesArticulo as $n) {
                                    ?>
                                        <li><img data-original= <?php echo ("img/" . $n->url); ?> src= <?php echo ("img/" . $n->url); ?> ></li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                    foreach($articulo as $n) {
                ?>

                    <div class="col-md-5">
                        <div class="product-details">
                            <h2 class="product-name"><?php echo $n->articulo ?></h2>

                            <p>Categoria: <?php echo $n->categoria ." / ". $n->marca ?> </p>

                            <?php
                                $precioAct = $n->precio - (($n->precio) * ($n->descuento / 100));
                            ?> 
                            
                            <div>
                                <h3 class="product-price"><?php echo ("$" . round($precioAct, 2));  ?> <del class="product-old-price"><?php echo $n->precio ?></del></h3>
                                <span class="product-available"><?php echo "(".$n->cantidad." en inventario)"  ?></span>
                            </div>

                            <p><?php echo $n->descripcion ?></p>

                            <div class="product-options">
                                <label>
                                    Talla
                                    <select class="input-select">

                                        <?php
                                            foreach($talla as $m) {
                                        ?>
                                            <option value= <?php echo $m->idTalla ?>> <?php echo $m->talla ?> </option>
                                        <?php
                                            }
                                        ?>

                                    </select>
                                </label>
                            </div>

                            <div class="add-to-cart">
                                <div class="qty-label">
                                    Cant.
                                    <div class="input-number price-min">
                                        <input class="price" type="number" min="0" max= <?php echo $n->cantidad ?>>
                                        <span class="qty-up">+</span>
                                        <span class="qty-down">-</span>
                                    </div>
                                </div>
                            </div>

                            <div class="producto-btn">
                                <div class="add-carrito">
                                    <button class="add-carrito-btn"><i class="fa fa-shopping-cart"></i> Agregar </button>
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
</div>