<?php 
	session_start();
	class Contactos extends Controllers{
		public function __construct()
		{
			parent::__construct();			
			if(empty($_SESSION['login']))
			{
				header('Location: '.base_url().'/login');
				die();
			}
			getPermisos(3);
		}

		public function Contactos()
		{
			if(empty($_SESSION['permisosMod']['r'])){
				header("Location:".base_url().'/dashboard');
			}
			$data['page_tag'] = "Contactos";
			$data['page_title'] = "CONTACTOS <small>".NOMBRE_EMPRESA."</small>";
			$data['page_name'] = "contactos";
			$data['page_functions_js'] = "functions_contactos.js";
			$this->views->getView($this,"contactos",$data);
		}

		public function getMensajes(){
			if($_SESSION['permisosMod']['r']){
				$arrData = $this->model->selectMensajes();
				for ($i=0; $i < count($arrData) ; $i++) { 
					$btnView = '';
					if($_SESSION['permisosMod']['r']){
						$btnView = '<button class="btn btn-info btn-sm" onClick="fntViewInfo('.$arrData[$i]['idMensaje'].')" title="Ver mensaje"><i class="far fa-eye"></i></button>';
					}
					if($_SESSION['permisosMod']['d']){						
						$btnDelete = '<button class="btn btn-danger btn-sm btnDelMensaje" onClick="fntDelMensaje('.$arrData[$i]['idMensaje'].')" title="Eliminar mensaje"><i class="far fa-trash-alt"></i></button>';
					}
					$arrData[$i]['options'] = '<div class="text-center">'.$btnView.' '.$btnDelete.'</div>';
				}
				echo json_encode($arrData,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

		public function getMensaje($idmensaje){
			if($_SESSION['permisosMod']['r']){
				$idmensaje = intval($idmensaje);
				if($idmensaje > 0){
					$arrData = $this->model->selectMensaje($idmensaje);
					if(empty($arrData)){
						$arrResponse = array('status' => false, 'msg' => 'Datos no encontrados.');
					}else{
						$arrResponse = array('status' => true, 'data' => $arrData);
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

		public function delMensaje()
		{
			if($_POST){
				if($_SESSION['permisosMod']['d']){
					$intIdMensaje = intval($_POST['idMensaje']);
					$requestDelete = $this->model->deleteMensaje($intIdMensaje);
					if($requestDelete)
					{
						$arrResponse = array('status' => true, 'msg' => 'Se ha eliminado el mensaje.');
					}else{
						$arrResponse = array('status' => false, 'msg' => 'Error al eliminar el mensaje.');
					}
					echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
				}
			}
			die();
		}

	}
?>