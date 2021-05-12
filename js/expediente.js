var url = "./../controlador/expediente.controlador.php";

$(document).ready(function() {
    Consultar();
})

function Consultar() {
    $.ajax({
        data: { "accion": "CONSULTAR" },
        url: url,
        type: 'POST',
        dataType: 'json'
    }).done(function(response) {
        var html = "";
        $.each(response, function(index, data) {
            html += "<tr>";
            html += "<td>" + data.id_num_exp + "</td>";
            html += "<td>" + data.num_fol_exp + "</td>";
            html += "<td>" + data.fecha + "</td>";
            html += "<td>" + data.hora_p_circula + "</td>";
            html += "<td>" + data.p_circula + "</td>";
            html += "<td>" + data.tipo + "</td>";
            html += "<td>" + data.dp + "</td>";
            html += "<td>" + data.p1_recibe + "</td>";
            html += "<td>" + data.p1_c_recibe + "</td>";
            html += "<td>" + data.hora_p1_recibe + "</td>";
            html += "<td>" + data.p2_recibe + "</td>";
            html += "<td>" + data.p2_c_recibe + "</td>";
            html += "<td>" + data.hora_p2_recibe + "</td>";
            html += "<td>" + data.p3_recibe + "</td>";
            html += "<td>" + data.p3_c_recibe + "</td>";
            html += "<td>" + data.hora_p3_recibe + "</td>";
            html += "<td>";
            html += "<button class='btn btn-warning' onclick='ConsultarPorId(" + data.idExpediente + ");'><span class='fa fa-edit'></span></button>"
            html += "</td>";
            html += "<td>";
            html += "<button class='btn btn-danger' onclick='Eliminar(" + data.idExpediente + ");'><span class='fa fa-trash'></span></button>"
            html += "</td>";
            html += "</tr>";
        });

        document.getElementById("datos").innerHTML = html;
        $('#tablaExpedientes').DataTable();
    }).fail(function(response) {
        console.log(response);
    });
}

function ConsultarPorId(idExpediente) {
    $.ajax({
        url: url,
        data: { "idExpediente": idExpediente, "accion": "CONSULTAR_ID" },
        type: 'POST',
        dataType: 'json'
    }).done(function(response) {
        document.getElementById('id_num_exp').value = response.id_num_exp;
        document.getElementById('num_fol_exp').value = response.num_fol_exp;
        document.getElementById('fecha').value = response.fecha;
        document.getElementById('hora_p_circula').value = response.hora_p_circula;
        document.getElementById('p_circula').value = response.p_circula;
        document.getElementById('tipo').value = response.tipo;
        document.getElementById('dp').value = response.dp;
        document.getElementById('p1_recibe').value = response.p1_recibe;
        document.getElementById('p1_c_recibe').value = response.p1_c_recibe;
        document.getElementById('hora_p1_recibe').value = response.hora_p1_recibe;
        document.getElementById('p2_recibe').value = response.p2_recibe;
        document.getElementById('p2_c_recibe').value = response.p2_c_recibe;
        document.getElementById('hora_p2_recibe').value = response.hora_p2_recibe;
        document.getElementById('p3_recibe').value = response.p3_recibe;
        document.getElementById('p3_c_recibe').value = response.p3_c_recibe;
        document.getElementById('hora_p3_recibe').value = response.hora_p3_recibe;
        document.getElementById('idExpediente').value = response.idExpediente;
        BloquearBotones(false);
    }).fail(function(response) {
        console.log(response);
    });
}

function Guardar() {
    $.ajax({
        url: url,
        data: retornarDatos("GUARDAR"),
        type: 'POST',
        dataType: 'json'
    }).done(function(response) {
        if (response == "OK") {
            MostrarAlerta("Éxito!", "Datos guardados con éxito", "success");
        } else {
            MostrarAlerta("Error!", response, "error");
        }
        Limpiar();
        Consultar();
    }).fail(function(response) {
        console.log(response);
    });
}

function Modificar() {
    $.ajax({
        url: url,
        data: retornarDatos("MODIFICAR"),
        type: 'POST',
        dataType: 'json'
    }).done(function(response) {
        if (response == "OK") {
            MostrarAlerta("Éxito!", "Datos actualizados con éxito", "success");
        } else {
            MostrarAlerta("Error!", response, "error");
        }
        Limpiar();
        Consultar();
    }).fail(function(response) {
        console.log(response);
    });
}

function Eliminar(idExpediente) {
    $.ajax({
        url: url,
        data: { "idExpediente": idExpediente, "accion": "ELIMINAR" },
        type: 'POST',
        dataType: 'json'
    }).done(function(response) {
        if (response == "OK") {
            MostrarAlerta("Éxito!", "Datos eliminados con éxito", "success");
        } else {
            MostrarAlerta("Error!", response, "error");
        }
        Consultar();
    }).fail(function(response) {
        console.log(response);
    });
}

function Validar() {

    id_num_exp=document.getElementById('id_num_exp').value;
    num_fol_exp=document.getElementById('num_fol_exp').value;
    fecha=document.getElementById('fecha').value;
    hora_p_circula=document.getElementById('hora_p_circula').value;
    p_circula=document.getElementById('p_circula').value;
    tipo=document.getElementById('tipo').value;
    dp=document.getElementById('dp').value;
    p1_recibe=document.getElementById('p1_recibe').value;
    p1_c_recibe=document.getElementById('p1_c_recibe').value;
    hora_p1_recibe=document.getElementById('hora_p1_recibe').value;
    p2_recibe=document.getElementById('p2_recibe').value;
    p2_c_recibe=document.getElementById('p2_c_recibe').value;
    hora_p2_recibe=document.getElementById('hora_p2_recibe').value;
    p3_recibe=document.getElementById('p3_recibe').value;
    p3_c_recibe=document.getElementById('p3_c_recibe').value;
    hora_p3_recibe=document.getElementById('hora_p3_recibe').value;

    if (id_num_exp == "" || num_fol_exp == "" || fecha == "" ||  hora_p_circula == "" 
    || p_circula == "" || tipo=="" || dp=="" || p1_recibe=="" || p1_c_recibe=="" 
    || hora_p1_recibe=="" || p2_recibe=="" || p2_c_recibe=="" || hora_p2_recibe=="" 
    || p3_recibe=="" || p3_c_recibe=="" || hora_p3_recibe=="") {
        return false;
    }
    return true;
}

function retornarDatos(accion) {
    return {
    "id_num_exp":document.getElementById('id_num_exp').value,
    "num_fol_exp":document.getElementById('num_fol_exp').value,
    "fecha":document.getElementById('fecha').value,
    "hora_p_circula":document.getElementById('hora_p_circula').value,
    "p_circula":document.getElementById('p_circula').value,
    "tipo":document.getElementById('tipo').value,
    "dp":document.getElementById('dp').value,
    "p1_recibe":document.getElementById('p1_recibe').value,
    "p1_c_recibe":document.getElementById('p1_c_recibe').value,
    "hora_p1_recibe":document.getElementById('hora_p1_recibe').value,
    "p2_recibe":document.getElementById('p2_recibe').value,
    "p2_c_recibe":document.getElementById('p2_c_recibe').value,
    "hora_p2_recibe":document.getElementById('hora_p2_recibe').value,
    "p3_recibe":document.getElementById('p3_recibe').value,
    "p3_c_recibe":document.getElementById('p3_c_recibe').value,
    "hora_p3_recibe":document.getElementById('hora_p3_recibe').value,
    "accion": accion,
    "idExpediente": document.getElementById("idExpediente").value
    };
}

function Limpiar() {

document.getElementById('id_num_exp').value="";
document.getElementById('num_fol_exp').value="";
document.getElementById('fecha').value = "";
document.getElementById('hora_p_circula').value="";
document.getElementById('p_circula').value="";
document.getElementById('tipo').value = "";
document.getElementById('dp').value = "";
document.getElementById('p1_recibe').value="";
document.getElementById('p1_c_recibe').value="";
document.getElementById('hora_p1_recibe').value="";
document.getElementById('p2_recibe').value="";
document.getElementById('p2_c_recibe').value="";
document.getElementById('hora_p2_recibe').value="";
document.getElementById('p3_recibe').value="";
document.getElementById('p3_c_recibe').value="";
document.getElementById('hora_p3_recibe').value="";
document.getElementById('idExpediente').value="";
    BloquearBotones(true);
}

function BloquearBotones(guardar) {
    if (guardar) {
        document.getElementById('guardar').disabled = false;
        document.getElementById('modificar').disabled = true;
    } else {
        document.getElementById('guardar').disabled = true;
        document.getElementById('modificar').disabled = false;
    }
}

function MostrarAlerta(titulo, descripcion, tipoAlerta) {
    Swal.fire(
        titulo,
        descripcion,
        tipoAlerta
    );
}