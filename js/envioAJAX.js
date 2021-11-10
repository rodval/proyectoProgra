function envioDatos(controlador,accion,datos){
    $.ajax({
        type: "POST",
        url: "?controlador=" + controlador + "&accion=" + accion,
        data: datos,
        success:function(data) {
            if(controlador == "usuario"){
                inicio();
            } else {
                document.getElementsByTagName("html")[0].innerHTML = data;
            }
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
    var selector = "."+context.id;
    var inp = document.querySelectorAll(selector);
    var str,envio = true;

    try {
        inp.forEach(function(e){
            if(e.value == '' || e.value == null){
                e.setAttribute('style','border: 2px solid red;')
            } else {
                str = str + "&" + e.name.toString() + "=" + e.value.toString();
            }
        })
    }catch(e){
        accion = false;
        console.log('Ocurrio un error interno');
    }

    if(envio){
        $.ajax({
            type: "POST",
            url: "?controlador=" + controlador + "&accion=" + accion,
            data: str,
            success:function(data) {
                if(controlador == "usuario" || controlador == "producto" || controlador == "compra"){
                    inicio();
                } else {
                    document.getElementsByTagName("html")[0].innerHTML = data;
                }
            }
        });
    }
}

function inicio(){
    $.ajax({
        type: "POST",
        url: "?controlador=paginas&accion=inicio",
        data: "",
        success:function(data) {
            document.getElementsByTagName("html")[0].innerHTML = data;
        }
    });
}

