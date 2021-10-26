
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
                    <a href="#" class="primary-btn order-submit" onClick="agregarUsuario();" >Registrarse</a>
                </div>

                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Iniciar sesion</h3>
                    </div>
                    <div class="order-summary">
                        <div class="form-group">
                            <input class="input" type="text" id="usuarioI" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" id="claveI" placeholder="Clave">
                        </div>
                    </div>
                    <a href="#" class="primary-btn order-submit" onClick="iniciarSession();">Iniciar sesion</a>
                </div>
            </div>

        </div>
    </div>
</div>