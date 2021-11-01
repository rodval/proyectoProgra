<div class="descripcionSitio" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="descripcionSitio-header">Productos</h3>
                <ul class="descripcionSitio-tree">
                    <li><a href="#" onClick= <?php echo "envioDatos('paginas','inicio');" ?>>Inicio</a></li>
                    <li class="active">Carrito de compras</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="section">
	<div class="container">
		<div class="row">
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Articulo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Descuento</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach($articulo as $n) { ?>

                        <tr>
                            <th scope="row"><?php echo $n->idArticulo; ?></th>
                            <td><?php echo $n->codigo; ?></td>
                            <td><?php echo $n->articulo; ?></td>
                            <td><?php echo $n->categoria; ?></td>
                            <td><?php echo $n->marca; ?></td>
                            <td><?php echo $n->descripcion; ?></td>
                            <td><?php echo $n->cantidad; ?></td>
                            <td><?php echo $n->precio; ?></td>
                            <td><?php echo $n->descuento; ?></td>
                            <td><?php echo $n->estado == 1 ? 'Activo' :  'Desactivado' ?></td>
                            <td><?php echo $n->genero == 1 ? 'Caballero' :  'Dama' ?></td>
                            <td><?php echo 'Editar/Eliminar' ?></td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>

        </div>
    </div>
</div>