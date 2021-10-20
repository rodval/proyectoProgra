function envioDatos(controlador,accion,datos){
    $.ajax({
        type: "GET",
        url: "?controlador=" + controlador + "&accion=" + accion,
        data: datos,
        success:function(data) {
            Swal.fire({
                timer: 600,
                didOpen: () => {
                    Swal.showLoading()
                }
            }).then((result) => {
                if(result) document.getElementsByTagName("html")[0].innerHTML = data;
            });
        }
    });
}