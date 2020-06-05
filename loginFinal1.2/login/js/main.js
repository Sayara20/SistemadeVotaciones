jQuery(document).on('submit', '#formlg', function (event) {
    event.preventDefault();

    jQuery.ajax({
        url: '../php/login.php',
        type: 'POST',
        dataType: 'json',
        data: $(this).serialize(),
        beforeSend: function () {

        }
    })
        .done(function (respuesta) {
            console.log(respuesta);

            if (!respuesta.error) {
                if (respuesta.tipoUser == 'emprendedor') {
                    location.href = '../emprendedor.view.php';
                } else if (respuesta.tipoUser == 'empresario') {
                    location.href = '../contenido.view.php';
                }
            }

        })
        .fail(function (resp) {
            console.log(resp.responseText);
        })
        .always(function () {
            console.log("complete");
        });
});