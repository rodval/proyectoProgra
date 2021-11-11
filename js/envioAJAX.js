function envioDatos(controlador,accion,datos){
    $.ajax({
        type: "POST",
        url: "?controlador=" + controlador + "&accion=" + accion,
        data: datos,
        success:function(data) {
            if(controlador == "usuario"){
                modal(1);
            } else {
                loading();
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

function envioCampos(controlador,accion,context,print){
    var selector = "."+context.id;
    var inp = document.querySelectorAll(selector);
    var str = context.value,envio = false;

    try {
        inp.forEach(function(e){
            if(e.value == '' || e.value == null){
                envio = false;
                e.setAttribute('style','border: 2px solid red;')
            } else {
                envio = true;
                e.setAttribute('value',e.value.toString());
                str = str + "&" + e.name.toString() + "=" + e.value.toString();
            }
        })
    }catch(e){
        envio = false;
        console.log('Ocurrio un error interno');
    }

    if(envio){
        $.ajax({
            type: "POST",
            url: "?controlador=" + controlador + "&accion=" + accion,
            data: str,
            success:function(data) {
                if(controlador == "usuario"){
                    modal(1);
                } else if(controlador == "producto"){ 
                    inicio();
                } else if(controlador == "compra"){
                    modal(2);
                } else {                    
                    loading();
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
            loading();
            document.getElementsByTagName("html")[0].innerHTML = data;
        }
    });
}

function procesarCompra(){
    var context = document.getElementsByClassName('section-producto')[0].innerHTML;
    document.body.innerHTML = context;
    window.print();
    inicio();
}

function loading(){
    setTimeout(function () {
        $(".loading").css({visibility:"hidden",opacity:"0"})
    }, 1000);
}

function modal(op){
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];

    modal.style.display = "block";

    span.onclick = function() {
        modal.style.display = "none";
        if(op == 1){
            inicio();
        } else if (op == 2){
            procesarCompra();
        }
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            if(op == 1){
                inicio();
            } else if (op == 2){
                procesarCompra();
            }
        }
    }
}