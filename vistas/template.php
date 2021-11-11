<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>ULook</title>
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link type="text/css" rel="stylesheet" href="css/main.css"/>
		<link type="text/css" rel="stylesheet" href="css/controles.css"/>
		<link type="text/css" rel="stylesheet" href="css/producto.css"/>
		<link type="text/css" rel="stylesheet" href="css/carrito.css"/>
		<link type="text/css" rel="stylesheet" href="css/loading.css"/>
		<link type="text/css" rel="stylesheet" href="css/modal.css"/>
		<link rel="stylesheet" href="css/viewer.css">
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="js/envioAJAX.js"></script>
		<script type="text/javascript" src="js/operaciones.js"></script>
    </head>
	<!--
		Las clases: 
			container, 
			pull-right,
			row
		Esta dada por la libreria bootstrap
	-->
	<body>
		<div class="loading"></div>
        <?php
            include_once("rout.php");
        ?>

		<div id="myModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h2>Notificación</h2>
				</div>
				<div class="modal-body">
					<p>Operación ejecutada con exito.</p>
				</div>
			</div>
		</div>
	</body>

	<script src="js/viewer.js"></script>
	<script> 
		loading();
	</script>

</html>
