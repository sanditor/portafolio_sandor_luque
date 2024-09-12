<?php
session_start();
require_once("Models/PContactoModel.php");

class Portafolio extends Controllers
{
    use pContactoModel;
    public function __construct()
    {
        parent::__construct();
    }

    public function setContacto()
    {
        if ($_POST) {
            //dep($_POST);exit;
            $nombre = ucwords(strtolower(strClean($_POST['txtNombreContacto'])));
            $email  = strtolower(strClean($_POST['txtEmailContacto']));
            $tema  = strClean($_POST['txtTemaContacto']);
            $mensaje  = strClean($_POST['txtMensajeContacto']);
            $useragent = $_SERVER['HTTP_USER_AGENT'];
            $ip        = $_SERVER['REMOTE_ADDR'];
            $dispositivo = "PC";

            if (preg_match("/mobile/i", $useragent)) {
                $dispositivo = "Movil";
            } else if (preg_match("/tablet/i", $useragent)) {
                $dispositivo = "Tablet";
            } else if (preg_match("/iPhone/i", $useragent)) {
                $dispositivo = "iPhone";
            } else if (preg_match("/iPad/i", $useragent)) {
                $dispositivo = "iPad";
            }

            $userContact = $this->insertContacto($nombre, $email, $tema, $mensaje, $ip, $dispositivo, $useragent);
            if ($userContact > 0) {
                $arrResponse = array('status' => true, 'msg' => "Gracias por tu mensaje, ha sido enviado con éxito! Pronto te responderemos!!");
                //Enviar correo
                $dataUsuario = array(
                    'asunto' => "Nuevo Usuario en contacto",
                    'email' => EMAIL_CONTACTO,
                    'nombreContacto' => $nombre,
                    'emailContacto' => $email,
                    'temaContacto' => $tema,
                    'mensajeContacto' => $mensaje
                );
                sendMailer($dataUsuario, "email_contacto");
            } else {
                $arrResponse = array('status' => false, 'msg' => "Oops! Hay problema al enviar tu mensaje.");
            }
            echo json_encode($arrResponse, JSON_UNESCAPED_UNICODE);
        }
        die();
    }
}
