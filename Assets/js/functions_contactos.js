let tableMensaje;
let divLoading = document.querySelector("#divLoading");
tableMensaje = $('#tableMensaje').dataTable( {
    "aProcessing":true,
    "aServerSide":true,
    "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
    },
    "ajax":{
        "url": " "+base_url+"/Contactos/getMensajes",
        "dataSrc":""
    },
    "columns":[
        {"data":"idMensaje"},
        {"data":"nombre"},
        {"data":"email"},
        {"data":"tema"},
        {"data":"fecha"},
        {"data":"options"}
    ],
    'dom': 'lBfrtip',
    'buttons': [
        {
            "extend": "copyHtml5",
            "text": "<i class='far fa-copy'></i> Copiar",
            "titleAttr":"Copiar",
            "className": "btn btn-secondary"
        },{
            "extend": "excelHtml5",
            "text": "<i class='fas fa-file-excel'></i> Excel",
            "titleAttr":"Esportar a Excel",
            "className": "btn btn-success"
        },{
            "extend": "pdfHtml5",
            "text": "<i class='fas fa-file-pdf'></i> PDF",
            "titleAttr":"Esportar a PDF",
            "className": "btn btn-danger"
        },{
            "extend": "csvHtml5",
            "text": "<i class='fas fa-file-csv'></i> CSV",
            "titleAttr":"Esportar a CSV",
            "className": "btn btn-info"
        }
    ],
    "resonsieve":"true",
    "bDestroy": true,
    "iDisplayLength": 10,
    "order":[[0,"desc"]]  
});


function fntViewInfo(idmensaje){
    let request = (window.XMLHttpRequest) ? 
                    new XMLHttpRequest() : 
                    new ActiveXObject('Microsoft.XMLHTTP');
    let ajaxUrl = base_url+'/Contactos/getMensaje/'+idmensaje;
    request.open("GET",ajaxUrl,true);
    request.send();
    request.onreadystatechange = function(){
        if(request.readyState == 4 && request.status == 200){
            let objData = JSON.parse(request.responseText);
            if(objData.status)
            {
                let objMesaje = objData.data;
                document.querySelector("#celCodigo").innerHTML = objMesaje.id;
                document.querySelector("#celNombre").innerHTML = objMesaje.nombre;
                document.querySelector("#celEmail").innerHTML = objMesaje.email;
                document.querySelector("#celTema").innerHTML = objMesaje.tema;
                document.querySelector("#celFecha").innerHTML = objMesaje.fecha;
                document.querySelector("#celMensaje").innerHTML = objMesaje.mensaje;
                $('#modalViewMensaje').modal('show');
            }else{
                swal("Error", objData.msg , "error");
            }
        }
    } 
}

function fntDelMensaje(idMensaje) {
    
    swal({
        title: "Eliminar el mensaje",
        text: "¿Realmente quiere eliminar el mensaje?",
        type: "warning",
        showCancelButton: true,
        confirmButtonText: "Si, eliminar!",
        cancelButtonText: "No, cancelar!",
        closeOnConfirm: false,
        closeOnCancel: true
    }, function (isConfirm) {

        if (isConfirm) {
            let request = (window.XMLHttpRequest) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
            let ajaxUrl = base_url + '/Contactos/delMensaje';
            let strData = "idMensaje=" + idMensaje;
            request.open("POST", ajaxUrl, true);
            request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            request.send(strData);
            request.onreadystatechange = function () {
                if (request.readyState == 4 && request.status == 200) {
                    let objData = JSON.parse(request.responseText);
                    if (objData.status) {
                        swal("Eliminar!", objData.msg, "success");
                        tableMensaje.api().ajax.reload();
                    } else {
                        swal("Atención!", objData.msg, "error");
                    }
                }
            }
        }

    });

}

