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