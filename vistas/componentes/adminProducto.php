<div class="section">
    <div class="container">
        <div class="row">

            <div class="col-md-5 order-details">
                <div class="section-title text-center">
                    <h3 class="title">Adm. Producto</h3>
                </div>
                <div class="order-summary">
                    <div class="form-group">
                        <input class="input inp" type="text" name="codigo" placeholder="Codigo">
                    </div>
                    <div class="form-group">
                        <input class="input inp" type="text" name="producto" placeholder="Producto">
                    </div>
                    <div class="form-group product-options">
                        <select class="input-select inp" name="categoria">

                            <?php
                                foreach($categoria as $m) {
                            ?>
                                <option value= <?php echo $m->idCategoria ?>> <?php echo $m->categoria ?> </option>
                            <?php
                                }
                            ?>

                        </select>
                    </div>
                    <div class="form-group product-options">
                        <select class="input-select inp" name="marca">

                            <?php
                                foreach($marca as $m) {
                            ?>
                                <option value= <?php echo $m->idMarca ?>> <?php echo $m->marca ?> </option>
                            <?php
                                }
                            ?>

                        </select>
                    </div>
                    <div class="form-group input-number price-min">
                        <input class="input inp" type="number" name="precio" placeholder="Precio" step="any">
                    </div>
                    <div class="form-group input-number price-min">
                        <input class="input inp" type="number" name="cantidad" placeholder="Cantidad">
                    </div>
                    <div class="form-group">
                        <input class="input inp" type="text" name="descripcion" placeholder="Descripcion">
                    </div>
                    <div class="form-group input-number price-min">
                        <input class="input inp" type="number" name="descuento" placeholder="Descuento">
                    </div>

                    <div class="form-group product-options">
                        <select class="input-select inp" name="genero">
                            <option value="0"> Femenino </option>
                            <option value="1"> Masculino </option>
                        </select>
                    </div>
                </div>
                <a href="#" class="primary-btn order-submit" id="inp" onClick= "envioCampos('producto','agregarProducto',this);" >Crear producto</a>
            </div>

        </div>
    </div>
</div>