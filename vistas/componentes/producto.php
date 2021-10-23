<div class="descripcionSitio" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="descripcionSitio-header">Productos</h3>
                <ul class="descripcionSitio-tree">
                    <li><a href="#" onClick= <?php echo "envioDatos('paginas','inicio');" ?>>Inicio</a></li>
                    <li class="active">Categorias</li>
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
                        <h2 class="product-name">product name goes here</h2>
                        <div class="container">
                            <div id="galley">
                                <ul class="pictures">
                                    <li><img data-original="img/product01.png" src="img/product01.png" ></li>
                                    <li><img data-original="img/product01.png" src="img/product01.png" ></li>
                                    <li><img data-original="img/product01.png" src="img/product01.png" ></li>
                                    <li><img data-original="img/product01.png" src="img/product01.png" ></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">product name goes here</h2>

                        <p>Categoria: 1,1</p>

                        <div>
                            <h3 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h3>
                            <span class="product-available">In Stock</span>
                        </div>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <div class="product-options">
                            <label>
                                Talla
                                <select class="input-select">
                                    <option value="0">X</option>
                                </select>
                            </label>
                        </div>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Cant.
                                <div class="input-number price-min">
                                    <input class="price" type="number">
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
            </div>
        </div>
    </div>
</div>