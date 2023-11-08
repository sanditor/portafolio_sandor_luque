//Función que me aplica el estilo a la opciòn seleccionada y quita la previamente seleccionada
function seleccionar(link) {
    var opciones = document.querySelectorAll('#links  a');
    opciones[0].className = "";
    opciones[1].className = "";
    opciones[2].className = "";
    opciones[3].className = "";
    opciones[4].className = "";
    link.className = "seleccionado";

    //Hacemos desaparecer el menu una vez que se ha seleccionado una opcion
    //en modo responsive
    var x = document.getElementById("nav");
    x.className = "";
}

//función que muestra el menu responsive
function responsiveMenu() {
    var x = document.getElementById("nav");
    if (x.className === "") {
        x.className = "responsive";
    } else {
        x.className = "";
    }
}

//detecto el scrolling para aplicar la animación del la barra de habilidades
window.onscroll = function() { efectoHabilidades() };

//funcion que aplica la animación de la barra de habilidades
function efectoHabilidades() {
    var skills = document.getElementById("skills");
    var distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;
    if (distancia_skills >= 300) {
        document.getElementById("html").classList.add("barra-progreso2");
        document.getElementById("js").classList.add("barra-progreso3");
        document.getElementById("bd").classList.add("barra-progreso4");
        document.getElementById("php").classList.add("barra-progreso1");
        document.getElementById("nodejs").classList.add("barra-progreso5");
        document.getElementById("vuejs").classList.add("barra-progreso5");
        document.getElementById("laravel").classList.add("barra-progreso4");
        document.getElementById("api").classList.add("barra-progreso4");
    }

}

//lógica para el lightBOx del portafolio
const imagenes = document.querySelectorAll('.img-galeria')
const imagenLight = document.querySelector('.agregar-imagen');
const contenedorLight = document.querySelector('.imagen-light')
const closeLight = document.querySelector('.close')
const hiddenMenuStyle = document.querySelector('.contenido header')


imagenes.forEach(imagen => {
    imagen.addEventListener('click',()=>{
        aparecerImagen(imagen.getAttribute('src'));
    })
});

contenedorLight.addEventListener('click',(e)=>{
    if(e.target !== imagenLight){
        contenedorLight.classList.toggle('show')
        imagenLight.classList.toggle('showImage')       
    }
})

closeLight.addEventListener('click', (e) => {
     hiddenMenuStyle.style.zIndex = "100"
})


const aparecerImagen = (imagen)=>{
    imagenLight.src = imagen;
    contenedorLight.classList.toggle('show')
    imagenLight.classList.toggle('showImage')
    hiddenMenuStyle.style.zIndex = "0" 
}


/* window.addEventListener('load', function() {
//lógica para envío de formularios
var form = document.getElementById("formContac");
    
async function handleSubmit(event) {
    event.preventDefault();
    var status = document.getElementById("my-form-status");
    var data = new FormData(event.target);
    fetch(event.target.action, {
    method: form.method,
    body: data,
    headers: {
        'Accept': 'application/json'
    }
    }).then(response => {
    if (response.ok) {
        status.innerHTML = "Gracias por tu mensaje, ha sido enviado con éxito! Pronto te responderemos!";
        status.style.color = "#35d191"
        
        if (status.classList.contains("hiddenMessage")) {
            console.log("entró1")
            status.classList.remove("hiddenMessage")
            status.classList.add("showMessage")
            setTimeout(function () {
                console.log("entró2")
                status.classList.remove("showMessage")
                status.classList.add("hiddenMessage")  
            }, 2000)
        }else{
            setTimeout(function() {
                console.log("entró3")
                status.classList.remove("showMessage")
                status.classList.add("hiddenMessage")
            }, 5000);
        }            
        
        form.reset()
    } else {
        response.json().then(data => {
        if (Object.hasOwn(data, 'errors')) {
            status.innerHTML = data["errors"].map(error => error["message"]).join(", ")
            status.style.color = "red"
            status.classList.toggle("hiddenMessage");
        } else {
            status.innerHTML = "Oops! Hay problema al enviar tu formulario"
            status.style.color = "red"
            status.classList.toggle("hiddenMessage");
        }
        })
    }
    }).catch(error => {
    status.innerHTML = "Oops! Hay problema al enviar tu formulario"
    });
}
form.addEventListener("submit", handleSubmit)

}, false);  */

//Guardar Contacto
if(document.querySelector("#frmContacto")){
	let frmContacto = document.querySelector("#frmContacto");
	frmContacto.addEventListener('submit',function(e) { 
		e.preventDefault();

		let nombre = document.querySelector("#txtNombreContacto").value;
        let email = document.querySelector("#txtEmailContacto").value;
        let tema = document.querySelector("#txtTemaContacto").value;		
		let mensaje = document.querySelector("#txtMensajeContacto").value;

		if(nombre == ""){
			alertify.error("El nombre es obligatorio");
			return false;
		}

		if(!fntEmailValidate(email)){
            alertify.error("El email no es válido.");
			return false;
		}

        if(tema == ""){
            alertify.error("Por favor escribe el tema.");
			return false;
		}

		if(mensaje == ""){
            alertify.error("Por favor escribe el mensaje.");
			return false;
		}	
		
		divLoading.style.display = "flex";
		let request = (window.XMLHttpRequest) ? 
                    new XMLHttpRequest() : 
                    new ActiveXObject('Microsoft.XMLHTTP');
		let ajaxUrl = base_url+'/Portafolio/setContacto';
		let formData = new FormData(frmContacto);
	   	request.open("POST",ajaxUrl,true);
	    request.send(formData);
	    request.onreadystatechange = function(){
	    	if(request.readyState != 4) return;
	    	if(request.status == 200){
	    		let objData = JSON.parse(request.responseText);
	    		if(objData.status){
                    alertify.success(objData.msg);
                	document.querySelector("#frmContacto").reset();
	    		}else{
                    alertify.error(objData.msg);
	    		}
	    	}
	    	divLoading.style.display = "none";
        	return false;
		}

	},false);
}

