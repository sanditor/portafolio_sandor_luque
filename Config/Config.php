<?php 
	
	require_once('Helpers/Helpers.php');

	$arrayReturnUrl = urlAbsoluta();
	define("BASE_URL", $arrayReturnUrl['BASE_URL']);
	define("PROTOCOL", $arrayReturnUrl['PROTOCOL']);	

	//Zona horaria
	date_default_timezone_set("America/Bogota");

	if (PROTOCOL == "http") {
		//Datos de conexión a Base de Datos Local
		define("DB_HOST", 'localhost');
		define("DB_NAME", 'db_portafolio');
		define("DB_USER", 'root');
		define("DB_PASSWORD", '');
		define("DB_PORT", '3306');
		define("DB_CHARSET", 'utf8');
	}else if(PROTOCOL == "https"){
		//Datos de conexión a Base de Datos Producción
		define("DB_HOST", 'localhost');
		define("DB_NAME", 'u378219037_db_portafolio');
		define("DB_USER", 'u378219037_root2');
		define("DB_PASSWORD", 'Elshalom7&');
		define("DB_PORT", '3306');
		define("DB_CHARSET", 'utf8');
	}
	

	//Datos Empresa
	const DIRECCION = "Calle 167 # 58B-96. Casa: 12";
	const DPTO_PAIS = "Bogótá, Colombia";
	const TELEMPRESA = "+(57)3124769266";
	const WHATSAPP = "+57  3124769266";
	const EMAIL_EMPRESA = "contacto@sandorluqueweb.com";
	const EMAIL_CONTACTO = "contacto@sandorluqueweb.com";
	const EMAIL_CONTACTO2 = "sluque@misena.edu.co";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "COP";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Portafolio SLF";
	const EMAIL_REMITENTE = "contacto@sandorluqueweb.com";
	const NOMBRE_EMPRESA = "Portafolio SLF";
	const WEB_EMPRESA = "https://portafolio.sandorluqueweb.com";
	
	//Variables de encryptar y desencryptar
	const METHOD = "AES-256-CBC";
	const SECRET_KEY = "sanditor@2016";
	const SECRET_IV = "101712";	

	// credenciales del servidor SMTP
	const HOSTSMTP = "smtp.hostinger.com";
	const USERNAME = "contacto@sandorluqueweb.com";
	const PASSWORD = "Elshalom7&";
 ?>