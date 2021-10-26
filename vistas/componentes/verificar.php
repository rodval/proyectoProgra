<div class="descripcionSitio" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="descripcionSitio-header">Productos</h3>
                <ul class="descripcionSitio-tree">
                    <li><a href="#" onClick= <?php echo "envioDatos('paginas','inicio');" ?>>Inicio</a></li>
                    <li class="active">Compra</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="section">
	<div class="container">
		<div class="row">

		<div class="section-producto">
			<div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Registrarse</h3>
                    </div>
                    <div class="order-summary">
                        <div class="form-group">
                            <input class="input" type="text" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="direccion" placeholder="Direccion">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="mail" placeholder="Correo electronico">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="telefono" placeholder="Telefono">
                        </div>
                    </div>
					<div class="form-group">
						<div class="input-checkbox">
							<input type="checkbox" id="create-account">
							<label for="create-account">
								<span></span>
								Crear cuenta?
							</label>
							<div class="caption">
								<div class="form-group">
									<input class="input" type="text" id="usuario" placeholder="Usuario">
								</div>
								<div class="form-group">
									<input class="input" type="text" id="clave" placeholder="Clave">
								</div>
								<div class="form-group">
									<input class="input" type="text" id="clave2" placeholder="Confirmar clave">
								</div>
							</div>
						</div>
					</div>
                </div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">Your Order</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCT</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						<div class="order-products">
							<div class="order-col">
								<div>1x Product Name Goes Here</div>
								<div>$980.00</div>
							</div>
							<div class="order-col">
								<div>2x Product Name Goes Here</div>
								<div>$980.00</div>
							</div>
						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div><strong class="order-total">$2940.00</strong></div>
						</div>
					</div>
					<a href="#" class="primary-btn order-submit">Procesar compra</a>
				</div>
			</div>
		</div>
	</div>
</div>