//Mostrar Resultado Ejercicio 1
$("#mostrarej1").off("click");
$("#mostrarej1").on("click", function(e) {
    $('mostrarej1').attr("disabled", true);
    var num1 = $("#num1").val();
    var num2 = $("#num2").val();
   
    parametros = {
        'num1': num1,
        'num2': num2
    };
    $.ajax({
        type: "POST",
        url: "ResultadoEJ1.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg1").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg1").html(datos);
            $('#mostrarej1').attr("disabled", false);
            $('#num1').val(''),
            $('#num2').val('')
        }
    });
    event.preventDefault();
});



//Mostrar Resultado Ejercicio 2
$("#mostrarej2").off("click");
$("#mostrarej2").on("click", function(e) {
    $('mostrarej2').attr("disabled", true);
    var peso = $("#peso").val();
   
    parametros = {
        'peso': peso,
    };
    $.ajax({
        type: "POST",
        url: "ResultadoEJ2.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg2").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg2").html(datos);
            $('#mostrarej2').attr("disabled", false);
            $('#peso').val('')
        }
    });
    event.preventDefault();
});

//Mostrar Resultado Ejercicio 3
$("#mostrarej3").off("click");
$("#mostrarej3").on("click", function(e) {
    $('mostrarej3').attr("disabled", true);
    var texto = $("#texto").val();
   
    parametros = {
        'texto': texto,
    };
    $.ajax({
        type: "POST",
        url: "ResultadoEJ3.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg3").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg3").html(datos);
            $('#mostrarej3').attr("disabled", false);
            $('#texto').val('')
        }
    });
    event.preventDefault();
});



//Mostrar Resultado Ejercicio 3 V2
$("#mostrarej3v2").off("click");
$("#mostrarej3v2").on("click", function(e) {
    $('mostrarej3v2').attr("disabled", true);
    var texto2 = $("#texto2").val();
   
    parametros = {
        'texto2': texto2,
    };
    $.ajax({
        type: "POST",
        url: "ResultadoEJ3V2.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg4").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg4").html(datos);
            $('#mostrarej3v2').attr("disabled", false);
            $('#texto2').val('')
        }
    });
    event.preventDefault();
});



//Mostrar Resultado Ejercicio 4
$("#mostrarej4").off("click");
$("#mostrarej4").on("click", function(e) {
    $('mostrarej4').attr("disabled", true);
    var enlace = $("#enlace").val();
   
    parametros = {
        'enlace': enlace,
    };
    $.ajax({
        type: "POST",
        url: "ResultadoEJ4.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg5").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg5").html(datos);
            $('#mostrarej4').attr("disabled", false);
            $('#enlace').val('')
        }
    });
    event.preventDefault();
});



//Mostrar Resultado Ejercicio 4 V2
$("#mostrarej4v2").off("click");
$("#mostrarej4v2").on("click", function(e) {
    $('mostrarej4v2').attr("disabled", true);
    var enlace2 = $("#enlace2").val();
   
    parametros = {
        'enlace2': enlace2,
    };
    $.ajax({
        type: "POST",
        url: "ResultadoEJ4V2.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg6").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg6").html(datos);
            $('#mostrarej4v2').attr("disabled", false);
            $('#enlace2').val('')
        }
    });
    event.preventDefault();
});