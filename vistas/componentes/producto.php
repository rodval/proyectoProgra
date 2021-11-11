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
                    <div class="container">
                        <div id="galley">
                            <ul class="imagenes">
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

                <?php
                    foreach($articulo as $n) {
                ?>

                    <div class="col-md-5">
                        <h2 class="nombreProducto"><?php echo $n->articulo ?></h2>

                        <p>Categoria: <?php echo $n->categoria ." / ". $n->marca ?> </p>

                        <?php
                            $precioAct = $n->precio - (($n->precio) * ($n->descuento / 100));
                        ?> 
                        
                        <div>
                            <h3 class="precioActual"><?php echo ("$" . round($precioAct, 2));  ?> <del class="precioAnterior"><?php echo $n->precio ?></del></h3>
                            <span class="inventarioProducto"><?php echo "(".$n->cantidad." en inventario)"  ?></span>
                        </div>

                        <p><?php echo $n->descripcion ?></p>

                        <div class="opcionesProducto">
                            <div class="selectProducto">
                                Talla
                                <select class="input-select inp" name="talla">

                                    <?php
                                        foreach($talla as $m) {
                                    ?>
                                        <option value= <?php echo $m->idTalla ?>> <?php echo $m->talla ?> </option>
                                    <?php
                                        }
                                    ?>

                                </select>
                            </div>

                            <div class="inputProducto">
                                Cant
                                <input  name="cantidad" class="precio inp" type="number" min="1" value="1" max= <?php echo $n->cantidad ?>>
                            </div>
                        </div>

                        <div class="producto-btn">
                            <div class="section-producto">     
                                <div class="add-carrito">
                                    <button class="add-carrito-btn" id="inp" value= <?php echo "guardarDato=true&producto=".$n->idArticulo."&precio=".$n->precio; ?> onClick = <?php echo "envioCampos('paginas','procesarCompra',this);" ?> >
                                        <i class="fa fa-shopping-cart"></i> Agregar a carrito 
                                    </button>
                                </div>	
                                <br>
                                <div class="add-carrito">
                                    <button class="add-carrito-btn" id="inp" value= <?php echo "producto=".$n->idArticulo."&precio=".$n->precio; ?> onClick= <?php echo "envioCampos('paginas','procesarCompra',this);" ?> >
                                        <i class="fa fa-shopping-bag"></i> Comprar ahora 
                                    </button>
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