function main()
{
    $.ajax({
        method  : "GET",
        url     : "/",
        async   : true,
        beforeSend: function () {
            loading('show');
        },
        success: function (res) {
            //console.log(res);
            $('#result').html("<div class='jumbotron'>"
                 +   "<h1>Bienvenido a la app de Empleados, por favor seleccione opción desde el menú</h1>"
                +   "</div>");
            loading('hide');
        }
    });
}

function route(route) {
    $.ajax({
        method  : "GET",
        url     : route,
        async   : true,
        beforeSend: function () {
            loading('show');
        },
        success: function (res) {
            console.log(res);
            $('#result').html(res);
            loading('hide');
        }
    });
}

function guardarEmpleado()
{
    
    $.ajax({
        method  : "POST",
        url     : 'empleados/guardar',
        data    : $('#crearEmpleado').serialize(),  
        async   : true,
        beforeSend: function () {
            loading('show');
        },
        success: function (res) {
            // console.log(res);
            $('#ajxRes').html(res);
            $('#ajxResContainer').show();
            loading('hide');
        }
    });
}

function loading(accion = 'show') {
        
    if (accion === 'show') {
        $('body').append("<div id='Loading'></div>");
    } else if (accion === 'hide') {
       $('body').find('#Loading').remove();
    }

}