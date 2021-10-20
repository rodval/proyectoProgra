function realizaProceso(datos){
    $.ajax({
        type: "GET",
        url: "index.php?controlador=paginas&accion=categorias",
        data: "valor=" + datos,
        success:function(data) {
            document.getElementsByTagName("html")[0].innerHTML = data;
        }
    });
}