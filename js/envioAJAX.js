function envioDatos(controlador,accion,datos){
    $.ajax({
        type: "POST",
        url: "?controlador=" + controlador + "&accion=" + accion,
        data: datos,
        success:function(data) {
            if(controlador == "usuario"){
                inicio();
            } else if(controlador == "compra"){
                //inicio();
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
    var str;

    str = context.value;
    inp.forEach(function(e){
        str = str + "&" + e.name.toString() + "=" + e.value.toString();
    });
        
    $.ajax({
        type: "POST",
        url: "?controlador=" + controlador + "&accion=" + accion,
        data: str,
        success:function(data) {
            if(controlador == "usuario" || controlador == "producto"){
                inicio();
            } else {
                document.getElementsByTagName("html")[0].innerHTML = data;
            }
        }
    });
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