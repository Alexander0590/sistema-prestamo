$(document).ready(function(){
    console.log("Estoy en modo jquery");


$("#clientes").click(function(){
    $("#paginas").load("vistas/clientes.php");
});

$("#usuarios").click(function(){
    $("#paginas").load("vistas/usuarios.php");
});
$("#prestamos").click(function(){
    $("#paginas").load("vistas/prestamos.php");
});
$("#li_pre").click(function(){
    $("#paginas").load("vistas/listado_pre.php");
});
$(document).on('change','#ttip',function(){
    var tipo=$('#ttip').val();
    if(tipo=='mensual'){
        $('#tcuo').val(1);
        $('#tcuo').attr("readonly","true").css('background-color','#c4f5e8');
    }else{
        $('#tcuo').val('');
        $('#tcuo').css('background-color','#ffffff')
        $('#tcuo').removeAttr("readOnly");
    }
});

function calculos(){
    var cantidad=parseFloat($('#tcan').val());
    var interes=parseInt($('#tint').val());
    var ncuotas=parseInt($('#tcuo').val());
    var cuota=(cantidad+(cantidad*(interes/100)))/ncuotas 
    $('#tmen').val(cuota);
}
$(document).on('keyup','#tcan',function(){
    calculos();
})
$(document).on('keyup','#tint',function(){
    calculos();
})
$(document).on('keyup','#tcuo',function(){
    calculos();
})

$("#btnbus").click(function(){
    let dni = document.getElementById("tdni").value;
    fetch("https://apiperu.dev/api/dni/"+dni+"?api_token=478cabbcefd9e0195be12e3725f768aa2226d82768163159514cc349df6e1f43")
    .then((datos)=> datos.json())
    .then((respuesta)=>{
        console.log(respuesta.data)
    document.getElementById("tnom").value=respuesta.data.nombres;
    document.getElementById("tape").value=respuesta.data.apellido_paterno+" "+respuesta.data.apellido_materno;
    })
});

//$(document).on('change','#tzona',function(){
    // Código para recoger el valor de una lista
    //var x = document.getElementById('tzona').value;
    //$("#paginas").load("vistas/listado_pre.php?$colorCard=" + x);
//});

$(document).on('click', '#prestam', function() {
    // Obtener el código del préstamo desde el atributo data-codigo usando attr()
    var codigo = $(this).attr('data-codigo');
    // Si el código está correctamente capturado, carga los detalles en el contenedor #paginas
    if (codigo) {
        $("#paginas").load("vistas/detalle_pre.php?codigo=" + codigo);
    } else {
        console.log("No se pudo obtener el código del préstamo.");
    }
});


});