/* hace el carrucel*/
$(document).ready(function() {
    $('.carousel').carousel();
});


$('.add_Votacion').click(function(e) {
    e.preventDefault();
    var add_Voto = $(this).attr('add_Voto');
    //alert(producto);
    document.querySelector('.bg-modal').style.display = "flex";
    // $('.bg-modal').fadeIn();
    console.log(add_Voto);
    var action = 'infoDigimon';

    var arreglo = $.ajax({
        url: 'ajax.php',
        type: 'POST',
        async: true,
        data: { action: action, add_Voto: add_Voto },

        success: function(response) {
            console.log(response);

            if (response != 'error') {
                var info = JSON.parse(response); //convierte nuestro ajax en un aobjeto json para poderlo modificar con js
                //console.log(info);
                $('#producto_id').val(info.id);
                $('.nameProducto').html(info.nombre); //las clases van en un punto
                $('.icono_logo').html(info.logo);
                var html = "";

                /* for(var i in info.data){
                     html+=`<p>id:<b>${info.data[i].id}</b></p>
                            <p>Nombre:<b>${info.data[i].nombre}</b></p>`
                 }
                 $("#lista_digimon").html(html);*/
            }
        },
        error: function(error) {
            console.log(error);
        }

    });

});

function closeModal() {
    $('.bg-modal').fadeOut();


};


function Votar() {
    cantidad = document.getElementById('Cantidad').value;
    id_producto = document.getElementById('producto_id').value;

    nameProducto = document.getElementById('nameProducto').innerHTML;

    function votar(nombre, id, cantidad) {
        this.nombre = nombre;
        this.id = id;
        this.cantidad = cantidad;
    }

    nuevoEmprendedor = new votar(nameProducto, id_producto, cantidad);
    console.log(nuevoEmprendedor);
    agregar();
}

var baseDatos = [];

function agregar() //esta funcion debe mandar a la base de datos
{
    baseDatos.push(nuevoEmprendedor);
    console.log(baseDatos);
    document.getElementById("tabla").innerHTML += '<tbody><td>' + nuevoEmprendedor.id + '</td><td>' + nuevoEmprendedor.nombre + '</td><td>' + '$ ' + nuevoEmprendedor.cantidad + '</td><td><button onclick="btn_Editar()">Editar</button ></td><td><button id="editarResultado">Eliminar</button></td></tbody>';
};




function btn_Editar() {
    alert("Hello World!");
}