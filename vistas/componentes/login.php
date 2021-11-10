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
                            <input class="input inp1" type="text" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <input class="input inp1" type="text" name="apellido" placeholder="Apellido">
                        </div>
                        <div class="form-group">
                            <input class="input inp1" type="text" name="direccion" placeholder="Direccion">
                        </div>
                        <div class="form-group">
                            <input class="input inp1" type="text" name="mail" placeholder="Correo electronico">
                        </div>
                        <div class="form-group">
                            <input class="input inp1" type="text" name="telefono" placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <input class="input inp1" type="text" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <input class="input inp1" type="text" name="clave" placeholder="Clave">
                        </div>
                        <div class="form-group">
                            <input class="input inp1" type="text"name="clave2" placeholder="Confirmar clave">
                        </div>
                    </div>
                    <a href="#" class="primary-btn order-submit" id="inp1" value="n=1" onClick="envioCampos('usuario','agregarUsuario',this);" >Registrarse</a>
                </div>

                <div class="col-md-5 order-details">
                    <div class="section-title text-center">
                        <h3 class="title">Iniciar sesion</h3>
                    </div>
                    <div class="order-summary">
                        <div class="form-group">
                            <input class="input inp2" type="text" name="usuario" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <input class="input inp2" type="password" name="clave" placeholder="Clave">
                        </div>
                    </div>
                    <a href="#" class="primary-btn order-submit" id="inp2" value="n=1" onClick="envioCampos('usuario','validarUsuario',this);">Iniciar sesion</a>
                </div>
            </div>

        </div>
    </div>
</div>