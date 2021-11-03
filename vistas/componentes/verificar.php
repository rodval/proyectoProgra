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
                        <h3 class="title">Datos de envio</h3>
                    </div>
                    <div class="order-summary">
							<div class="form-group">
								<input class="input inp" type="text" name="nombre" placeholder="Nombre" value = <?php echo isset($_SESSION["user"]) ? $_SESSION["user"]["nombre"] : ""; ?>>
							</div>
							<div class="form-group">
								<input class="input inp" type="text" name="apellido" placeholder="Apellido" value = <?php echo isset($_SESSION["user"]) ? $_SESSION["user"]["apellido"] : ""; ?>>
							</div>
							<div class="form-group">
								<input class="input inp" type="text" name="direccion" placeholder="Direccion" value = <?php echo isset($_SESSION["user"]) ? $_SESSION["user"]["direccion"] : ""; ?>>
							</div>
							<div class="form-group">
								<input class="input inp" type="text" name="mail" placeholder="Correo electronico" value = <?php echo isset($_SESSION["user"]) ? $_SESSION["user"]["mail"] : ""; ?>>
							</div>
							<div class="form-group">
								<input class="input inp" type="text" name="telefono" placeholder="Telefono" value = <?php echo isset($_SESSION["user"]) ? $_SESSION["user"]["telefono"] : ""; ?>>
							</div>
                    </div>
                </div>

				<!-- Order Details -->
				<div class="col-md-5 order-details">
					<div class="section-title text-center">
						<h3 class="title">DETALLE COMPRA</h3>
					</div>
					<div class="order-summary">
						<div class="order-col">
							<div><strong>PRODUCTOS</strong></div>
							<div><strong>TOTAL</strong></div>
						</div>
						<div class="order-products">

							<?php 
								$total=0;
								foreach($lstArticulo as $key => $value){
									$articulo = Articulo::obtenerArticulo($value["producto"]);
							?>
	
								<div class="order-col">
									
									<?php if($guardarDato) { ?><div><a href=# onClick= <?php echo "envioDatos('paginas','procesarCompra','guardarDato=true&quitarDato=true&producto=".$key."');" ?> ><i class="fa fa-times-circle"></i></a></div><?php } ?>
									<div value=""> <?php echo $value["cantidad"]." x "; foreach($articulo as $n){ echo $n->articulo." / ".$n->marca; ?> </div>
									<div>
										<?php 
											$preciot = ($n->precio) * $value["cantidad"];
											$total = $total + $preciot;
											echo "$".$preciot; }
										?>
									</div>
								</div>
	
							<?php
								}
							?>

						</div>
						<div class="order-col">
							<div><strong>TOTAL</strong></div>
							<div><strong class="order-total"><?php echo "$".$total; ?></strong></div>
						</div>
					</div>
					<a href="#" class="primary-btn order-submit" id="inp" onClick= <?php echo isset($_SESSION["user"]) ? "envioDatos('compra','agregarCompra');" : "envioCampos('paginas','agregarCompra',this);" ?> >Procesar compra</a>
				</div>
			</div>
		</div>
	</div>
</div>