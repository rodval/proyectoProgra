function realizaProceso(datos){
    $.ajax({
        type: "GET",
        url: "?controlador=paginas&accion=categorias",
        data: "valor=" + datos,
        success:function(data) {
            document.getElementsByTagName("html")[0].innerHTML = data;
        }
    });
}