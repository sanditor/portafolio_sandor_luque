<?php

//Retorla la url del proyecto
function base_url()
{
    return BASE_URL;
}
//Retorla la url de Assets
function media()
{
    return BASE_URL . "/Assets";
}
function headerAdmin($data = "")
{
    $view_header = "Views/Template/header_admin.php";
    require_once($view_header);
}
function footerAdmin($data = "")
{
    $view_footer = "Views/Template/footer_admin.php";
    require_once($view_footer);
}
function headerPortafolio($data = "")
{
    $view_header = "Views/Template/header_portafolio.php";
    require_once($view_header);
}

function footerPortafolio($data = "")
{
    $view_header = "Views/Template/footer_portafolio.php";
    require_once($view_header);
}

//Muestra información formateada
function dep($data)
{
    $format  = print_r('<pre>');
    $format .= print_r($data);
    $format .= print_r('</pre>');
    return $format;
}
function getModal(string $nameModal, $data)
{
    $view_modal = "Views/Template/Modals/{$nameModal}.php";
    require_once $view_modal;
}
//Envio de correos
function sendEmail($data, $template)
{
    $asunto = $data['asunto'];
    $emailDestino1 = $data['email1'];
    $emailDestino2 = $data['email2'];
    $empresa = NOMBRE_REMITENTE;
    $remitente = EMAIL_REMITENTE;
    //ENVIO DE CORREO
    $de = "MIME-Version: 1.0\r\n";
    $de .= "Content-type: text/html; charset=UTF-8\r\n";
    $de .= "From: {$empresa} <{$remitente}>\r\n";
    
    // Generación del contenido del correo
    ob_start();
    require_once("Views/Template/Email/" . $template . ".php");
    $mensaje = ob_get_clean();

    // Envío del correo al primer destinatario
    $send1 = mail($emailDestino1, $asunto, $mensaje, $de);

    // Envío del correo al segundo destinatario
    $send2 = mail($emailDestino2, $asunto, $mensaje, $de);

    // Retorna true si ambos correos se enviaron exitosamente, false en caso contrario
    return $send1 && $send2;
}

function getPermisos(int $idmodulo)
{
    require_once("Models/PermisosModel.php");
    $objPermisos = new PermisosModel();
    $idrol = $_SESSION['userData']['idrol'];
    $arrPermisos = $objPermisos->permisosModulo($idrol);
    $permisos = '';
    $permisosMod = '';
    if (count($arrPermisos) > 0) {
        $permisos = $arrPermisos;
        $permisosMod = isset($arrPermisos[$idmodulo]) ? $arrPermisos[$idmodulo] : "";
    }
    $_SESSION['permisos'] = $permisos;
    $_SESSION['permisosMod'] = $permisosMod;
}

function sessionUser(int $idpersona)
{
    require_once("Models/LoginModel.php");
    $objLogin = new LoginModel();
    $request = $objLogin->sessionLogin($idpersona);
    return $request;
}

function sessionStart()
{
    session_start();
    $inactive = 60;
    if (isset($_SESSION['timeout'])) {
        $session_in = time() - $_SESSION['inicio'];
        if ($session_in > $inactive) {
            header("Location: " . BASE_URL . "/login");
        }
    } else {
        header("Location: " . BASE_URL . "/login");
    }
}

//Elimina exceso de espacios entre palabras
function strClean($strCadena)
{
    $string = preg_replace(['/\s+/', '/^\s|\s$/'], [' ', ''], $strCadena);
    $string = trim($string); //Elimina espacios en blanco al inicio y al final
    $string = stripslashes($string); // Elimina las \ invertidas
    $string = str_ireplace("<script>", "", $string);
    $string = str_ireplace("</script>", "", $string);
    $string = str_ireplace("<script src>", "", $string);
    $string = str_ireplace("<script type=>", "", $string);
    $string = str_ireplace("SELECT * FROM", "", $string);
    $string = str_ireplace("DELETE FROM", "", $string);
    $string = str_ireplace("INSERT INTO", "", $string);
    $string = str_ireplace("SELECT COUNT(*) FROM", "", $string);
    $string = str_ireplace("DROP TABLE", "", $string);
    $string = str_ireplace("OR '1'='1", "", $string);
    $string = str_ireplace('OR "1"="1"', "", $string);
    $string = str_ireplace('OR ´1´=´1´', "", $string);
    $string = str_ireplace("is NULL; --", "", $string);
    $string = str_ireplace("is NULL; --", "", $string);
    $string = str_ireplace("LIKE '", "", $string);
    $string = str_ireplace('LIKE "', "", $string);
    $string = str_ireplace("LIKE ´", "", $string);
    $string = str_ireplace("OR 'a'='a", "", $string);
    $string = str_ireplace('OR "a"="a', "", $string);
    $string = str_ireplace("OR ´a´=´a", "", $string);
    $string = str_ireplace("OR ´a´=´a", "", $string);
    $string = str_ireplace("--", "", $string);
    $string = str_ireplace("^", "", $string);
    $string = str_ireplace("[", "", $string);
    $string = str_ireplace("]", "", $string);
    $string = str_ireplace("==", "", $string);
    return $string;
}
//Genera una contraseña de 10 caracteres
function passGenerator($length = 10)
{
    $pass = "";
    $longitudPass = $length;
    $cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
    $longitudCadena = strlen($cadena);

    for ($i = 1; $i <= $longitudPass; $i++) {
        $pos = rand(0, $longitudCadena - 1);
        $pass .= substr($cadena, $pos, 1);
    }
    return $pass;
}
//Genera un token
function token()
{
    $r1 = bin2hex(random_bytes(10));
    $r2 = bin2hex(random_bytes(10));
    $r3 = bin2hex(random_bytes(10));
    $r4 = bin2hex(random_bytes(10));
    $token = $r1 . '-' . $r2 . '-' . $r3 . '-' . $r4;
    return $token;
}
//Encryptar contraseña
function encryption($string)
{
    $output = FALSE;
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
    $output = openssl_encrypt($string, METHOD, $key, 0, $iv);
    $output = base64_encode($output);
    return $output;
}
//Desencryptar contraseña
function decryption($string)
{
    $key = hash('sha256', SECRET_KEY);
    $iv = substr(hash('sha256', SECRET_IV), 0, 16);
    $output = openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
    return $output;
}
//Formato para valores monetarios
function formatMoney($cantidad)
{
    $cantidad = number_format($cantidad, 2, SPD, SPM);
    return $cantidad;
}

function urlAbsoluta()
{

    $base_dir = __DIR__; // Absolute path to your installation, ex: /var/www/mywebsite
    $doc_root = preg_replace("!{$_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']);
    $base_url = preg_replace("!^{$doc_root}!", '', $base_dir);
    $base_url = str_replace('\\', '/', $base_url);
    $base_url = str_replace($doc_root, '', $base_url);
    $protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
    $port = $_SERVER['SERVER_PORT'];
    $disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
    $domain = $_SERVER['SERVER_NAME'];
    $BASE_URL = dirname("$protocol://{$domain}{$disp_port}{$base_url}");

    return array("BASE_URL" => $BASE_URL, "PROTOCOL" => $protocol);
}

//Funcion para obtener el último segmento de la URL
function getLastSegmentFromURL($url)
{
    // Separar la URL en partes utilizando '/' como delimitador
    $parts = explode('/', $url);

    // Obtener la última parte de la URL
    return end($parts);
}
