
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

			<div class="col-md-3">
				<div class="aside">
					<h3 class="aside-title">Categorias</h3>
					<div class="checkbox-filter">

						<?php
							foreach($categoria as $n) {
						?>

							<div class="input-checkbox">
								<input type="checkbox" class="check inp" name="categoria" value=<?php echo $n->idCategoria; ?> id= <?php echo "category-".$n->idCategoria; ?> >
								<label for= <?php echo "category-".$n->idCategoria; ?> >
									<span></span>
									<?php echo $n->categoria; ?>
									<small><?php echo "(".$n->numArticulo.")"; ?></small>
								</label>
							</div>

						<?php
							}
						?>

					</div>
				</div>
				
				<div class="aside">
					<h3 class="aside-title">Precio</h3>
					<div class="price-filter">
						<div class="input-number price-min">
							<input class="price inp" name="preciomin" type="number" placeholder="Min.">
						</div>
						<span>-</span>
						<div class="input-number price-max">
							<input class="price inp" name="preciomax" type="number" placeholder="Max.">
						</div>
					</div>
				</div>
				
				<div class="aside">
					<h3 class="aside-title">Marcas</h3>
					<div class="checkbox-filter">

						<?php
							foreach($marca as $n) {
						?>

							<div class="input-checkbox">
								<input type="checkbox inp" name="marca" class="check" value=<?php echo $n->idMarca; ?>  id= <?php echo "brand-".$n->idMarca; ?> >
								<label for= <?php echo "brand-".$n->idMarca; ?> >
									<span></span>
									<?php echo $n->marca; ?>
									<small><?php echo "(".$n->numArticulo.")"; ?></small>
								</label>
							</div>

						<?php
							}
						?>

					</div>
				</div>

				<div class="aside">
					<div class="producto-btn">
						<div class="add-carrito">
							<button class="add-carrito-btn"><i class="fa fa-filter"></i> Filtrar </button>
						</div>									
					</div>
				</div>

			</div>
			
			<div id="store" class="col-md-9">
				<div class="store-filter clearfix">
					<div class="store-sort">
						<label>
							Ordenar por:
							<select class="input-select">
								<option value="0">Precio mas bajo</option>
								<option value="1">Precio mas alto</option>
							</select>
						</label>
					</div>
				</div>
				
				<div class="row">

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
											<button class="add-carrito-btn" onClick= <?php echo "envioDatos('paginas','producto','producto=".$n->idArticulo."');" ?>><i class="fa fa-shopping-cart"></i> Ver producto </button>
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
	</div>
</div>