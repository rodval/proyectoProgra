function envioDatos(controlador,accion,datos){
    $.ajax({
        type: "GET",
        url: "?controlador=" + controlador + "&accion=" + accion,
        data: datos,
        success:function(data) {
           document.getElementsByTagName("html")[0].innerHTML = data;
           if(accion == "producto"){
                var galley = document.getElementById('galley');
                var viewer = new Viewer(galley, {
                    url: 'data-original',
                    toolbar: {
                        oneToOne: true,
        
                        prev: function() {
                        viewer.prev(true);
                        },
        
                        play: true,
        
                        next: function() {
                        viewer.next(true);
                        },
                    },
                });
           }
        }
    });
}

function envioCampos(controlador,accion,context){
    var inp  = document.querySelectorAll("[id=inp]");
    var str = context.value;

    inp.forEach(function(e){
        str = str + "&" + e.name.toString() + "=" + e.value.toString();
    });

    $.ajax({
        type: "GET",
        url: "?controlador=" + controlador + "&accion=" + accion,
        data: str,
        success:function(data) {
           document.getElementsByTagName("html")[0].innerHTML = data;
        }
    });
}

function agregarUsuario(){
    var nombre = document.getElementById("nombre").value;
    var apellido = document.getElementById("apellido").value;
    var direccion = document.getElementById("direccion").value;
    var mail = document.getElementById("mail").value;

    var telefono = document.getElementById("telefono").value;
    var usuario = document.getElementById("usuario").value;
    var clave = document.getElementById("clave").value;
    var clave2 = document.getElementById("clave2").value;

    if(clave != clave2){
        alert('Las claves no coinciden');
    } else {
        $.ajax({
            type: "GET",
            url: "?controlador=usuario&accion=agregarUsuario",
            data: "nombre="+nombre+"&apellido="+apellido+"&direccion="+direccion+"&mail="+mail+"&telefono="+telefono+"&usuario="+usuario+"&clave="+clave,
            success:function(data) {
               document.getElementsByTagName("html")[0].innerHTML = data;
            }
        });
    }
}

function iniciarSession(){
    var usuario = document.getElementById("usuarioI").value;
    var clave = document.getElementById("claveI").value;

    $.ajax({
        type: "GET",
        url: "?controlador=usuario&accion=validarUsuario",
        data: "usuario="+usuario+"&clave="+clave,
        success:function(data) {
           document.getElementsByTagName("html")[0].innerHTML = data;
        }
    });
}