<div class="section">
	<div class="container">
		<div class="row">
            
            <?php
                if($_SESSION["user"]["idRol"] == 1){
            ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Mail</th>
                            <th scope="col">N° de comprobante</th>
                            <th scope="col">Fecha compra</th>
                            <th scope="col">Monto cancelado</th>
                            <th scope="col">Articulos</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($compra as $n) { ?>

                            <tr>
                                <th scope="row"><?php echo $n->idVenta; ?></th>
                                <td><?php echo $n->nombre." ".$n->apellido; ?></td>
                                <td><?php echo $n->direccion; ?></td>
                                <td><?php echo $n->telefono; ?></td>
                                <td><?php echo $n->mail; ?></td>
                                <td><?php echo $n->comprobante; ?></td>
                                <td><?php echo date('d-m-Y', $n->fecha); ?></td>
                                <td><?php echo $n->total; ?></td>
                                <td><?php echo $n->articulos; ?></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>

            <?php
                } else if($_SESSION["user"]["idRol"] == 2){
            ?>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Direccion</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Mail</th>
                            <th scope="col">N° de comprobante</th>
                            <th scope="col">Fecha compra</th>
                            <th scope="col">Monto cancelado</th>
                            <th scope="col">Articulos</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php foreach($compra as $n) { ?>

                            <tr>
                                <th scope="row"><?php echo $n->idVenta; ?></th>
                                <td><?php echo $n->direccion; ?></td>
                                <td><?php echo $n->telefono; ?></td>
                                <td><?php echo $n->mail; ?></td>
                                <td><?php echo $n->comprobante; ?></td>
                                <td><?php echo date("d-m-Y", strtotime($n->fecha)); ?></td>
                                <td><?php echo $n->total; ?></td>
                                <td><?php echo $n->articulos; ?></td>
                            </tr>

                        <?php } ?>

                    </tbody>
                </table>

            <?php
                }
            ?>

        </div>
    </div>
</div>